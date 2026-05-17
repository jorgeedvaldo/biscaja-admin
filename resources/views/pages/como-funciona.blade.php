@extends('layouts.biscaja.app')

@section('title', 'Como funciona — BiscaJá')

@section('content')

<section class="px-6 lg:px-10 pt-6">
    <div class="max-w-[1440px] mx-auto hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-14 py-14">
        <div class="relative max-w-2xl">
            <span class="inline-block text-xs font-semibold uppercase tracking-[0.18em] bg-white px-3 py-1 rounded-full text-brand-600 mb-4">Passo a passo</span>
            <h1 class="font-display font-extrabold text-4xl md:text-5xl leading-[1.05] text-ink-900">
                Contratar um serviço é<br><span class="text-brand-500">simples assim.</span>
            </h1>
            <p class="mt-5 text-ink-600 text-lg max-w-xl">Em poucos minutos você encontra o profissional certo, com preço justo e segurança em cada etapa.</p>
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-16">
    <div class="max-w-[1440px] mx-auto grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
            $steps = [
                ['n' => '01', 'title' => 'Diga o que precisa', 'desc' => 'Descreva o serviço, escolha uma categoria e informe sua localização.'],
                ['n' => '02', 'title' => 'Receba orçamentos',  'desc' => 'Compare propostas de profissionais verificados da sua região.'],
                ['n' => '03', 'title' => 'Contrate sem stress',  'desc' => 'Negocie no chat, agende e pague de forma segura pelo app.'],
                ['n' => '04', 'title' => 'Avalie e indique',    'desc' => 'Compartilhe sua experiência e ajude outras pessoas a escolherem bem.'],
            ];
        @endphp
        @foreach($steps as $i => $s)
            <div class="relative cat-card p-7">
                <div class="text-5xl font-display font-extrabold text-brand-100">{{ $s['n'] }}</div>
                <h3 class="mt-2 font-semibold text-ink-900 text-lg">{{ $s['title'] }}</h3>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed">{{ $s['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="px-6 lg:px-10 mt-20">
    <div class="max-w-[1440px] mx-auto grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="font-display font-extrabold text-3xl md:text-4xl text-ink-900">Segurança e qualidade em cada serviço</h2>
            <p class="mt-4 text-ink-600 leading-relaxed">Trabalhamos com critérios rigorosos de seleção e oferecemos suporte humano em todas as etapas. Sua satisfação é nossa prioridade.</p>
            <ul class="mt-6 space-y-4">
                @foreach(['Profissionais com documentação verificada','Pagamento retido até a confirmação do serviço','Suporte 24h por chat, telefone e e-mail','Política de reembolso transparente'] as $b)
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 w-6 h-6 rounded-full bg-brand-500 text-white flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7"/></svg>
                        </span>
                        <span class="text-ink-800">{{ $b }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="relative">
            <div class="rounded-3xl overflow-hidden shadow-card">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1000&q=70" alt="Equipe" class="w-full h-[420px] object-cover">
            </div>
            <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-card p-5 w-60">
                <div class="text-sm text-ink-500">Avaliação média</div>
                <div class="flex items-baseline gap-2 mt-1">
                    <div class="font-display font-extrabold text-3xl text-ink-900">4.9</div>
                    <div class="flex gap-0.5 text-amber-400">
                        @for($i=0;$i<5;$i++)<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.1 6.3 7 .9-5 4.9 1.2 6.9L12 17.8 5.7 21l1.2-6.9-5-4.9 7-.9z"/></svg>@endfor
                    </div>
                </div>
                <div class="text-xs text-ink-500 mt-1">+12.300 avaliações</div>
            </div>
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-24">
    <div class="max-w-[1440px] mx-auto text-center">
        <h2 class="font-display font-extrabold text-3xl text-ink-900">Pronto para começar?</h2>
        <p class="mt-3 text-ink-600">Encontre o profissional ideal para o seu serviço em poucos cliques.</p>
        <a href="{{ route('home') }}" class="inline-flex mt-6 bg-brand-500 hover:bg-brand-600 text-white px-7 py-3.5 rounded-xl text-sm font-semibold transition">Buscar serviços</a>
    </div>
</section>

@endsection
