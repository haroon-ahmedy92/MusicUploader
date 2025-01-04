
@props(['song'])

<a href="/download/{{ $song->id }}">
    <button type="submit" class="p-3 bg-green-600 rounded-full hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V3" />
        </svg>
    </button>
</a>
