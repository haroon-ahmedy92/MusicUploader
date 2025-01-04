<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music App</title>
    @vite(['resources/css/app.css', 'resources/css/app.js'])
</head>

<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    <header class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div class="text-xl font-bold"><a href="/">Musify</a></div>
        <div class="w-1/3">

            <form action="/search" method="POST">
                @csrf
                <input type="text" placeholder="Search for songs, artists..."
                    class="w-full px-4 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300 text-black"
                    name="searchvalue">
            </form>

        </div>
        <div>
            <button class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-200">Profile</button>
        </div>
    </header>

    <main class="p-6 flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>
