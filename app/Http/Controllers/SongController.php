<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SongController extends Controller
{

    public function index()
    {

        $songs = Song::latest()->get();
        return view('welcome',[
            'songs' => $songs,
        ]);
    }

    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'musicname' => ['required', 'string'],
            'artistname' => ['required', 'string'],
            'musicpicture' => ['required', 'file', 'mimes:png,webp,jpg,jpeg'],
            'musicfile' => 'required|mimes:mp3',
        ]);
    
        try {
            $musicpicturePath = $request->file('musicpicture')->store('musicImages');
            $musicfilePath = $request->file('musicfile')->store('musicFiles');
    
            Song::create([
                'musicName' => $request->input('musicname'),
                'artistName' => $request->input('artistname'),
                'musicPicture' => $musicpicturePath,
                'musicFile' => $musicfilePath,
            ]);

            return redirect('/')->with('success', 'Song uploaded successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['musicfile' => 'The music file failed to upload.'])->withInput();
        }
    }


    public function play(Song $song) {
    if (!$song || !isset($song->musicFile)) {
        abort(404, 'File not found.');
    }

    $filePath = storage_path('app/public/' . $song->musicFile);

    if (!file_exists($filePath)) {
        abort(404, 'File does not exist.');
    }

    return Response::file($filePath, [
        'Content-Type' => 'audio/mp3', 
        'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
    ]);
    }
    
//     public function play(Song $song)
// {

//     // Ensure the song and the file exist
//     // if (!$song || !isset($song->musicFile)) {
//     //     abort(404, 'File not found.');
//     // }

  


//     // Construct the file path
//     $filePath = storage_path('app/public/' . $song->musicFile);  // This assumes the song file is stored in storage/app

//     // dd($filePath);

//     // if (!file_exists($filePath)) {
//     //     abort(404, 'File does not exist.');
//     // }

  

//     // Return the song file to be played in a new view
//     return view('play', ['song' => $song, 'filePath' => $filePath]);
// }


    /**
     * Display the specified resource.
     */

     public function download(Song $song) {

           $filePath = public_path('storage/' . $song->musicFile);

           return response()->download($filePath);
     }

     public function search(Request $request) {
        $songs = Song::query()
        ->where('musicName', 'LIKE', '%' .request('searchvalue'). '%')
        ->orWhere('artistName', 'LIKE', '%' .request('searchvalue'). '%')
        ->get();

        return view('/search', ['songs' => $songs]);

     }

}
