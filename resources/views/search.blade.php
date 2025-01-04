<x-layout>
    <section class="mt-10">
        <x-heading>Search Results</x-heading>

        <div class="flex-col space-y-1">

            @foreach ($songs as $song )

            <x-cards.card-small>
                <x-cards.card-small-image src="{{ asset('storage/' .$song->musicPicture)}}" alt="Album Cover" />
                <div class="py-10 px-2 text-center space-y-5">
                    <x-cards.card-small-songtitle>{{ $song->musicName }}</x-cards.card-small-songtitle>
                    <x-cards.card-small-artistname>{{ $song->artistName }}</x-cards.card-small-artistname>    
                </div>
                <x-playbutton :song="$song"/>
                <x-downloadbutton :song="$song"/>
            </x-cards.card-small>

            @endforeach
        
        </div>


    </section>
</x-layout>