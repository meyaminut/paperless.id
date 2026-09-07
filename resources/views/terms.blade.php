<x-layouts.app title="Paperless.id - Syarat & Ketentuan">

    <!-- ================= Hero Banner ================= -->
    <section class="bg-gradient-to-br from-blue-50/70 via-slate-50 to-indigo-50/50 border border-slate-200/80 rounded-3xl p-8 sm:p-12 text-center my-6 shadow-sm relative overflow-hidden">
        <div class="absolute -right-24 -top-24 w-96 h-96 bg-blue-200/40 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-24 -bottom-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-3">
            <span class="px-3.5 py-1.5 rounded-full bg-blue-100/80 border border-blue-200/60 text-blue-800 text-xs font-bold tracking-wide inline-block">
                Aturan & Syarat Penggunaan
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Syarat & Ketentuan Layanan
            </h1>
            <p class="text-xs sm:text-sm text-slate-500">
                Terakhir diperbarui: {{ date('d F Y') }}
            </p>
        </div>
    </section>

    <!-- ================= Main Content Container ================= -->
    <div class="bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-12 shadow-sm my-8 space-y-8 text-slate-700 leading-relaxed text-sm sm:text-base">
        
        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">1. Ketentuan Umum</h2>
            <p>
                Dengan mengakses atau menggunakan platform Paperless.id, Anda menyetujui untuk terikat oleh Syarat & Ketentuan ini. Jika Anda tidak menyetujui bagian manapun dari ketentuan ini, Anda tidak diperkenankan untuk menggunakan layanan kami.
            </p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">2. Pemesanan & Pembayaran Produk Digital</h2>
            <ul class="list-disc pl-5 space-y-1.5 text-slate-600">
                <li>Seluruh transaksi pemesanan produk fisik & jasa desain dilakukan melalui saluran resmi WhatsApp (<code class="bg-slate-100 text-blue-600 px-1 py-0.5 rounded text-xs">{{ $siteInfo['phone'] }}</code>).</li>
                <li>Pembayaran penuh atau uang muka (DP) disepakati sebelum proses pengerjaan desain kustom dimulai.</li>
                <li>Mata uang yang digunakan dalam transaksi adalah Rupiah Indonesia (IDR).</li>
            </ul>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">3. Hak Cipta & Lisensi Aset Desain</h2>
            <p>
                Setelah pelunasan transaksi, hak guna komersial untuk desain kustom yang dipesan akan diserahkan sepenuhnya kepada klien. Namun, Paperless.id berhak menampilkan karya akhir pada halaman portofolio kami untuk keperluan pameran karya, kecuali jika terdapat perjanjian kerahasiaan khusus (NDA).
            </p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-extrabold text-slate-900 border-b border-slate-100 pb-2">4. Kebijakan Revisi & Pengembalian Dana</h2>
            <p>
                Kami memberikan garansi revisi sesuai dengan paket layanan yang dipilih. Pengembalian dana (refund) hanya berlaku jika pengerjaan mengalami keterlambatan yang signifikan dari estimasi waktu yang telah disepakati bersama.
            </p>
        </section>

    </div>

</x-layouts.app>
