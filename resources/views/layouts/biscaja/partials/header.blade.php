@php
    $navItems = [
        ['label' => 'Como funciona',    'href' => '#como-funciona'],
        ['label' => 'Recursos',         'href' => '#recursos'],
        ['label' => 'Para prestadores', 'href' => '#prestadores'],
        ['label' => 'Ajuda',            'href' => '#ajuda'],
    ];
@endphp
<header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-ink-200/70">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-10">
        <div class="flex items-center gap-8 h-[78px]">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center shrink-0" aria-label="BiscaJá — início">
                <img src="{{ asset('public/assets/biscaja/biscaja_logo_appbar.png') }}"
                     srcset="{{ asset('public/assets/biscaja/biscaja_logo_appbar.png') }} 1x, {{ asset('public/assets/biscaja/biscaja_logo_appbar@2x.png') }} 2x"
                     alt="BiscaJá" class="h-9 w-auto">
            </a>

            {{-- Nav --}}
            <nav class="hidden lg:flex items-center gap-8 ml-2">
                @foreach($navItems as $item)
                    <a href="{{ $item['href'] }}" class="text-sm font-medium text-ink-700 hover:text-brand-600 transition">{{ $item['label'] }}</a>
                @endforeach
            </nav>

            {{-- CTAs --}}
            <div class="flex items-center gap-3 ml-auto">
                <a href="#download" class="hidden md:inline-flex items-center gap-2 text-sm font-semibold text-ink-800 hover:text-brand-600 transition">
                    Baixar o app
                </a>
                <a href="#download" class="inline-flex items-center gap-2 bg-brand-500 hover:bg-brand-600 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition shadow-soft">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v13m0 0l-4-4m4 4l4-4M4 21h16"/></svg>
                    Começar agora
                </a>
            </div>
        </div>
    </div>
</header>
