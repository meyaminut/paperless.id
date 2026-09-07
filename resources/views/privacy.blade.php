<x-layouts.app title="Paperless.id - Kebijakan Privasi">

    <!-- ================= Hero Banner ================= -->
    <section class="bg-gradient-to-br from-blue-50/70 via-slate-50 to-indigo-50/50 border border-slate-200/80 rounded-3xl p-8 sm:p-12 text-center my-6 shadow-sm relative overflow-hidden">
        <div class="absolute -right-24 -top-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-3">
            <span class="px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide inline-block">
                Legal & Keamanan Data
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Kebijakan Privasi
            </h1>
            <p class="text-xs sm:text-sm text-slate-500">
                Terakhir diperbarui: {{ date('d F Y') }}
            </p>
        </div>
    </section>

    <!-- ================= Main Content Container ================= -->
    <div class="bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-12 shadow-sm my-8 space-y-8 text-slate-700 leading-relaxed text-sm sm:text-base">
        
        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">1. Pendahuluan</h2>
            <p>
                Paperless.id ("kami") berkomitmen untuk melindungi dan menghormati privasi pengguna ("Anda"). Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi informasi pribadi yang Anda berikan saat mengakses situs web dan layanan digital kami.
            </p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">2. Informasi yang Kami Kumpulkan</h2>
            <p>Kami mengumpulkan beberapa jenis informasi untuk memberikan dan meningkatkan layanan kami kepada Anda:</p>
            <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                <li><strong class="text-slate-900">Informasi Kontak:</strong> Nama lengkap, alamat email (<code class="bg-slate-100 text-blue-600 px-1 py-0.5 rounded text-xs">{{ $siteInfo['email'] }}</code>), dan nomor WhatsApp (<code class="bg-slate-100 text-blue-600 px-1 py-0.5 rounded text-xs">{{ $siteInfo['phone'] }}</code>) yang Anda masukkan pada formulir kontak.</li>
                <li><strong class="text-slate-900">Informasi Transaksi:</strong> Detail pesanan produk digital atau permintaan layanan kustom yang Anda komunikasikan kepada tim kami.</li>
                <li><strong class="text-slate-900">Data Teknis:</strong> Alamat IP, jenis peramban (browser), dan data penggunaan situs web standar untuk keperluan analitik.</li>
            </ul>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">3. Penggunaan Informasi</h2>
            <p>Informasi yang kami kumpulkan digunakan untuk tujuan berikut:</p>
            <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                <li>Memproses pemesanan aset digital dan konsultasi layanan.</li>
                <li>Menghubungi Anda via WhatsApp atau email terkait rincian project.</li>
                <li>Meningkatkan kualitas tampilan, antarmuka, dan performa situs web kami.</li>
                <li>Menjaga keamanan dan mencegah aktivitas penyalahgunaan platform.</li>
            </ul>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">4. Perlindungan & Kerahasiaan Data</h2>
            <p>
                Kami menerapkan langkah-langkah keamanan teknis dan organisasional untuk memastikan informasi Anda tidak diakses secara tidak sah, diubah, diungkapkan, atau dihancurkan. Kami <strong>tidak pernah menjual atau menyewakan</strong> data pribadi Anda kepada pihak ketiga manapun.
            </p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">5. Hak-Hak Pengguna</h2>
            <p>
                Anda memiliki hak untuk meminta akses, koreksi, atau penghapusan informasi pribadi Anda yang tersimpan di sistem kami. Untuk mengajukan permintaan terkait data privasi Anda, silakan hubungi kami di:
            </p>
            <div class="bg-blue-50/60 border border-blue-100 p-4 rounded-2xl flex flex-col sm:flex-row gap-4 sm:items-center justify-between">
                <div>
                    <div class="font-bold text-slate-900 text-sm">Tim Support Paperless.id</div>
                    <div class="text-xs text-slate-600">Email: {{ $siteInfo['email'] }} | WA: {{ $siteInfo['phone'] }}</div>
                </div>
                <a href="https://wa.me/{{ $siteInfo['phone_raw'] }}?text=Halo%20Paperless.id,%20saya%20ingin%20menanyakan%20perihal%20Kebijakan%20Privasi." target="_blank" rel="noopener noreferrer" class="px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs shadow-sm inline-flex items-center gap-1.5 w-fit">
                    Hubungi Tim Legal
                </a>
            </div>
        </section>

    </div>

</x-layouts.app>
