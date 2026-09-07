<x-layouts.app active-page="products" title="Paperless.id - Katalog Produk & Karya Desain">

    <!-- ================= Products Hero Section ================= -->
    <section class="bg-gradient-to-br from-blue-50/70 via-slate-50 to-indigo-50/50 border border-slate-200/80 rounded-3xl p-10 sm:p-14 text-center my-6 shadow-sm relative overflow-hidden">
        <div class="absolute -right-24 -top-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-4">
            <span class="px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide inline-block">
                Katalog Produk & Hasil Karya Desain
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
                Katalog Produk & Karya Desain
            </h1>
            <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-normal">
                Kategori produk dikelompokkan sesuai acuan Price List resmi. Setiap kartu menampilkan hasil karya asli tanpa duplikasi foto.
            </p>

            <div class="pt-2">
                <button onclick="togglePricelistModal(true)" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs shadow-md transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span>Buka Poster Price List Resmi</span>
                </button>
            </div>
        </div>
    </section>

    <!-- ================= Category Filter Pills (Based on Price List Bedah) ================= -->
    <div class="flex flex-wrap items-center justify-center gap-2.5 my-8" id="category-filter-bar">
        <button onclick="filterProducts('all', 'Semua Produk', this)" class="filter-btn active-pill bg-slate-900 text-white font-semibold text-xs sm:text-sm px-5 py-2 rounded-full shadow-sm transition-all">
            Semua Produk
        </button>
        <button onclick="filterProducts('poster', 'Desain Poster', this)" class="filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Desain Poster
        </button>
        <button onclick="filterProducts('sosmed', 'Social Media & Feeds', this)" class="filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Social Media & Feeds
        </button>
        <button onclick="filterProducts('banner', 'Desain Banner & Cetak', this)" class="filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Desain Banner & Cetak
        </button>
        <button onclick="filterProducts('ebook', 'E-Book Digital', this)" class="filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            E-Book Digital
        </button>
        <button onclick="filterProducts('business', 'Business Essentials Kit', this)" class="filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all">
            Business Essentials Kit
        </button>
    </div>

    <!-- ================= Product Grid Cards ================= -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8" id="product-grid">
        @foreach($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>

    <!-- ================= Professional Empty State (Triggered when 0 items in category) ================= -->
    <div id="category-empty-state" class="hidden bg-white border border-slate-200/90 rounded-3xl p-8 sm:p-14 text-center my-10 shadow-sm relative overflow-hidden">
        <div class="max-w-xl mx-auto space-y-5">
            <!-- Professional Icon Glow -->
            <div class="w-16 h-16 rounded-2xl bg-blue-50 border border-blue-100 text-blue-600 mx-auto flex items-center justify-center shadow-inner">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>

            <div class="space-y-2">
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-bold uppercase tracking-wider inline-block">
                    Informasi Layanan Kustom
                </span>
                <h3 class="text-2xl font-extrabold text-slate-900" id="empty-state-category-title">
                    Belum Ada Portofolio Sampel Untuk Kategori Ini
                </h3>
                <p class="text-sm text-slate-600 leading-relaxed font-normal" id="empty-state-category-desc">
                    Dokumentasi sampel hasil karya untuk kategori ini sedang dalam proses pembaruan portofolio. Namun, Anda tetap dapat memesan pengerjaan desain kustom kategori ini secara langsung sesuai dengan acuan daftar harga resmi di Price List kami.
                </p>
            </div>

            <!-- Features Trust Badges -->
            <div class="flex flex-wrap items-center justify-center gap-3 pt-1">
                <span class="px-3 py-1 rounded-lg bg-blue-50 text-blue-800 text-xs font-semibold border border-blue-100">
                    ✓ Harga Sesuai Pricelist
                </span>
                <span class="px-3 py-1 rounded-lg bg-emerald-50 text-emerald-800 text-xs font-semibold border border-emerald-100">
                    ✓ Garansi Revisi Desain
                </span>
                <span class="px-3 py-1 rounded-lg bg-indigo-50 text-indigo-800 text-xs font-semibold border border-indigo-100">
                    ✓ File Hi-Res Siap Pakai
                </span>
            </div>

            <!-- Action Buttons -->
            <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-3">
                <a id="empty-state-wa-btn" href="https://wa.me/6287729949555?text=Halo%20Paperless.id,%20saya%20tertarik%20memesan%20layanan%20kustom%20sesuai%20Pricelist." target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow-md transition-all flex items-center justify-center gap-2">
                    <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
                    <span>Pesan Layanan Ini via WA</span>
                </a>
                <button onclick="togglePricelistModal(true)" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-blue-50 hover:bg-blue-100 text-blue-800 font-bold text-xs border border-blue-200 transition-all">
                    Lihat Poster Price List
                </button>
            </div>
        </div>
    </div>

    <!-- Script Filter Kategori Produk dengan Professional Empty State -->
    <script>
        function filterProducts(category, categoryName, btnElement) {
            // Highlight active button
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.className = 'filter-btn bg-slate-100 hover:bg-slate-200 text-slate-600 font-medium text-xs sm:text-sm px-5 py-2 rounded-full transition-all';
            });

            btnElement.className = 'filter-btn bg-slate-900 text-white font-semibold text-xs sm:text-sm px-5 py-2 rounded-full shadow-sm transition-all';

            const cards = document.querySelectorAll('.product-card');
            let visibleCount = 0;

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            const emptyState = document.getElementById('category-empty-state');
            const productGrid = document.getElementById('product-grid');
            const titleElem = document.getElementById('empty-state-category-title');
            const descElem = document.getElementById('empty-state-category-desc');
            const waBtn = document.getElementById('empty-state-wa-btn');

            if (visibleCount === 0) {
                productGrid.style.display = 'none';
                emptyState.classList.remove('hidden');

                titleElem.innerText = `Belum Ada Portofolio Sampel Untuk ${categoryName}`;
                descElem.innerText = `Dokumentasi hasil karya untuk kategori ${categoryName} sedang dalam proses pembaruan portofolio. Namun, layanan ${categoryName} tetap dapat dipesan langsung sesuai dengan acuan daftar harga resmi di Price List kami.`;
                waBtn.href = `https://wa.me/6287729949555?text=${encodeURIComponent('Halo Paperless.id, saya berminat memesan layanan kustom kategori ' + categoryName + ' sesuai daftar harga Price List.')}`;
            } else {
                productGrid.style.display = 'grid';
                emptyState.classList.add('hidden');
            }
        }
    </script>

</x-layouts.app>
