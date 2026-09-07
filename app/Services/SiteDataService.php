<?php

namespace App\Services;

class SiteDataService
{
    /**
     * Get site contact & brand information.
     */
    public static function getSiteInfo(): array
    {
        return [
            'name' => 'Paperless.id',
            'phone' => '087729949555',
            'phone_raw' => '6287729949555',
            'email' => 'syarlamusabih@gmail.com',
            'instagram' => '@meyaminut',
            'instagram_url' => 'https://instagram.com/meyaminut',
            'tagline' => 'Solusi Digital Kreatif, Bebas Sampah Kertas.',
            'description' => 'Platform layanan & aset digital ramah lingkungan. Dirancang untuk masa depan bisnis tanpa sampah kertas.',
            'pricelist_image' => asset('images/pricelist.png'),
        ];
    }

    /**
     * Define categories based on Price List Poster.
     */
    public static function getCategories(): array
    {
        return [
            'all' => 'Semua Produk',
            'poster' => 'Desain Poster',
            'sosmed' => 'Social Media & Feeds',
            'banner' => 'Desain Banner & Cetak',
            'ebook' => 'E-Book Digital',
            'business' => 'Business Essentials Kit',
        ];
    }

    /**
     * Official Price List reference data (from Price List Poster).
     */
    public static function getPriceListCategories(): array
    {
        return [
            'Desain Poster' => [
                ['name' => 'Design Poster Promosi / Jualan', 'price' => 12000, 'unit' => 'per desain'],
            ],
            'Social Media & Feeds' => [
                ['name' => 'Template Feed Instagram (per set)', 'price' => 12000, 'unit' => 'per set'],
                ['name' => 'Template Story Instagram (per set)', 'price' => 12000, 'unit' => 'per set'],
                ['name' => 'Template Carousel IG Multi-Slide', 'price' => 15000, 'unit' => 'per paket'],
                ['name' => 'Highlight Cover IG', 'price' => 15000, 'unit' => 'per set'],
                ['name' => 'Bundling Template Feed + Story IG', 'price' => 20000, 'unit' => 'paket bundling', 'promo' => true],
            ],
            'Desain Banner & Cetak' => [
                ['name' => 'Desain Banner / Spanduk / Flyer / Menu Kafe', 'price' => 25000, 'unit' => 'per desain'],
                ['name' => 'Penyempurnaan Layout Dokumen Presentasi', 'price' => 25000, 'unit' => 'per dokumen'],
            ],
            'E-Book Digital' => [
                ['name' => 'E-Book Anak Interaktif (Cerita + Flashcards)', 'price' => 25000, 'unit' => 'per modul'],
                ['name' => 'E-Book Panduan Tata Kelola Media Sosial & UMKM', 'price' => 25000, 'unit' => 'per modul'],
            ],
            'Business Essentials Kit' => [
                ['name' => 'Business Essentials Kit (Invoice + Katalog + Kartu Nama QR)', 'price' => 35000, 'unit' => 'paket bisnis'],
            ],
        ];
    }

    /**
     * Get ONLY real, distinct products with unique image assets.
     */
    public static function getProducts(): array
    {
        return [
            [
                'id' => 'poster-kaldu-jamur',
                'name' => 'Desain Poster Promosi "Bestie nya Ibukk"',
                'category' => 'poster',
                'category_label' => 'Desain Poster',
                'price' => 12000,
                'original_price' => null,
                'badge' => 'POSTER 12K',
                'badge_color' => 'bg-blue-600',
                'sub_badge' => 'Desain Poster',
                'image' => asset('images/portfolio/portfolio-kaldu-jamur.png'),
                'bg_color' => 'bg-sky-50/60',
                'is_portrait' => true,
                'description' => 'Desain poster iklan produk kuliner dengan pendekatan story-telling keluarga "Bestie nya Ibukk", kemasan 3D & obrolan engaging.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Desain Poster Promosi Bestie nya Ibukk seharga Rp 12.000.',
            ],
            [
                'id' => 'poster-milk-tea',
                'name' => 'Desain Poster Commercial "Roasted Milk Tea"',
                'category' => 'poster',
                'category_label' => 'Desain Poster',
                'price' => 12000,
                'original_price' => null,
                'badge' => 'POSTER 12K',
                'badge_color' => 'bg-blue-600',
                'sub_badge' => 'Desain Poster',
                'image' => asset('images/portfolio/portfolio-milk-tea.png'),
                'bg_color' => 'bg-slate-50',
                'is_portrait' => true,
                'description' => 'Desain poster iklan produk minuman kemasan dengan visual 3D splashing milk, harga khusus promo, dan pencahayaan studio.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Desain Poster Commercial Roasted Milk Tea seharga Rp 12.000.',
            ],
            [
                'id' => 'poster-seragam-rpl',
                'name' => 'Desain Poster Katalog "Seragam Jurusan RPL"',
                'category' => 'poster',
                'category_label' => 'Desain Poster',
                'price' => 12000,
                'original_price' => null,
                'badge' => 'POSTER 12K',
                'badge_color' => 'bg-blue-600',
                'sub_badge' => 'Desain Poster',
                'image' => asset('images/portfolio/portfolio-rpl-uniform.png'),
                'bg_color' => 'bg-amber-50/60',
                'is_portrait' => true,
                'description' => 'Desain poster katalog promosi paket komplit seragam jurusan (Almamater, PDH, Lanyard & ID Card) dengan tata letak informatif.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Desain Poster Katalog Seragam RPL seharga Rp 12.000.',
            ],
            [
                'id' => 'banner-raker-smkn24',
                'name' => 'Desain Spanduk / Banner Rapat Kerja',
                'category' => 'banner',
                'category_label' => 'Desain Banner & Cetak',
                'price' => 25000,
                'original_price' => null,
                'badge' => 'BANNER 25K',
                'badge_color' => 'bg-indigo-600',
                'sub_badge' => 'Spanduk Formal',
                'image' => asset('images/portfolio/portfolio-banner-raker.png'),
                'bg_color' => 'bg-slate-900',
                'is_portrait' => false,
                'description' => 'Desain spanduk formal untuk kegiatan Rapat Kerja bertema "Menguatkan Kebersamaan Menginspirasi Perubahan" dengan warna megah.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Desain Banner Rapat Kerja seharga Rp 25.000.',
            ],
            [
                'id' => 'banner-puncak-tour',
                'name' => 'Desain Banner Event Tour & Rekreasi',
                'category' => 'banner',
                'category_label' => 'Desain Banner & Cetak',
                'price' => 25000,
                'original_price' => null,
                'badge' => 'BANNER 25K',
                'badge_color' => 'bg-indigo-600',
                'sub_badge' => 'Banner Acara',
                'image' => asset('images/portfolio/portfolio-banner-puncak.png'),
                'bg_color' => 'bg-yellow-50',
                'is_portrait' => false,
                'description' => 'Desain banner spanduk rekreasi & tour acara dengan ilustrasi gaya komikpop ceria, elemen vektor dinamis, dan warna segar.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Desain Banner Tour Puncak seharga Rp 25.000.',
            ],
        ];
    }

    /**
     * Get portfolio gallery items (with all required display fields).
     */
    public static function getPortfolio(): array
    {
        return [
            [
                'id' => 'poster-kaldu-jamur',
                'title' => 'Desain Poster Promosi "Bestie nya Ibukk"',
                'category' => 'posters',
                'category_label' => 'Poster Promosi Produk',
                'category_color' => 'bg-sky-100 text-sky-900 border-sky-200',
                'year' => 'Koepoe-Koepoe',
                'is_portrait' => true,
                'image' => asset('images/portfolio/portfolio-kaldu-jamur.png'),
                'bg_color' => 'bg-sky-50',
                'description' => 'Desain poster iklan produk kuliner dengan pendekatan story-telling keluarga yang engaging, memadukan mockup kemasan 3D & sajian kuliner.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan desain Poster Promosi Produk seperti Bestie nya Ibukk.',
            ],
            [
                'id' => 'poster-milk-tea',
                'title' => 'Commercial Poster "Roasted Milk Tea"',
                'category' => 'posters',
                'category_label' => 'Poster Produk F&B',
                'category_color' => 'bg-emerald-100 text-emerald-900 border-emerald-200',
                'year' => 'Roasted Milk Tea',
                'is_portrait' => true,
                'image' => asset('images/portfolio/portfolio-milk-tea.png'),
                'bg_color' => 'bg-slate-50',
                'description' => 'Poster iklan produk minuman kemasan dengan elemen visual 3D splashing milk, harga promo, dan pencahayaan studio.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan desain Poster Minuman/F&B.',
            ],
            [
                'id' => 'poster-seragam-rpl',
                'title' => 'Poster Katalog Seragam Jurusan RPL',
                'category' => 'custom',
                'category_label' => 'Katalog & Merchandising',
                'category_color' => 'bg-amber-100 text-amber-900 border-amber-200',
                'year' => 'Seragam RPL',
                'is_portrait' => true,
                'image' => asset('images/portfolio/portfolio-rpl-uniform.png'),
                'bg_color' => 'bg-amber-50',
                'description' => 'Desain brosur/poster promosi paket komplit seragam RPL (Almamater, PDH, Lanyard & ID Card) dengan layout informatif.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan desain Poster Katalog seperti Seragam RPL.',
            ],
            [
                'id' => 'banner-raker-smkn24',
                'title' => 'Banner Rapat Kerja SMKN 24 Jakarta',
                'category' => 'banners',
                'category_label' => 'Banner Event & Spanduk',
                'category_color' => 'bg-blue-100 text-blue-800 border-blue-200',
                'year' => '2026',
                'is_portrait' => false,
                'image' => asset('images/portfolio/portfolio-banner-raker.png'),
                'bg_color' => 'bg-slate-900',
                'description' => 'Desain spanduk formal untuk kegiatan Rapat Kerja bertema "Menguatkan Kebersamaan Menginspirasi Perubahan" dengan warna megah.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan desain Banner Spanduk seperti Banner Rapat Kerja.',
            ],
            [
                'id' => 'banner-puncak-tour',
                'title' => 'Header Banner "Goes to Puncak" Tour',
                'category' => 'banners',
                'category_label' => 'Banner Header & Acara',
                'category_color' => 'bg-yellow-100 text-yellow-900 border-yellow-200',
                'year' => 'Tour Event',
                'is_portrait' => false,
                'image' => asset('images/portfolio/portfolio-banner-puncak.png'),
                'bg_color' => 'bg-yellow-50',
                'description' => 'Banner visual kreatif untuk acara rekreasi & tour sekolah dengan ilustrasi gaya komikpop dan elemen vektor dinamis.',
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan desain Banner Acara/Tour.',
            ],
        ];
    }

    /**
     * Get services matching official price list.
     */
    public static function getServices(): array
    {
        return [
            [
                'id' => 'poster-design',
                'title' => 'Design Poster Promosi / Jualan',
                'starting_price' => 12000,
                'category' => 'Desain Poster',
                'description' => 'Desain poster komersial resolusi tinggi (seperti Poster Bestie Ibuk, Roasted Milk Tea, Seragam RPL).',
                'features' => [
                    'File High Resolution (PNG, JPG, PDF)',
                    'Layout Komersial & Eye-Catching',
                    'Siap Cetak / Publikasi Digital',
                ],
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Design Poster Promosi seharga Rp 12.000.',
            ],
            [
                'id' => 'template-feed-ig',
                'title' => 'Template Feed Instagram (per set)',
                'starting_price' => 12000,
                'category' => 'Social Media & Feeds',
                'description' => 'Set desain feed Instagram estetis & harmonis untuk meningkatkan citra brand Anda.',
                'features' => [
                    'Satu Set Feed Siap Pakai',
                    'Format Rasio 1:1 / 4:5 HD',
                    'Revisi Warna & Tipografi',
                ],
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Template Feed Instagram seharga Rp 12.000.',
            ],
            [
                'id' => 'bundling-20k',
                'title' => 'Bundling Template Feed + Story IG (Promo 20k)',
                'starting_price' => 20000,
                'category' => 'Promo Bundling',
                'description' => 'Paket hemat bundling 1 set Template Feed + 1 set Template Story Instagram sekaligus.',
                'features' => [
                    'Dapat Feed + Story Sekaligus',
                    'Hemat Rp 4.000 dari Harga Normal',
                    'Siap Upload ke Instagram',
                ],
                'wa_text' => 'Halo Paperless.id, saya tertarik dengan Promo Bundling Template Feed + Story (20k).',
            ],
            [
                'id' => 'banner-design',
                'title' => 'Desain Banner / Spanduk / Flyer / Menu Kafe',
                'starting_price' => 25000,
                'category' => 'Desain Banner & Cetak',
                'description' => 'Desain spanduk banner Rapat Kerja, banner tour acara, flyer promosi, atau daftar menu kafe.',
                'features' => [
                    'Ukuran Bebas Kustom',
                    'Tampilan Formal / Acara Ceria',
                    'File Siap Cetak Hi-Res',
                ],
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Desain Banner / Spanduk / Flyer / Menu Kafe seharga Rp 25.000.',
            ],
            [
                'id' => 'ebook-modul',
                'title' => 'E-Book Interaktif & Digital Kit',
                'starting_price' => 25000,
                'category' => 'E-Book Digital',
                'description' => 'Desain e-book edukasi anak interaktif (cerita + flashcards) atau panduan tata kelola media sosial & UMKM.',
                'features' => [
                    'Layout Buku Digital Modern',
                    'Bonus Flashcards / Infografis',
                    'Format PDF Interaktif HD',
                ],
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan E-Book Interaktif / Panduan seharga Rp 25.000.',
            ],
            [
                'id' => 'business-kit',
                'title' => 'Business Essentials Kit (Invoice + Katalog + Kartu Nama QR)',
                'starting_price' => 35000,
                'category' => 'Business Essentials Kit',
                'description' => 'Paket identitas bisnis digital terintegrasi mencakup Invoice, Katalog Produk, dan Kartu Nama dengan QR Code.',
                'features' => [
                    'Invoice Digital Interaktif',
                    'Katalog Produk Elegan',
                    'Kartu Nama QR Code Direct-Link',
                ],
                'wa_text' => 'Halo Paperless.id, saya tertarik memesan Business Essentials Kit seharga Rp 35.000.',
            ],
        ];
    }
}
