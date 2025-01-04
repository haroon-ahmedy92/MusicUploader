<x-layout>

    <div class="">
        <x-forms.page-heading>Upload Your Favourite Music Whith Us!</x-forms.page-heading>

        <x-forms.form method="POST" action="/upload" enctype="multipart/form-data" >
        <x-forms.input label="Music Name" name="musicname"/>
        <x-forms.input label="Artist Name" name="artistname"/>
        <x-forms.input label="Music Picture" name="musicpicture" type="file"/>
        <x-forms.input label="Music File" name="musicfile" type="file"/>
        <x-forms.divider/>
        <x-forms.button>Upload</x-forms.button>
        </x-forms.form>
    </div>



</x-layout>