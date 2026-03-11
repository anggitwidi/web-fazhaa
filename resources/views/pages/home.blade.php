@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <x-hero />


    {{-- Yang Terbaru --}}
    <section>
        YANG TERBARU
    </section>


    {{-- Temukan Kendaraan --}}
    <section class="bg-gray-100 py-20">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-4xl font-semibold text-center mb-14">
                Temukan Kendaraan Baru Anda
            </h2>

            <div class="grid md:grid-cols-2 gap-10">

                <x-car-card 
                    name="RANGGA"
                    image="images/rangga.png"
                />

                <x-car-card 
                    name="FORTUNER"
                    image="images/fortuner.png"
                />

                <x-car-card 
                    name="AGYA"
                    image="images/agya.png"
                />

                <x-car-card 
                    name="ZENIX"
                    image="images/zenix.png"
                />

            </div>

            <div class="flex justify-end mt-12">
                <a href="/mobil"
                class="flex items-center gap-2 text-lg font-medium hover:underline">

                    Lihat Lengkap →

                </a>
            </div>

        </div>

    </section>


    {{-- Kontak --}}
    <section>
        KONTAK
    </section>

@endsection