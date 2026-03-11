@props(['name','image'])

<div class="bg-gray-200 rounded-xl p-6 text-center 
            hover:scale-105 hover:shadow-xl transition duration-300">

    <p class="text-sm tracking-widest text-gray-500">
        NEW
    </p>

    <h3 class="text-2xl font-semibold mb-4">
        {{ $name }}
    </h3>

    <img 
        src="{{ asset($image) }}" 
        alt="{{ $name }}"
        class="mx-auto h-64 object-contain"
    >

</div>