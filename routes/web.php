<?php

use App\Http\Controllers\SongController;
use App\Models\Song;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', [SongController::class,'index']);

Route::get('/upload',[SongController::class,'create']);
Route::post('/upload',[SongController::class,'store']);



// Route::post('/play/{song}', function (Song $song) {
//     // Ensure the `muscFile` column has the relative path to the file
//     if (!$song || !isset($song->musicFile)) {
//         abort(404, 'File not found.');
//     }

//     // Construct the file path
//     $filePath = storage_path('app/public/' . $song->musicFile);

//     if (!file_exists($filePath)) {
//         abort(404, 'File does not exist.');
//     }

//     return Response::file($filePath, [
//         'Content-Type' => 'audio/mpeg', // Adjust MIME type based on the actual file format
//         'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
//     ]);
// });

Route::get('/play/{song}', [SongController::class, 'play']);
Route::get('/download/{song}', [SongController::class, 'download']);

Route::post('/search', [SongController::class, 'search']);
