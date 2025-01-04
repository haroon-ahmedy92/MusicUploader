

@props(['song'])

<a href="/play/{{ $song->id }}">
    <button type="submit" class="p-3 bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M5 3v18l15-9L5 3z"></path>
        </svg>
    </button>
</a>
