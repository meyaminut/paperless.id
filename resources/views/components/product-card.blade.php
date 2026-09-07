@props(['product' => []])

<div data-category="{{ $product['category'] ?? 'all' }}" class="product-card bg-white border border-slate-200/90 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
    <div>
        <!-- Product Preview Image Container -->
        <div class="{{ $product['bg_color'] ?? 'bg-slate-50' }} p-3 {{ $product['is_portrait'] ? 'h-80' : 'h-64 sm:h-72' }} relative flex items-center justify-center overflow-hidden border-b border-slate-100">
            <!-- Badges -->
            @if(!empty($product['badge']))
                <span class="absolute top-3 left-3 z-10 {{ $product['badge_color'] ?? 'bg-blue-600' }} text-white text-[11px] font-extrabold px-3 py-1 rounded-lg shadow-md">
                    {{ $product['badge'] }}
                </span>
            @endif

            @if(!empty($product['sub_badge']))
                <span class="absolute top-3 right-3 z-10 bg-blue-100/90 backdrop-blur-md text-blue-800 text-[11px] font-bold px-3 py-1 rounded-full border border-blue-200">
                    {{ $product['sub_badge'] }}
                </span>
            @endif

            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
        </div>

        <!-- Product Content Details -->
        <div class="p-6 space-y-2">
            <h3 class="font-extrabold text-lg text-slate-900 group-hover:text-blue-600 transition-colors">
                {{ $product['name'] }}
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                {{ $product['description'] }}
            </p>
        </div>
    </div>

    <!-- Price & Action Footer -->
    <div class="px-6 pb-6 pt-2 flex items-center justify-between border-t border-slate-100 mt-auto">
        <div>
            @if(!empty($product['original_price']))
                <span class="text-slate-400 line-through text-xs font-semibold block">
                    Rp {{ number_format($product['original_price'], 0, ',', '.') }}
                </span>
            @endif
            <span class="font-extrabold text-xl text-slate-900">
                Rp {{ number_format($product['price'], 0, ',', '.') }}
            </span>
        </div>
        <a href="https://wa.me/6287729949555?text={{ urlencode($product['wa_text'] ?? 'Halo Paperless.id') }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs shadow transition-all hover:scale-[1.02] flex items-center gap-1.5">
            <span>{{ $product['category'] === 'banner' ? 'Pesan via WA' : 'Beli via WA' }}</span>
            <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.479 1.33 4.996l-1.413 5.161 5.281-1.385c1.464.798 3.121 1.22 4.795 1.22h.004c5.517 0 9.993-4.476 9.993-9.993 0-2.673-1.041-5.186-2.928-7.073-1.887-1.887-4.4-2.928-7.069-2.928zm0 1.662c4.6 0 8.331 3.731 8.331 8.331 0 2.226-.867 4.319-2.439 5.892-1.573 1.573-3.666 2.44-5.892 2.44h-.003c-1.496 0-2.97-.393-4.268-1.137l-.306-.176-3.17.831.846-3.092-.193-.307c-.815-1.298-1.246-2.802-1.246-4.349 0-4.6 3.731-8.331 8.331-8.331z"/></svg>
        </a>
    </div>
</div>
