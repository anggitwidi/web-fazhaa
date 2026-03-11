@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Hero Section --}}
    <section class="relative">
        <img src="/images/hero.jpg" class="w-full h-[500px] object-cover">
    </section>

    {{-- Latest Cars --}}
    <section class="py-16 container mx-auto">
        <h2 class="text-2xl font-bold mb-8">Lihat Yang Terbaru</h2>

        <x-car-card 
            image="/images/raize.png"
            name="Raize"
            price="Rp 200.000.000"
        />
    </section>

@endsection