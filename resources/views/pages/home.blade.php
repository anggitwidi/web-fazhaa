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

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white shadow rounded-xl p-4">
                <img src="/images/car1.png" class="mb-4">
                <h3 class="font-semibold">Raize</h3>
            </div>
        </div>
    </section>

@endsection