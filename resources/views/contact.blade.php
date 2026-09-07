<x-layouts.app active-page="contact" title="Paperless.id - Hubungi Kami">

    <!-- ================= Contact Hero Section ================= -->
    <section class="bg-gradient-to-br from-blue-50/70 via-slate-50 to-indigo-50/50 border border-slate-200/80 rounded-3xl p-10 sm:p-14 text-center my-6 shadow-sm relative overflow-hidden">
        <div class="absolute -right-24 -top-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-4">
            <span class="px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide inline-block">
                Layanan Responsif
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
                Hubungi Tim Paperless.id
            </h1>
            <p class="text-sm sm:text-base text-slate-600 leading-relaxed font-normal">
                Punya pertanyaan mengenai produk, jasa desain, atau konsultasi branding? Kami siap membantu Anda.
            </p>
        </div>
    </section>

    <!-- ================= Contact Cards & Direct Options ================= -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">

        <!-- WhatsApp Channel Card -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
                </div>
                <div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-1">WhatsApp Respon Cepat</h3>
                    <p class="text-xs text-slate-500">Layanan pelanggan langsung via obrolan WhatsApp.</p>
                </div>
                <div class="text-sm font-bold text-slate-900 font-mono">
                    {{ $siteInfo['phone'] }}
                </div>
            </div>

            <div class="pt-6 mt-4 border-t border-slate-100">
                <a href="https://wa.me/{{ $siteInfo['phone_raw'] }}?text=Halo%20Paperless.id," target="_blank" rel="noopener noreferrer" class="w-full py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow transition-all flex items-center justify-center gap-2">
                    <span>Chat WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- Email Support Card -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-1">Email Resmi</h3>
                    <p class="text-xs text-slate-500">Kirimkan penawaran kerja sama atau dokumen resmi.</p>
                </div>
                <div class="text-xs font-bold text-slate-900 font-mono break-all">
                    {{ $siteInfo['email'] }}
                </div>
            </div>

            <div class="pt-6 mt-4 border-t border-slate-100">
                <a href="mailto:{{ $siteInfo['email'] }}" class="w-full py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow transition-all flex items-center justify-center gap-2">
                    <span>Kirim Email</span>
                </a>
            </div>
        </div>

        <!-- Instagram Community Card -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6 text-rose-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </div>
                <div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-1">Instagram</h3>
                    <p class="text-xs text-slate-500">Ikuti pembaruan karya & desain terbaru kami.</p>
                </div>
                <div class="text-sm font-bold text-slate-900 font-mono">
                    {{ $siteInfo['instagram'] }}
                </div>
            </div>

            <div class="pt-6 mt-4 border-t border-slate-100">
                <a href="{{ $siteInfo['instagram_url'] }}" target="_blank" rel="noopener noreferrer" class="w-full py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow transition-all flex items-center justify-center gap-2">
                    <span>Follow Instagram</span>
                </a>
            </div>
        </div>

    </div>

</x-layouts.app>
