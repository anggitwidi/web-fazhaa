@extends('layouts.app')

@section('content')

<div class="bg-white min-h-screen">

{{-- Header Section --}}
<div class="bg-gray-50 border-b border-gray-200 py-10">
    <div class="max-w-6xl mx-auto px-6">
        <a href="/" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-gray-800 transition-colors duration-200 mb-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Home
        </a>
        <h1 class="text-3xl font-bold text-gray-900">Semua Kendaraan</h1>
        <p class="text-gray-500 mt-1">Temukan kendaraan Toyota terbaik untuk Anda</p>
    </div>
</div>

    {{-- Filter Tabs --}}
    <div class="sticky top-0 z-10 bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex overflow-x-auto scrollbar-hide" id="filterTabs">
                @php
                    $tabs = [
                        ['id' => 'semua',      'label' => 'Paling Laku ☆'],
                        ['id' => 'mpv',        'label' => 'MPV'],
                        ['id' => 'suv',        'label' => 'SUV'],
                        ['id' => 'hatchback',  'label' => 'Hatchback'],
                        ['id' => 'sedan',      'label' => 'Sedan'],
                        ['id' => 'komersial',  'label' => 'Komersial'],
                    ];
                @endphp

                @foreach($tabs as $tab)
                    <button
                        onclick="filterCars('{{ $tab['id'] }}')"
                        id="tab-{{ $tab['id'] }}"
                        class="tab-btn whitespace-nowrap px-6 py-4 text-sm font-medium border-b-2 transition-colors duration-200
                               {{ $loop->first ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700' }}">
                        {{ $tab['label'] }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Car List --}}
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="space-y-6" id="carList">

            {{-- RANGGA --}}
            <div class="car-card bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300"
                 data-category="komersial">
                <div class="flex flex-col md:flex-row">
                    {{-- Image Gallery --}}
                    <div class="md:w-2/5 bg-gray-50">
                        <div class="relative">
                            {{-- Main Image --}}
                            <div class="main-img-wrapper h-56 md:h-full flex items-center justify-center p-4 bg-gray-100">
                                <img src="{{ asset('images/rangga.png') }}" alt="Toyota Rangga"
                                     class="main-img h-48 object-contain transition-opacity duration-300">
                            </div>
                            {{-- Thumbnail Strip --}}
                            <div class="flex gap-2 p-3 bg-white border-t border-gray-100">
                                <button onclick="switchImage(this, '{{ asset('images/rangga.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-green-500 flex-shrink-0">
                                    <img src="{{ asset('images/rangga.png') }}" class="w-full h-full object-cover">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/rangga.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/rangga.png') }}" class="w-full h-full object-cover scale-110">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/rangga.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/rangga.png') }}" class="w-full h-full object-cover scale-125">
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Car Details --}}
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <div>
                            <div class="mb-1">
                                <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">2025</span>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                                Toyota <span class="text-gray-700">Rangga</span>
                            </h2>

                            <div class="h-px bg-gray-100 mb-4"></div>

                            {{-- Specs Grid --}}
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Tipe Varian</span>
                                    <p class="font-semibold text-gray-800">3 Tipe</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Pilihan Warna</span>
                                    <p class="font-semibold text-gray-800">3 Warna</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Transmisi</span>
                                    <p class="font-semibold text-gray-800">Manual/AT</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Bahan Bakar</span>
                                    <p class="font-semibold text-gray-800">Diesel</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Kapasitas</span>
                                    <p class="font-semibold text-gray-800">2.400 CC</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Penggerak</span>
                                    <p class="font-semibold text-gray-800">4WD</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-4">Karoseri Flatbed / Pickup Tangguh</div>

                            <div class="h-px bg-gray-100 mb-4"></div>
                        </div>

                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <span class="text-xs text-gray-400">Mulai dari</span>
                                <p class="text-2xl font-bold text-gray-900">Rp 280.000.000</p>
                            </div>
                            <a href="https://wa.me/6281935191439?text=Halo,%20saya%20tertarik%20dengan%20Toyota%20Rangga.%20Bisa%20info%20lebih%20lanjut?"
                               target="_blank"
                               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FORTUNER --}}
            <div class="car-card bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300"
                 data-category="suv">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 bg-gray-50">
                        <div class="relative">
                            <div class="main-img-wrapper h-56 md:h-full flex items-center justify-center p-4 bg-gray-100">
                                <img src="{{ asset('images/fortuner.png') }}" alt="Toyota Fortuner"
                                     class="main-img h-48 object-contain transition-opacity duration-300">
                            </div>
                            <div class="flex gap-2 p-3 bg-white border-t border-gray-100">
                                <button onclick="switchImage(this, '{{ asset('images/fortuner.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-green-500 flex-shrink-0">
                                    <img src="{{ asset('images/fortuner.png') }}" class="w-full h-full object-cover">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/fortuner.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/fortuner.png') }}" class="w-full h-full object-cover scale-110">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/fortuner.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/fortuner.png') }}" class="w-full h-full object-cover scale-125">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">2025</span>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 mt-1">
                                Toyota <span class="text-gray-700">Fortuner</span>
                            </h2>
                            <div class="h-px bg-gray-100 mb-4"></div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Tipe Varian</span>
                                    <p class="font-semibold text-gray-800">6 Tipe</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Pilihan Warna</span>
                                    <p class="font-semibold text-gray-800">5 Warna</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Transmisi</span>
                                    <p class="font-semibold text-gray-800">AT Terbaru</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Bahan Bakar</span>
                                    <p class="font-semibold text-gray-800">Bensin/Diesel</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Kapasitas</span>
                                    <p class="font-semibold text-gray-800">2.755 CC</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Penggerak</span>
                                    <p class="font-semibold text-gray-800">4x4 / 4x2</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-4">SUV Tangguh dengan Fitur Safety Terkini</div>
                            <div class="h-px bg-gray-100 mb-4"></div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <span class="text-xs text-gray-400">Mulai dari</span>
                                <p class="text-2xl font-bold text-gray-900">Rp 550.000.000</p>
                            </div>
                            <a href="https://wa.me/6281935191439?text=Halo,%20saya%20tertarik%20dengan%20Toyota%20Fortuner.%20Bisa%20info%20lebih%20lanjut?"
                               target="_blank"
                               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- AGYA --}}
            <div class="car-card bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300"
                 data-category="hatchback">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 bg-gray-50">
                        <div class="relative">
                            <div class="main-img-wrapper h-56 md:h-full flex items-center justify-center p-4 bg-gray-100">
                                <img src="{{ asset('images/agya.png') }}" alt="Toyota Agya"
                                     class="main-img h-48 object-contain transition-opacity duration-300">
                            </div>
                            <div class="flex gap-2 p-3 bg-white border-t border-gray-100">
                                <button onclick="switchImage(this, '{{ asset('images/agya.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-green-500 flex-shrink-0">
                                    <img src="{{ asset('images/agya.png') }}" class="w-full h-full object-cover">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/agya.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/agya.png') }}" class="w-full h-full object-cover scale-110">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/agya.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/agya.png') }}" class="w-full h-full object-cover scale-125">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">2025</span>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 mt-1">
                                Toyota <span class="text-gray-700">Agya</span>
                            </h2>
                            <div class="h-px bg-gray-100 mb-4"></div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Tipe Varian</span>
                                    <p class="font-semibold text-gray-800">4 Tipe</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Pilihan Warna</span>
                                    <p class="font-semibold text-gray-800">6 Warna</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Transmisi</span>
                                    <p class="font-semibold text-gray-800">CVT Terbaru</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Bahan Bakar</span>
                                    <p class="font-semibold text-gray-800">Bensin</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Kapasitas</span>
                                    <p class="font-semibold text-gray-800">1.197 CC</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Penggerak</span>
                                    <p class="font-semibold text-gray-800">FWD</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-4">City Car Irit & Stylish untuk Generasi Muda</div>
                            <div class="h-px bg-gray-100 mb-4"></div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <span class="text-xs text-gray-400">Mulai dari</span>
                                <p class="text-2xl font-bold text-gray-900">Rp 175.000.000</p>
                            </div>
                            <a href="https://wa.me/6281935191439?text=Halo,%20saya%20tertarik%20dengan%20Toyota%20Agya.%20Bisa%20info%20lebih%20lanjut?"
                               target="_blank"
                               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ZENIX --}}
            <div class="car-card bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300"
                 data-category="mpv">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 bg-gray-50">
                        <div class="relative">
                            <div class="main-img-wrapper h-56 md:h-full flex items-center justify-center p-4 bg-gray-100">
                                <img src="{{ asset('images/zenix.png') }}" alt="Toyota Zenix"
                                     class="main-img h-48 object-contain transition-opacity duration-300">
                            </div>
                            <div class="flex gap-2 p-3 bg-white border-t border-gray-100">
                                <button onclick="switchImage(this, '{{ asset('images/zenix.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-green-500 flex-shrink-0">
                                    <img src="{{ asset('images/zenix.png') }}" class="w-full h-full object-cover">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/zenix.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/zenix.png') }}" class="w-full h-full object-cover scale-110">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/zenix.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/zenix.png') }}" class="w-full h-full object-cover scale-125">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">2025</span>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 mt-1">
                                Toyota <span class="text-gray-700">Zenix</span>
                            </h2>
                            <div class="h-px bg-gray-100 mb-4"></div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Tipe Varian</span>
                                    <p class="font-semibold text-gray-800">5 Tipe</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Pilihan Warna</span>
                                    <p class="font-semibold text-gray-800">5 Warna</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Transmisi</span>
                                    <p class="font-semibold text-gray-800">CVT / HEV</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Bahan Bakar</span>
                                    <p class="font-semibold text-gray-800">Bensin/Hybrid</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Kapasitas</span>
                                    <p class="font-semibold text-gray-800">1.987 CC</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Penggerak</span>
                                    <p class="font-semibold text-gray-800">FWD</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-4">MPV Premium dengan Teknologi Hybrid Terkini</div>
                            <div class="h-px bg-gray-100 mb-4"></div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <span class="text-xs text-gray-400">Mulai dari</span>
                                <p class="text-2xl font-bold text-gray-900">Rp 360.000.000</p>
                            </div>
                            <a href="https://wa.me/6281935191439?text=Halo,%20saya%20tertarik%20dengan%20Toyota%20Zenix.%20Bisa%20info%20lebih%20lanjut?"
                               target="_blank"
                               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RAIZE --}}
            <div class="car-card bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300"
                 data-category="suv">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 bg-gray-50">
                        <div class="relative">
                            <div class="main-img-wrapper h-56 md:h-full flex items-center justify-center p-4 bg-gray-100">
                                <img src="{{ asset('images/raize.png') }}" alt="Toyota Raize"
                                     class="main-img h-48 object-contain transition-opacity duration-300">
                            </div>
                            <div class="flex gap-2 p-3 bg-white border-t border-gray-100">
                                <button onclick="switchImage(this, '{{ asset('images/raize.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-green-500 flex-shrink-0">
                                    <img src="{{ asset('images/raize.png') }}" class="w-full h-full object-cover">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/raize.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/raize.png') }}" class="w-full h-full object-cover scale-110">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/raize.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/raize.png') }}" class="w-full h-full object-cover scale-125">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">2025</span>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 mt-1">
                                Toyota <span class="text-gray-700">Raize</span>
                            </h2>
                            <div class="h-px bg-gray-100 mb-4"></div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Tipe Varian</span>
                                    <p class="font-semibold text-gray-800">5 Tipe</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Pilihan Warna</span>
                                    <p class="font-semibold text-gray-800">7 Warna</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Transmisi</span>
                                    <p class="font-semibold text-gray-800">CVT / MT</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Bahan Bakar</span>
                                    <p class="font-semibold text-gray-800">Bensin</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Kapasitas</span>
                                    <p class="font-semibold text-gray-800">998 CC Turbo</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Penggerak</span>
                                    <p class="font-semibold text-gray-800">FWD / AWD</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-4">SUV Kompak Bertenaga Turbo yang Sporty</div>
                            <div class="h-px bg-gray-100 mb-4"></div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <span class="text-xs text-gray-400">Mulai dari</span>
                                <p class="text-2xl font-bold text-gray-900">Rp 230.000.000</p>
                            </div>
                            <a href="https://wa.me/6281935191439?text=Halo,%20saya%20tertarik%20dengan%20Toyota%20Raize.%20Bisa%20info%20lebih%20lanjut?"
                               target="_blank"
                               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- VELOZ --}}
            <div class="car-card bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300"
                 data-category="mpv">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-2/5 bg-gray-50">
                        <div class="relative">
                            <div class="main-img-wrapper h-56 md:h-full flex items-center justify-center p-4 bg-gray-100">
                                <img src="{{ asset('images/veloz.png') }}" alt="Toyota Veloz"
                                     class="main-img h-48 object-contain transition-opacity duration-300">
                            </div>
                            <div class="flex gap-2 p-3 bg-white border-t border-gray-100">
                                <button onclick="switchImage(this, '{{ asset('images/veloz.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-green-500 flex-shrink-0">
                                    <img src="{{ asset('images/veloz.png') }}" class="w-full h-full object-cover">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/veloz.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/veloz.png') }}" class="w-full h-full object-cover scale-110">
                                </button>
                                <button onclick="switchImage(this, '{{ asset('images/veloz.png') }}')"
                                    class="thumb-btn w-16 h-12 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-300 flex-shrink-0 opacity-70">
                                    <img src="{{ asset('images/veloz.png') }}" class="w-full h-full object-cover scale-125">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-semibold tracking-widest text-gray-400 uppercase">2025</span>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 mt-1">
                                Toyota <span class="text-gray-700">Veloz</span>
                            </h2>
                            <div class="h-px bg-gray-100 mb-4"></div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Tipe Varian</span>
                                    <p class="font-semibold text-gray-800">4 Tipe</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Pilihan Warna</span>
                                    <p class="font-semibold text-gray-800">4 Warna</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Transmisi</span>
                                    <p class="font-semibold text-gray-800">CVT Terbaru</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mb-3 text-sm">
                                <div>
                                    <span class="text-gray-400 text-xs">Bahan Bakar</span>
                                    <p class="font-semibold text-gray-800">Bensin</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Kapasitas</span>
                                    <p class="font-semibold text-gray-800">1.496 CC</p>
                                </div>
                                <div>
                                    <span class="text-gray-400 text-xs">Penggerak</span>
                                    <p class="font-semibold text-gray-800">FWD</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500 mb-4">MPV Sporty dengan Kabin Luas & Modern</div>
                            <div class="h-px bg-gray-100 mb-4"></div>
                        </div>
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div>
                                <span class="text-xs text-gray-400">Mulai dari</span>
                                <p class="text-2xl font-bold text-gray-900">Rp 265.000.000</p>
                            </div>
                            <a href="https://wa.me/6281935191439?text=Halo,%20saya%20tertarik%20dengan%20Toyota%20Veloz.%20Bisa%20info%20lebih%20lanjut?"
                               target="_blank"
                               class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-xl transition-colors duration-200 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                Hubungi Sales
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Filter & Image Switch JS --}}
<script>
    function filterCars(category) {
        // Update active tab style
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('border-green-500', 'text-green-600');
            btn.classList.add('border-transparent', 'text-gray-500');
        });
        const activeTab = document.getElementById('tab-' + category);
        if (activeTab) {
            activeTab.classList.add('border-green-500', 'text-green-600');
            activeTab.classList.remove('border-transparent', 'text-gray-500');
        }

        // Filter cards
        document.querySelectorAll('.car-card').forEach(card => {
            if (category === 'semua' || card.dataset.category === category) {
                card.style.display = 'block';
                card.style.animation = 'fadeIn 0.3s ease';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function switchImage(btn, imgSrc) {
        const card = btn.closest('.car-card');
        const mainImg = card.querySelector('.main-img');

        // Fade out
        mainImg.style.opacity = '0';
        setTimeout(() => {
            mainImg.src = imgSrc;
            mainImg.style.opacity = '1';
        }, 150);

        // Update thumb borders
        card.querySelectorAll('.thumb-btn').forEach(t => {
            t.classList.remove('border-green-500');
            t.classList.add('border-transparent', 'opacity-70');
        });
        btn.classList.add('border-green-500');
        btn.classList.remove('border-transparent', 'opacity-70');
    }
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(8px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .main-img { transition: opacity 0.15s ease; }
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>

@endsection