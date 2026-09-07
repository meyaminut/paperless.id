<x-layouts.app active-page="home" title="Paperless.id - Solusi Digital Kreatif, Ramah Lingkungan">

    <!-- ================= Hero Section Container ================= -->
    <section class="bg-gradient-to-br from-blue-50/60 via-slate-50 to-indigo-50/40 border border-slate-200/80 rounded-3xl p-6 sm:p-10 lg:p-14 shadow-sm relative overflow-hidden mb-10">

        <!-- Ambient Radial Glow background -->
        <div class="absolute -right-20 -top-20 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-20 -bottom-20 w-96 h-96 bg-indigo-200/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center relative z-10">

            <!-- Left Column: Hero Content Text -->
            <div class="lg:col-span-6 space-y-6">
                <!-- Eco Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    Studio Digital Ramah Lingkungan
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-[1.15]">
                    Solusi Digital Kreatif, <span class="text-blue-600">Bebas Sampah Kertas.</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal max-w-xl">
                    Tingkatkan citra brand Anda dengan produk digital & fisik berkualitas tinggi. Kami merancang aset visual elegan tanpa limbah kertas, berdampak maksimal bagi bisnis Anda.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('products') }}" class="px-7 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm shadow-lg shadow-blue-500/25 transition-all hover:shadow-blue-500/40 hover:-translate-y-0.5 active:translate-y-0 flex items-center gap-2">
                        <span>Jelajahi Produk</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="https://wa.me/6287729949555?text=Halo%20Paperless.id,%20saya%20ingin%20konsultasi%20mengenai%20layanan%20Anda." target="_blank" rel="noopener noreferrer" class="px-7 py-3.5 rounded-xl bg-white hover:bg-slate-50 text-slate-700 border border-slate-300 font-semibold text-sm shadow-sm transition-all hover:border-slate-400 hover:-translate-y-0.5 active:translate-y-0 flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
                        <span>Hubungi WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Hero Device Mockup Section -->
            <div class="lg:col-span-6 relative flex items-center justify-center min-h-[380px] sm:min-h-[440px]">
                <div class="relative w-full max-w-xl aspect-[16/11] bg-gradient-to-tr from-slate-100/90 to-blue-50/80 rounded-2xl border border-white/80 shadow-inner p-4 sm:p-6 flex items-center justify-center overflow-visible">

                    <div class="absolute inset-0 rounded-2xl opacity-20 pointer-events-none" 
                         style="background-image: linear-gradient(#94a3b8 1px, transparent 1px), linear-gradient(90deg, #94a3b8 1px, transparent 1px); background-size: 20px 20px;"></div>

                    <!-- 1. LAPTOP MOCKUP -->
                    <div class="relative z-20 w-[78%] max-w-[400px]">
                        <div class="bg-slate-900 p-2 sm:p-2.5 rounded-t-2xl shadow-2xl border border-slate-700/80">
                            <div class="bg-slate-900 rounded-lg overflow-hidden aspect-[16/10] relative group">
                                <img src="{{ asset('images/laptop_mockup.png') }}" alt="Laptop Mockup Dashboard" class="w-full h-full object-cover rounded">
                            </div>
                        </div>
                        <div class="h-3.5 bg-gradient-to-b from-slate-300 to-slate-400 rounded-b-xl shadow-md relative mx-auto w-[112%] -ml-[6%] flex items-center justify-center">
                            <div class="w-16 h-1 bg-slate-500 rounded-full opacity-60"></div>
                        </div>
                    </div>

                    <!-- 2. SMARTPHONE MOCKUP -->
                    <div class="absolute left-2 sm:left-4 bottom-4 sm:bottom-6 z-30 w-[24%] max-w-[110px]">
                        <div class="bg-slate-900 p-1.5 sm:p-2 rounded-[22px] shadow-2xl border border-slate-700/90 ring-1 ring-black/20">
                            <div class="bg-slate-900 rounded-[16px] overflow-hidden aspect-[9/18] relative">
                                <img src="{{ asset('images/smartphone_mockup.png') }}" alt="Smartphone Mockup" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- 3. TABLET MOCKUP -->
                    <div class="absolute right-2 sm:right-4 top-4 sm:top-6 z-30 w-[30%] max-w-[145px]">
                        <div class="bg-slate-900 p-2 rounded-2xl shadow-2xl border border-slate-700/90 ring-1 ring-black/20">
                            <div class="bg-slate-900 rounded-xl overflow-hidden aspect-[3/4] relative">
                                <img src="{{ asset('images/tablet_mockup.png') }}" alt="Tablet Mockup" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ================= Featured Products Showcase ================= -->
    <section class="mb-12">
        <div class="flex items-center justify-between mb-6">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block">Koleksi Pilihan</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Produk & Karya Unggulan</h2>
            </div>
            <a href="{{ route('products') }}" class="text-xs sm:text-sm font-bold text-blue-600 hover:text-blue-700 flex items-center gap-1">
                Lihat Semua Produk →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </section>

    <!-- ================= 3 Feature Cards Section ================= -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white border border-slate-200/80 p-7 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 group">
            <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">Ramah Lingkungan</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
                100% alur kerja digital tanpa limbah kertas fisik, mendukung masa depan industri kreatif yang berkelanjutan.
            </p>
        </div>

        <div class="bg-white border border-slate-200/80 p-7 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 group">
            <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">Pengerjaan Cepat</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
                Pengiriman aset secara terstruktur dan efisien untuk memastikan hasil instan tanpa mengurangi kualitas desain.
            </p>
        </div>

        <div class="bg-white border border-slate-200/80 p-7 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 group">
            <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">Nilai Terjangkau</h3>
            <p class="text-sm text-slate-600 leading-relaxed">
                Desain berkelas internasional yang fleksibel untuk UMKM dan enterprise dengan harga yang kompetitif.
            </p>
        </div>
    </section>

</x-layouts.app>
