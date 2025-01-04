
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Song</title>
</head>
<body>
    <h1>Now Playing: {{ $song->musicName }} by {{ $song->artistName }}</h1>
    
    <!-- Audio Player -->
    <audio controls>
        <source src="{{ asset('storage/' . $song->musicFile) }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
