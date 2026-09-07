@props(['siteInfo' => []])

@php
    $info = array_merge([
        'name' => 'Paperless.id',
        'phone' => '087729949555',
        'phone_raw' => '6287729949555',
        'email' => 'syarlamusabih@gmail.com',
        'instagram' => '@meyaminut',
        'instagram_url' => 'https://instagram.com/meyaminut',
        'description' => 'Platform layanan & aset digital ramah lingkungan. Dirancang untuk masa depan bisnis tanpa sampah kertas.'
    ], $siteInfo);
@endphp

<footer class="pt-10 pb-6 border-t border-slate-200/80 space-y-8 text-sm text-slate-600 mt-12">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
        <!-- Column 1: Brand Info -->
        <div class="md:col-span-5 space-y-3">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo-icon.png') }}" alt="Paperless.id Icon" class="h-10 w-auto">
                <img src="{{ asset('images/logo-text.png') }}" alt="Paperless.id Logo" class="h-7 w-auto">
            </a>
            <p class="text-xs text-slate-500 leading-relaxed max-w-sm">
                {{ $info['description'] }}
            </p>
        </div>

        <!-- Column 2: Navigation Links -->
        <div class="md:col-span-3 space-y-2">
            <div class="font-bold text-slate-900 text-xs uppercase tracking-wider">Navigasi Utama</div>
            <div class="flex flex-col gap-2 text-xs">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <a href="{{ route('products') }}" class="hover:text-blue-600 transition-colors">Produk</a>
                <a href="{{ route('services') }}" class="hover:text-blue-600 transition-colors">Layanan</a>
                <a href="{{ route('portfolio') }}" class="hover:text-blue-600 transition-colors">Portofolio</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600 transition-colors">Kontak</a>
            </div>
        </div>

        <!-- Column 3: Contact & Social Info -->
        <div class="md:col-span-4 space-y-2">
            <div class="font-bold text-slate-900 text-xs uppercase tracking-wider">Hubungi Kami</div>
            <div class="flex flex-col gap-2.5 text-xs text-slate-600">
                <a href="https://wa.me/{{ $info['phone_raw'] }}?text=Halo%20Paperless.id," target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
                    <span>WhatsApp:</span> <span class="font-semibold text-slate-900">{{ $info['phone'] }}</span>
                </a>
                <a href="mailto:{{ $info['email'] }}" class="hover:text-blue-600 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>Email:</span> <span class="font-semibold text-slate-900">{{ $info['email'] }}</span>
                </a>
                <a href="{{ $info['instagram_url'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4 text-rose-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    <span>Instagram:</span> <span class="font-semibold text-slate-900">{{ $info['instagram'] }}</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
        <div>
            © {{ date('Y') }} {{ $info['name'] }}. Hak Cipta Dilindungi.
        </div>
        <div class="flex gap-4">
            <a href="{{ route('privacy') }}" class="hover:text-blue-600 transition-colors">Kebijakan Privasi</a>
            <a href="{{ route('terms') }}" class="hover:text-blue-600 transition-colors">Syarat & Ketentuan</a>
        </div>
    </div>
</footer>
