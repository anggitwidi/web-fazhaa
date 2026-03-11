<section class="relative w-full h-screen overflow-hidden">

    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img 
            src="{{ asset('images/hero-fortuner.jpg') }}" 
            alt="Toyota Fortuner"
            class="w-full h-full object-cover"
        >
    </div>

    {{-- Overlay Gradient (agar tulisan terlihat jelas) --}}
    <div class="absolute inset-0 bg-black/30"></div>

    {{-- Content --}}
    <div class="absolute top-10 left-1/2 -translate-x-1/2 z-10">

    <img 
        src="{{ asset('images/agungtoyota.png') }}"
        alt="Agung Toyota"
        class="h-20 md:h-24"
    >z`
</div>

</section>