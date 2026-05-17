@php
    $navItems = [
        ['label' => 'Como funciona', 'route' => 'biscaja.como-funciona'],
        ['label' => 'Seja um prestador', 'route' => 'biscaja.seja-prestador'],
        ['label' => 'Ajuda', 'route' => 'biscaja.ajuda'],
    ];
@endphp
<header class="sticky top-0 z-40 bg-white/95 backdrop-blur border-b border-ink-200">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10">
        <div class="flex items-center gap-4 h-[78px]">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center shrink-0" aria-label="BiscaJá — início">
                <img src="{{ asset('public/assets/biscaja/biscaja_logo_appbar.png') }}"
                     srcset="{{ asset('public/assets/biscaja/biscaja_logo_appbar.png') }} 1x, {{ asset('public/assets/biscaja/biscaja_logo_appbar@2x.png') }} 2x"
                     alt="BiscaJá" class="h-9 w-auto">
            </a>

            {{-- Location pill --}}
            <button type="button" class="hidden md:inline-flex items-center gap-2 px-4 h-11 rounded-full border border-ink-200 hover:border-brand-300 text-sm text-ink-800 font-medium">
                <svg class="w-4 h-4 text-brand-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>
                João Pessoa, PB
                <svg class="w-3.5 h-3.5 text-ink-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"/></svg>
            </button>

            {{-- Search --}}
            <div class="flex-1 max-w-[460px] hidden lg:block">
                <form action="{{ route('home') }}" class="relative">
                    <input type="text" name="q" placeholder="O que você precisa hoje?"
                           class="w-full h-12 pl-5 pr-12 rounded-full border border-ink-200 bg-white text-sm placeholder:text-ink-400 focus:outline-none focus:border-brand-400 focus:ring-2 focus:ring-brand-100">
                    <button type="submit" class="absolute right-1.5 top-1.5 w-9 h-9 rounded-full bg-ink-100 hover:bg-brand-50 text-ink-700 hover:text-brand-600 flex items-center justify-center transition">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path stroke-linecap="round" d="M20 20l-3.5-3.5"/></svg>
                    </button>
                </form>
            </div>

            {{-- Nav --}}
            <nav class="hidden xl:flex items-center gap-7 ml-2">
                @foreach($navItems as $item)
                    <a href="{{ route($item['route']) }}" class="text-sm font-medium text-ink-700 hover:text-brand-600 transition">{{ $item['label'] }}</a>
                @endforeach
            </nav>

            {{-- Icons / user --}}
            <div class="flex items-center gap-3 ml-auto">
                <button type="button" aria-label="Carrinho" class="relative w-10 h-10 rounded-full hover:bg-ink-100 flex items-center justify-center text-ink-700">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4h2l2.4 12.3a2 2 0 002 1.7h8.2a2 2 0 002-1.6L21 8H6"/><circle cx="10" cy="20" r="1.5"/><circle cx="17" cy="20" r="1.5"/></svg>
                    <span class="absolute -top-0.5 -right-0.5 w-5 h-5 rounded-full bg-brand-500 text-white text-[10px] font-bold flex items-center justify-center">2</span>
                </button>
                <button type="button" aria-label="Notificações" class="relative w-10 h-10 rounded-full hover:bg-ink-100 flex items-center justify-center text-ink-700">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-2A8 8 0 0119 9a7 7 0 10-14 0 8 8 0 01-.6 6L3 17h5"/><path stroke-linecap="round" d="M9 17a3 3 0 006 0"/></svg>
                    <span class="absolute -top-0.5 -right-0.5 w-5 h-5 rounded-full bg-brand-500 text-white text-[10px] font-bold flex items-center justify-center">3</span>
                </button>
                <div class="flex items-center gap-2 pl-2">
                    <div class="w-10 h-10 rounded-full bg-ink-200 overflow-hidden ring-2 ring-white shadow-soft">
                        <div class="w-full h-full bg-gradient-to-br from-brand-300 to-brand-500 flex items-center justify-center text-white font-semibold text-sm">JS</div>
                    </div>
                    <div class="hidden md:flex flex-col leading-tight">
                        <span class="text-sm font-semibold text-ink-900">João da Silva</span>
                        <a href="#" class="text-[11px] text-ink-500 hover:text-brand-600">Ver perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
