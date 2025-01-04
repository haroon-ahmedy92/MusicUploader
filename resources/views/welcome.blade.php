<x-layout>
    <section>
        <x-cards.card-wide>
            <x-cards.cardheading-wide>Your Music, Your Way!</x-cards.cardheading-wide>
            <x-cards.cardpara-wide>Download, upload, and play your favorite tracks anytime.</x-cards.cardpara-wide>
            <x-cards.cardbutton-wide>Discover Now</x-cards.cardbutton-wide>
        </x-cards.card-wide>
    </section>



    <section class="mt-10">

        <x-cards.card>
            <x-cards.cardheading>Upload Music</x-cards.cardheading>
            <x-cards.cardbuttonlink href="/upload">Upload</x-cards.cardbuttonlink>
        </x-cards.card>

    </section>

    <section class="mt-10">
        <x-heading>All/Trending Music</x-heading>

        <div class="flex-col space-y-2 space-x-1">

            @foreach ($songs as $song)
                <x-cards.card-small>
                    <x-cards.card-small-image src="{{ asset('storage/' . $song->musicPicture) }}" alt="Album Cover" />
                    <div class="py-10 px-2 text-center space-y-5 w-70 h-40">
                        <x-cards.card-small-songtitle>{{ $song->musicName }}</x-cards.card-small-songtitle>
                        <x-cards.card-small-artistname>{{ $song->artistName }}</x-cards.card-small-artistname>
                    </div>
                    <div class="w-70 h-50 ">
                        <x-playbutton :song="$song" />
                        <x-downloadbutton :song="$song" />
                    </div>

                </x-cards.card-small>
            @endforeach

        </div>

    </section>


    
</x-layout>
