@extends('layouts.biscaja.app')

@section('title', 'BiscaJá — Encontre o serviço ideal para você')

@php
    $popularSearches = ['Limpeza', 'Eletricista', 'Pintura', 'Jardinagem', 'Mudança'];

    $defaultCategories = [
        ['name' => 'Limpeza',     'icon' => 'spray'],
        ['name' => 'Reformas',    'icon' => 'wrench'],
        ['name' => 'Instalações', 'icon' => 'plug'],
        ['name' => 'Jardinagem',  'icon' => 'leaf'],
        ['name' => 'Mudanças',    'icon' => 'truck'],
        ['name' => 'Pintura',     'icon' => 'roller'],
        ['name' => 'Eletricista', 'icon' => 'bolt'],
        ['name' => 'Encanador',   'icon' => 'faucet'],
        ['name' => 'Outros',      'icon' => 'dots'],
    ];

    $recommended = [
        ['name' => 'Limpeza residencial', 'rating' => '4,8', 'reviews' => 320, 'price' => '120,00', 'image' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=800&q=60'],
        ['name' => 'Eletricista',         'rating' => '4,9', 'reviews' => 210, 'price' => '150,00', 'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=60'],
        ['name' => 'Pintura residencial', 'rating' => '4,7', 'reviews' => 180, 'price' => '200,00', 'image' => 'https://images.unsplash.com/photo-1562259949-e8e7689d7828?auto=format&fit=crop&w=800&q=60'],
        ['name' => 'Jardinagem',          'rating' => '4,8', 'reviews' => 142, 'price' => '100,00', 'image' => 'https://images.unsplash.com/photo-1599629954294-14df9ec8bc5b?auto=format&fit=crop&w=800&q=60'],
        ['name' => 'Mudanças',            'rating' => '4,9', 'reviews' =>  98, 'price' => '250,00', 'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=60'],
    ];
@endphp

@section('content')

{{-- ============ HERO ============ --}}
<section class="px-6 lg:px-10 pt-6">
    <div class="max-w-[1440px] mx-auto">
        <div class="hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-14 py-12 lg:py-16">
            <div class="relative grid lg:grid-cols-2 gap-10 items-center">
                <div class="fade-up">
                    <h1 class="font-display font-extrabold text-4xl md:text-5xl lg:text-[58px] leading-[1.05] tracking-tight text-ink-900">
                        Encontre o serviço<br>
                        ideal <span class="text-brand-500">para você.</span>
                    </h1>
                    <p class="mt-6 text-ink-600 text-lg max-w-md leading-relaxed">
                        Profissionais qualificados prontos para atender suas necessidades com praticidade e segurança.
                    </p>

                    {{-- Search bar --}}
                    <form action="{{ route('home') }}" class="mt-8 bg-white rounded-2xl shadow-card p-2 flex flex-col md:flex-row items-stretch gap-2">
                        <div class="flex items-center gap-3 flex-1 px-4">
                            <svg class="w-5 h-5 text-ink-400 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path stroke-linecap="round" d="M20 20l-3.5-3.5"/></svg>
                            <input name="q" type="text" placeholder="Ex: Limpeza residencial, Eletricista, Encanador..."
                                   class="w-full py-3 text-sm placeholder:text-ink-400 focus:outline-none">
                        </div>
                        <div class="hidden md:flex items-center px-4 border-l border-ink-200 gap-2">
                            <svg class="w-5 h-5 text-brand-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>
                            <select class="bg-transparent text-sm font-medium text-ink-800 focus:outline-none pr-1">
                                <option>João Pessoa, PB</option>
                                <option>Recife, PE</option>
                                <option>Natal, RN</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-brand-500 hover:bg-brand-600 text-white font-semibold text-sm rounded-xl px-6 py-3.5 transition shadow-soft">
                            Buscar serviços
                        </button>
                    </form>

                    {{-- Popular searches --}}
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="text-sm text-ink-600 mr-1">Buscas populares:</span>
                        @foreach($popularSearches as $term)
                            <a href="{{ route('home') }}?q={{ urlencode($term) }}" class="chip">{{ $term }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Hero illustration --}}
                <div class="relative h-[420px] lg:h-[460px] hidden lg:block">
                    <div class="absolute inset-0 flex items-end justify-center">
                        <div class="absolute right-10 bottom-0 w-[78%] h-[92%] rounded-full bg-brand-200/60 blur-2xl"></div>
                        <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?auto=format&fit=crop&w=900&q=80"
                             alt="Profissional BiscaJá"
                             class="relative z-10 h-full w-auto object-contain drop-shadow-2xl rounded-3xl">
                    </div>

                    {{-- Card: serviço concluído --}}
                    <div class="absolute top-4 right-2 bg-white rounded-2xl shadow-card p-5 w-[230px] z-20">
                        <p class="text-[13px] font-medium text-ink-700 leading-tight text-center">Serviço concluído<br>com sucesso!</p>
                        <div class="mx-auto my-3 w-14 h-14 rounded-full bg-brand-500 text-white flex items-center justify-center shadow-soft">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7"/></svg>
                        </div>
                        <div class="flex justify-center gap-0.5 text-amber-400">
                            @for($i=0;$i<5;$i++)<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.1 6.3 7 .9-5 4.9 1.2 6.9L12 17.8 5.7 21l1.2-6.9-5-4.9 7-.9z"/></svg>@endfor
                        </div>
                        <p class="text-[11px] text-center text-ink-500 mt-1">Avalie o profissional</p>
                        <button class="mt-3 w-full bg-brand-500 hover:bg-brand-600 text-white text-xs font-semibold py-2.5 rounded-xl transition">Avaliar agora</button>
                    </div>

                    {{-- Card: ativos --}}
                    <div class="absolute bottom-6 left-2 bg-white rounded-2xl shadow-card px-5 py-3.5 flex items-center gap-3 z-20">
                        <span class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20v-2a4 4 0 00-3-3.87M9 20v-2a4 4 0 013-3.87M9 7a3 3 0 116 0 3 3 0 01-6 0zM3 20v-1a4 4 0 013-3.87M21 20v-1a4 4 0 00-3-3.87"/></svg>
                        </span>
                        <div class="leading-tight">
                            <div class="font-display font-bold text-ink-900 text-lg">+2.500</div>
                            <div class="text-[11px] text-ink-500">Profissionais ativos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ CATEGORIAS ============ --}}
<section class="px-6 lg:px-10 mt-14">
    <div class="max-w-[1440px] mx-auto">
        <div class="flex items-end justify-between mb-6">
            <h2 class="font-display font-extrabold text-2xl md:text-3xl text-ink-900">Categorias</h2>
            <a href="#" class="text-sm font-semibold text-brand-600 hover:text-brand-700 inline-flex items-center gap-1">
                Ver todas as categorias
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 5l7 7-7 7"/></svg>
            </a>
        </div>

        @php
            $catList = (isset($categories) && count($categories) > 0)
                ? $categories->take(9)->map(fn($c) => ['name' => $c->name, 'icon' => 'dots'])->toArray()
                : $defaultCategories;
        @endphp

        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-9 gap-3">
            @foreach($catList as $cat)
                <a href="#" class="cat-card flex flex-col items-center justify-center py-6 px-2 text-center">
                    <span class="w-12 h-12 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center mb-3">
                        @include('layouts.biscaja.partials.cat-icon', ['icon' => $cat['icon'] ?? 'dots'])
                    </span>
                    <span class="text-xs font-medium text-ink-800">{{ $cat['name'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ RECOMENDADOS ============ --}}
<section class="px-6 lg:px-10 mt-14">
    <div class="max-w-[1440px] mx-auto">
        <div class="flex items-end justify-between mb-6">
            <h2 class="font-display font-extrabold text-2xl md:text-3xl text-ink-900">Recomendados para você</h2>
            <a href="#" class="text-sm font-semibold text-brand-600 hover:text-brand-700 inline-flex items-center gap-1">
                Ver todos
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="relative">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach($recommended as $item)
                    <article class="pro-card">
                        <div class="relative aspect-[5/4] overflow-hidden">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                            <button class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/95 flex items-center justify-center text-ink-500 hover:text-rose-500 shadow-soft">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.6a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.07a5.5 5.5 0 00-7.78 7.78l1.06 1.07L12 21.23l7.78-7.78 1.06-1.07a5.5 5.5 0 000-7.78z"/></svg>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-ink-900 text-[15px]">{{ $item['name'] }}</h3>
                            <div class="mt-2 flex items-center justify-between gap-2">
                                <div class="flex items-center gap-1 text-sm">
                                    <svg class="w-4 h-4 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.1 6.3 7 .9-5 4.9 1.2 6.9L12 17.8 5.7 21l1.2-6.9-5-4.9 7-.9z"/></svg>
                                    <span class="font-semibold text-ink-900">{{ $item['rating'] }}</span>
                                    <span class="text-ink-500 text-xs">({{ $item['reviews'] }})</span>
                                </div>
                                <div class="text-xs text-ink-600">
                                    A partir de <span class="font-semibold text-ink-900">R$ {{ $item['price'] }}</span>
                                </div>
                            </div>
                            <div class="mt-3 flex items-center justify-between">
                                <span class="inline-flex items-center gap-1 text-[11px] text-ink-500">
                                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s7-7.58 7-13a7 7 0 10-14 0c0 5.42 7 13 7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                    João Pessoa, PB
                                </span>
                                <span class="pill-badge">Verificado</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- arrow next --}}
            <button class="hidden lg:flex absolute -right-3 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white shadow-card items-center justify-center text-ink-700 hover:text-brand-600">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6l6 6-6 6"/></svg>
            </button>
        </div>
    </div>
</section>

{{-- ============ FEATURES STRIP ============ --}}
<section class="px-6 lg:px-10 mt-14">
    <div class="max-w-[1440px] mx-auto bg-white border-t border-ink-200 pt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $features = [
                    ['title' => 'Pagamento seguro',         'desc' => 'Transações protegidas e múltiplas formas de pagamento.', 'icon' => 'shield'],
                    ['title' => 'Profissionais verificados','desc' => 'Todos os prestadores passam por um rigoroso processo de avaliação.', 'icon' => 'badge'],
                    ['title' => 'Atendimento 24h',          'desc' => 'Suporte dedicado antes, durante e após o serviço.', 'icon' => 'headset'],
                    ['title' => 'Satisfação garantida',     'desc' => 'Compromisso com a qualidade e sua satisfação.', 'icon' => 'thumb'],
                ];
            @endphp
            @foreach($features as $f)
                <div class="flex items-start gap-4">
                    <span class="w-11 h-11 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0">
                        @include('layouts.biscaja.partials.feat-icon', ['icon' => $f['icon']])
                    </span>
                    <div>
                        <h4 class="font-semibold text-ink-900 text-[15px]">{{ $f['title'] }}</h4>
                        <p class="text-xs text-ink-500 mt-1 leading-relaxed max-w-[220px]">{{ $f['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ CTA APP ============ --}}
<section class="px-6 lg:px-10 mt-20">
    <div class="max-w-[1440px] mx-auto rounded-4xl bg-gradient-to-br from-brand-600 via-brand-500 to-brand-400 px-8 lg:px-14 py-12 lg:py-16 text-white relative overflow-hidden">
        <div class="absolute -right-10 -top-10 w-80 h-80 rounded-full bg-white/10 blur-3xl"></div>
        <div class="absolute -left-10 -bottom-10 w-72 h-72 rounded-full bg-white/10 blur-3xl"></div>
        <div class="relative grid lg:grid-cols-2 gap-8 items-center">
            <div>
                <span class="inline-block text-xs font-semibold uppercase tracking-[0.18em] bg-white/15 px-3 py-1 rounded-full mb-4">Baixe o app</span>
                <h3 class="font-display font-extrabold text-3xl md:text-4xl leading-tight">Tenha o BiscaJá<br>na palma da sua mão.</h3>
                <p class="mt-4 text-white/90 max-w-md text-sm">Contrate profissionais, acompanhe orçamentos e avalie serviços direto pelo aplicativo, onde e quando quiser.</p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="#" class="inline-flex items-center gap-2 bg-ink-900 hover:bg-black text-white px-5 py-3 rounded-xl text-sm font-semibold transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M16.5 12.5a4 4 0 012-3.4 4.1 4.1 0 00-3.2-1.7c-1.4-.1-2.7.8-3.4.8-.7 0-1.8-.8-3-.8a4.3 4.3 0 00-3.7 2.2c-1.6 2.7-.4 6.7 1.1 8.9.8 1.1 1.7 2.2 2.9 2.2 1.2 0 1.6-.7 3-.7s1.8.7 3 .7c1.2 0 2-1.1 2.8-2.2a9.5 9.5 0 001.3-2.6 4 4 0 01-2.8-3.4zM14 5.5a4 4 0 001-3 4 4 0 00-2.6 1.4 3.7 3.7 0 00-1 2.9A3.3 3.3 0 0014 5.5z"/></svg>
                        App Store
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 bg-ink-900 hover:bg-black text-white px-5 py-3 rounded-xl text-sm font-semibold transition">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M3.6 1.8a2 2 0 00-.6 1.5v17.4a2 2 0 00.6 1.5l11-11-11-9.4zM14.5 12.2l3.1-3.1L5 1.5l9.5 10.7zM18.7 9.8l3.5 2c.7.4.7 1.7 0 2.1l-3.5 2-3.4-3 3.4-3.1zM5 22.5l12.6-7.3-3.1-3.1L5 22.5z"/></svg>
                        Google Play
                    </a>
                </div>
            </div>
            <div class="relative hidden lg:flex justify-end">
                <div class="bg-white/10 backdrop-blur rounded-3xl border border-white/20 p-6 w-[320px]">
                    <div class="flex items-center justify-between text-xs">
                        <span class="font-semibold">Pedido #2847</span>
                        <span class="pill-badge bg-white/20 text-white border-white/30">Em andamento</span>
                    </div>
                    <div class="mt-4 flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-white/20"></div>
                        <div>
                            <div class="font-semibold text-sm">Carlos Silva</div>
                            <div class="text-xs text-white/80">Eletricista • ★ 4.9</div>
                        </div>
                    </div>
                    <div class="mt-5 space-y-3 text-xs">
                        <div class="flex justify-between"><span class="text-white/80">Serviço</span><span class="font-medium">Instalação elétrica</span></div>
                        <div class="flex justify-between"><span class="text-white/80">Endereço</span><span class="font-medium">Manaíra, JP</span></div>
                        <div class="flex justify-between"><span class="text-white/80">Total</span><span class="font-semibold">R$ 280,00</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
