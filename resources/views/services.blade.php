<x-layouts.app active-page="services" title="Paperless.id - Pricelist & Layanan Desain Resmi">

    <!-- ================= Services Hero Section ================= -->
    <section class="bg-gradient-to-br from-blue-50/70 via-slate-50 to-indigo-50/50 border border-slate-200/80 rounded-3xl p-10 sm:p-14 text-center my-6 shadow-sm relative overflow-hidden">
        <div class="absolute -right-24 -top-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-4">
            <span class="px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide inline-block">
                Acuan Harga Resmi (Price List)
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
                Daftar Harga & Layanan Digital
            </h1>
            <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-normal">
                Lihat acuan daftar harga resmi Paperless.id untuk layanan desain poster, template Instagram, e-book interaktif, dan paket identitas bisnis.
            </p>
        </div>
    </section>

    <!-- ================= Special Promo Bundling Banner (20k) ================= -->
    <div class="bg-white border border-blue-200/80 rounded-3xl p-6 sm:p-8 shadow-sm my-8 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
        <!-- Soft blue ambient blob -->
        <div class="absolute -right-16 -top-16 w-64 h-64 bg-blue-100/60 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-8 -bottom-8 w-48 h-48 bg-sky-100/60 rounded-full blur-2xl pointer-events-none"></div>

        <div class="space-y-2 text-center md:text-left z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 border border-blue-200 text-blue-800 text-xs font-extrabold tracking-wider uppercase">
                ⚡ Paket Bundling Promo
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900">
                Bundling Template Feed + Story Instagram
            </h2>
            <p class="text-slate-500 text-xs sm:text-sm max-w-xl leading-relaxed">
                Dapatkan 1 Set Template Feed IG + 1 Set Template Story IG sekaligus hanya seharga <span class="font-extrabold text-blue-600">Rp 20.000</span> — hemat dari harga normal Rp 24.000.
            </p>
        </div>

        <div class="flex items-center gap-4 z-10 flex-shrink-0">
            <div class="text-center md:text-right hidden sm:block">
                <span class="text-slate-400 line-through text-xs font-bold block">Rp 24.000</span>
                <span class="text-3xl font-extrabold text-slate-900">Rp 20.000</span>
            </div>
            <a href="https://wa.me/6287729949555?text=Halo%20Paperless.id,%20saya%20tertarik%20mengambil%20PAKET%20BUNDLING%20Template%20Feed%20%2B%20Story%20(20k)." target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-extrabold text-sm shadow-md transition-all hover:scale-[1.02] flex items-center gap-2">
                <span>Pesan Promo 20k</span>
                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>

    <!-- ================= Official Price List Poster & Interactive Table Section ================= -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 my-10 items-start">

        <!-- Poster Image Column -->
        <div class="lg:col-span-5 bg-white border border-slate-200/90 rounded-3xl p-5 shadow-sm space-y-4">
            <div class="border-b border-slate-100 pb-3 flex items-center justify-between">
                <h3 class="font-extrabold text-slate-900 text-sm">Poster Price List Resmi</h3>
                <span class="text-[11px] font-bold text-blue-600 bg-blue-50 px-2.5 py-1 rounded-full border border-blue-100">Paperless.id</span>
            </div>

            <div class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 relative group cursor-pointer" onclick="togglePricelistModal(true)">
                <img src="{{ $siteInfo['pricelist_image'] }}" alt="Official Price List Poster Paperless.id" class="w-full h-auto object-contain mx-auto group-hover:scale-102 transition-transform duration-500 rounded-xl">
                <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white font-bold text-xs gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    <span>Klik Untuk Perbesar Poster</span>
                </div>
            </div>

            <button onclick="togglePricelistModal(true)" class="w-full py-2.5 rounded-xl bg-blue-50 hover:bg-blue-100 text-blue-800 font-bold text-xs border border-blue-200 transition-colors flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                <span>Perbesar Poster Price List (Full HD)</span>
            </button>
        </div>

        <!-- Price Categories & Table Column -->
        <div class="lg:col-span-7 bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-8 shadow-sm space-y-6">
            <div class="border-b border-slate-100 pb-4">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block">Acuan Daftar Harga</span>
                <h2 class="text-2xl font-extrabold text-slate-900">Rincian Harga Menurut Kategori</h2>
            </div>

            @foreach(\App\Services\SiteDataService::getPriceListCategories() as $categoryName => $items)
                <div class="space-y-3">
                    <h3 class="font-extrabold text-slate-900 text-sm border-l-4 border-blue-600 pl-3 py-0.5 uppercase tracking-wide">
                        {{ $categoryName }}
                    </h3>
                    <div class="divide-y divide-slate-100 bg-slate-50/70 rounded-2xl p-2 border border-slate-100">
                        @foreach($items as $item)
                            <div class="py-2.5 px-3 flex items-center justify-between gap-3 group hover:bg-white rounded-xl transition-all">
                                <div>
                                    <h4 class="font-bold text-xs sm:text-sm text-slate-900 group-hover:text-blue-600 transition-colors">
                                        {{ $item['name'] }}
                                    </h4>
                                    <span class="text-[11px] text-slate-400 font-medium">Satuan: {{ $item['unit'] }}</span>
                                </div>
                                <div class="flex items-center gap-2 flex-shrink-0">
                                    @if(!empty($item['promo']))
                                        <span class="text-[10px] font-extrabold px-2 py-0.5 bg-emerald-600 text-white rounded">PROMO</span>
                                    @endif
                                    <span class="font-extrabold text-slate-900 text-xs sm:text-sm bg-white text-blue-900 px-3 py-1 rounded-lg border border-slate-200 shadow-xs">
                                        Rp {{ number_format($item['price'], 0, ',', '.') }}
                                    </span>
                                    <a href="https://wa.me/6287729949555?text={{ urlencode('Halo Paperless.id, saya tertarik memesan ' . $item['name'] . ' (Rp ' . number_format($item['price'], 0, ',', '.') . ')') }}" target="_blank" rel="noopener noreferrer" class="p-1.5 rounded-lg bg-slate-900 text-white hover:bg-slate-800 transition-colors" title="Pesan {{ $item['name'] }}">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="pt-4 border-t border-slate-100 text-center">
                <a href="https://wa.me/6287729949555?text=Halo%20Paperless.id,%20saya%20ingin%20konsultasi%20layanan%20kustom." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow transition-all">
                    <span>Konsultasi Proyek Kustom</span>
                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>

    </div>

</x-layouts.app>
