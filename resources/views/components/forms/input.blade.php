@props(['label', 'name', 'type'=> 'text'])

@php
    $defaults = [
        'type' => $type,
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-black/10 border border-blue/10 px-5 py-4 w-full focus:outline-none focus:ring focus:ring-blue-300 text-black',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>