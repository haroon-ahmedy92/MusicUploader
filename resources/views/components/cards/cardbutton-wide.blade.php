<button {{ $attributes->merge(["class"=>"bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-200"]) }}>
    {{ $slot }}
</button>