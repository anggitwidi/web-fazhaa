<section class="bg-[#111111] py-20">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-4xl font-semibold text-center mb-14 text-white">
            Lihat Yang Terbaru
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            {{-- Card RAIZE --}}
            <div class="rounded-2xl overflow-hidden hover:scale-105 hover:shadow-2xl transition duration-300 cursor-pointer"
                 style="background: linear-gradient(to bottom, #1a1a1a 0%, #cdcdcdc1 20%, #ffffff 50%, #cdcdcdc1 75%, #1a1a1a 100%);">
                <div class="p-6 pt-8">
                    <p class="text-xs tracking-widest text-white uppercase opacity-80 text-center">NEW</p>
                    <h3 class="text-2xl font-bold text-white text-center mb-4">RAIZE</h3>
                    <img src="{{ asset('images/raize.png') }}" alt="Toyota Raize"
                         class="mx-auto h-52 object-contain drop-shadow-2xl">
                    <div class="mt-6">
                        <span class="text-xs text-white border border-white border-opacity-50 rounded px-2 py-0.5"
                              style="background: rgba(0,0,0,0.3);">Bensin</span>
                        <p class="text-white text-sm font-medium mt-2">5 Tipe Varian, 7 Warna Pilihan</p>
                    </div>
                </div>
            </div>

            {{-- Card VELOZ --}}
            <div class="rounded-2xl overflow-hidden hover:scale-105 hover:shadow-2xl transition duration-300 cursor-pointer"
                 style="background: linear-gradient(to bottom, #1a1a1a 0%, #cdcdcdc1 20%, #ffffff 50%, #cdcdcdc1 75%, #1a1a1a 100%);">
                <div class="p-6 pt-8">
                    <p class="text-xs tracking-widest text-white uppercase opacity-80 text-center">NEW</p>
                    <h3 class="text-2xl font-bold text-white text-center mb-4">RAIZE</h3>
                    <img src="{{ asset('images/raize.png') }}" alt="Toyota Veloz"
                         class="mx-auto h-52 object-contain drop-shadow-2xl">
                    <div class="mt-6">
                        <span class="text-xs text-white border border-white border-opacity-50 rounded px-2 py-0.5"
                              style="background: rgba(0,0,0,0.3);">Bensin</span>
                        <p class="text-white text-sm font-medium mt-2">4 Tipe Varian, 4 Warna Pilihan</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>