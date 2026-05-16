@extends('layouts.biscaja.app')

@section('title', 'Fale conosco — BiscaJá')

@section('content')

<section class="px-6 lg:px-10 pt-6">
    <div class="max-w-[1440px] mx-auto hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-14 py-14">
        <div class="relative max-w-2xl">
            <span class="inline-block text-xs font-semibold uppercase tracking-[0.18em] bg-white px-3 py-1 rounded-full text-brand-600 mb-4">Contato</span>
            <h1 class="font-display font-extrabold text-4xl md:text-5xl leading-[1.05] text-ink-900">
                Vamos <span class="text-brand-500">conversar?</span>
            </h1>
            <p class="mt-5 text-ink-600 text-lg max-w-xl">Nosso time está pronto para ajudar com dúvidas, sugestões e parcerias.</p>
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-14">
    <div class="max-w-[1440px] mx-auto grid lg:grid-cols-3 gap-6">
        @php
            $channels = [
                ['title' => 'E-mail',    'value' => 'contato@biscaja.com.br', 'desc' => 'Resposta em até 24h.'],
                ['title' => 'Telefone',  'value' => '+55 83 0000-0000',        'desc' => 'Seg a Sex, 8h às 20h.'],
                ['title' => 'Endereço',  'value' => 'João Pessoa — PB',        'desc' => 'Av. Epitácio Pessoa, 1000.'],
            ];
        @endphp
        @foreach($channels as $c)
            <div class="cat-card p-7">
                <h4 class="text-xs font-semibold uppercase tracking-[0.14em] text-brand-600">{{ $c['title'] }}</h4>
                <div class="mt-2 font-display font-bold text-xl text-ink-900">{{ $c['value'] }}</div>
                <div class="mt-1 text-sm text-ink-500">{{ $c['desc'] }}</div>
            </div>
        @endforeach
    </div>
</section>

<section class="px-6 lg:px-10 mt-14">
    <div class="max-w-[1440px] mx-auto grid lg:grid-cols-2 gap-10 items-start">
        <form class="bg-white border border-ink-200 rounded-3xl p-8 shadow-soft">
            <h2 class="font-display font-extrabold text-2xl text-ink-900">Envie sua mensagem</h2>
            <p class="mt-2 text-sm text-ink-600">Preencha o formulário abaixo e retornaremos em breve.</p>

            <div class="mt-6 grid sm:grid-cols-2 gap-4">
                <label class="block">
                    <span class="text-xs font-semibold text-ink-700">Nome</span>
                    <input type="text" class="mt-1 w-full px-4 py-3 rounded-xl border border-ink-200 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none text-sm" placeholder="Seu nome">
                </label>
                <label class="block">
                    <span class="text-xs font-semibold text-ink-700">E-mail</span>
                    <input type="email" class="mt-1 w-full px-4 py-3 rounded-xl border border-ink-200 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none text-sm" placeholder="voce@email.com">
                </label>
            </div>
            <label class="block mt-4">
                <span class="text-xs font-semibold text-ink-700">Assunto</span>
                <input type="text" class="mt-1 w-full px-4 py-3 rounded-xl border border-ink-200 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none text-sm" placeholder="Como podemos ajudar?">
            </label>
            <label class="block mt-4">
                <span class="text-xs font-semibold text-ink-700">Mensagem</span>
                <textarea rows="5" class="mt-1 w-full px-4 py-3 rounded-xl border border-ink-200 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 focus:outline-none text-sm" placeholder="Conte mais sobre sua solicitação..."></textarea>
            </label>
            <button type="button" class="mt-6 bg-brand-500 hover:bg-brand-600 text-white font-semibold text-sm px-6 py-3.5 rounded-xl transition">Enviar mensagem</button>
        </form>

        <div class="space-y-4">
            <div class="rounded-3xl overflow-hidden shadow-card aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1000&q=70" class="w-full h-full object-cover" alt="Suporte">
            </div>
            <div class="cat-card p-6">
                <h3 class="font-semibold text-ink-900">Horário de atendimento</h3>
                <ul class="mt-3 space-y-2 text-sm text-ink-600">
                    <li class="flex justify-between"><span>Segunda a Sexta</span><span class="font-medium text-ink-900">08:00 — 20:00</span></li>
                    <li class="flex justify-between"><span>Sábados</span><span class="font-medium text-ink-900">09:00 — 16:00</span></li>
                    <li class="flex justify-between"><span>Domingos e feriados</span><span class="font-medium text-ink-900">Apenas chat</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
