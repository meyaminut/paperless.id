<x-layouts.app active-page="portfolio" title="Paperless.id - Portofolio Karya Digital">

    <!-- ================= Portfolio Hero Section ================= -->
    <section class="bg-gradient-to-br from-blue-50/70 via-slate-50 to-indigo-50/50 border border-slate-200/80 rounded-3xl p-10 sm:p-14 text-center my-6 shadow-sm relative overflow-hidden">
        <div class="absolute -right-24 -top-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-4">
            <span class="px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide inline-block">
                Galeri Desain Real & Kustom
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
                Portofolio Karya Desain Kami
            </h1>
            <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-normal">
                Koleksi hasil karya poster penjualan, banner promosi acara, dan media visual digital yang telah dipercaya oleh berbagai instansi & brand.
            </p>
        </div>
    </section>

    <!-- ================= Portfolio Filter Bar ================= -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 my-8">
        <button onclick="filterPortfolio('all', this)" class="portfolio-filter-btn active-pill bg-slate-900 text-white font-semibold text-xs sm:text-sm px-5 py-2 rounded-full shadow-sm transition-all">
            Semua Karya
        </button>
        <button onclick="filterPortfolio('posters', this)" class="portfolio-filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Poster Promosi & Jualan
        </button>
        <button onclick="filterPortfolio('banners', this)" class="portfolio-filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Banner Event & Spanduk
        </button>
        <button onclick="filterPortfolio('custom', this)" class="portfolio-filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Katalog & Merchandising
        </button>
    </div>

    <!-- ================= Portfolio Grid Cards (3-Column Uniform Grid) ================= -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8" id="portfolio-grid">
        @foreach($portfolioItems as $item)
            <div data-category="{{ $item['category'] }}" class="portfolio-card bg-white border border-slate-200/90 rounded-3xl p-5 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col justify-between">
                
                <div>
                    <!-- Image Container (Clean Fixed Height with Aspect Ratio) -->
                    <div class="w-full h-64 {{ $item['bg_color'] }} rounded-2xl p-3 flex items-center justify-center overflow-hidden relative mb-4 border border-slate-100/80">
                        <img src="{{ $item['image'] }}" 
                             alt="{{ $item['title'] }}" 
                             class="max-h-full max-w-full object-contain rounded-xl shadow-xs group-hover:scale-105 transition-transform duration-500 mx-auto">
                    </div>

                    <!-- Category & Subtitle Badges -->
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <span class="{{ $item['category_color'] }} text-[11px] font-bold px-3 py-1 rounded-full border">
                            {{ $item['category_label'] }}
                        </span>
                        <span class="text-[11px] text-slate-400 font-mono font-medium">{{ $item['year'] }}</span>
                    </div>

                    <!-- Title & Description -->
                    <div class="space-y-2 mb-4">
                        <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition-colors leading-snug">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">
                            {{ $item['description'] }}
                        </p>
                    </div>
                </div>

                <!-- WA Order Action Button -->
                <div class="pt-4 border-t border-slate-100">
                    <a href="https://wa.me/6287729949555?text={{ urlencode($item['wa_text']) }}" 
                       target="_blank" rel="noopener noreferrer" 
                       class="w-full py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow transition-all flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
                        <span>Pesan Desain Similar</span>
                    </a>
                </div>

            </div>
        @endforeach
    </div>

    <!-- Script Filter Portofolio -->
    <script>
        function filterPortfolio(category, btnElement) {
            const buttons = document.querySelectorAll('.portfolio-filter-btn');
            buttons.forEach(btn => {
                btn.className = 'portfolio-filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all';
            });
            btnElement.className = 'portfolio-filter-btn bg-slate-900 text-white font-semibold text-xs sm:text-sm px-5 py-2 rounded-full shadow-sm transition-all';

            const cards = document.querySelectorAll('.portfolio-card');
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</x-layouts.app>
