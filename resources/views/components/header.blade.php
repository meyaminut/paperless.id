@props(['activePage' => ''])

<header class="flex items-center justify-between py-4 mb-6">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
        <img src="{{ asset('images/logo-icon.png') }}" alt="Paperless.id Icon" class="h-11 sm:h-12 w-auto object-contain group-hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('images/logo-text.png') }}" alt="Paperless.id Logo" class="h-8 sm:h-9 w-auto object-contain">
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-slate-600">
        <a href="{{ route('home') }}" class="{{ $activePage === 'home' ? 'text-slate-900 font-semibold border-b-2 border-slate-900 pb-1' : 'hover:text-slate-900 transition-colors' }}">Beranda</a>
        <a href="{{ route('products') }}" class="{{ $activePage === 'products' ? 'text-slate-900 font-semibold border-b-2 border-slate-900 pb-1' : 'hover:text-slate-900 transition-colors' }}">Produk</a>
        <a href="{{ route('services') }}" class="{{ $activePage === 'services' ? 'text-slate-900 font-semibold border-b-2 border-slate-900 pb-1' : 'hover:text-slate-900 transition-colors' }}">Layanan</a>
        <a href="{{ route('portfolio') }}" class="{{ $activePage === 'portfolio' ? 'text-slate-900 font-semibold border-b-2 border-slate-900 pb-1' : 'hover:text-slate-900 transition-colors' }}">Portofolio</a>
        <a href="{{ route('contact') }}" class="{{ $activePage === 'contact' ? 'text-slate-900 font-semibold border-b-2 border-slate-900 pb-1' : 'hover:text-slate-900 transition-colors' }}">Kontak</a>
    </nav>

    <!-- Navigation Action Buttons -->
    <div class="flex items-center gap-3">
        <!-- Trigger Modal Price List -->
        <button onclick="togglePricelistModal(true)" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold bg-blue-50 text-blue-800 hover:bg-blue-100 border border-blue-200 transition-all flex items-center gap-1.5 shadow-sm">
            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span>Pricelist Resmi</span>
        </button>

        <a href="https://wa.me/6287729949555?text=Halo%20Paperless.id,%20saya%20tertarik%20dengan%20layanan/produk%20Anda." target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 shadow-md transition-all hover:scale-[1.02]">
            Hubungi WA
        </a>
    </div>
</header>

<!-- ================= Modal View Pricelist Poster ================= -->
<div id="pricelist-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-sm transition-opacity duration-300">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-hidden shadow-2xl flex flex-col relative border border-slate-200">
        <!-- Modal Header -->
        <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-50">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                <h3 class="font-extrabold text-slate-900 text-base">Price List Resmi Paperless.id</h3>
            </div>
            <button onclick="togglePricelistModal(false)" class="w-8 h-8 rounded-full bg-slate-200/80 hover:bg-slate-300 flex items-center justify-center text-slate-700 font-bold text-lg transition-colors">
                ✕
            </button>
        </div>

        <!-- Modal Body (Image Poster) -->
        <div class="p-4 overflow-y-auto max-h-[75vh] flex justify-center bg-slate-100">
            <img src="{{ asset('images/pricelist.png') }}" alt="Pricelist Poster Paperless.id" class="w-full h-auto object-contain rounded-2xl shadow-md max-w-lg">
        </div>

        <!-- Modal Footer -->
        <div class="px-6 py-3.5 border-t border-slate-100 bg-white flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
            <span class="text-slate-500 font-medium">Order via WA: <strong>087729949555</strong></span>
            <a href="https://wa.me/6287729949555?text=Halo%20Paperless.id,%20saya%20ingin%20memesan%20layanan%20sesuai%20Pricelist." target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-5 py-2 rounded-xl bg-slate-900 text-white font-bold hover:bg-slate-800 text-center transition-colors">
                Pesan Sesuai Pricelist →
            </a>
        </div>
    </div>
</div>

<script>
    function togglePricelistModal(show) {
        const modal = document.getElementById('pricelist-modal');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>
