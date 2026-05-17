@extends('layouts.biscaja.app')

@section('title', 'Ajuda — BiscaJá')

@section('content')

<section class="px-6 lg:px-10 pt-6">
    <div class="max-w-[1440px] mx-auto hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-14 py-14 text-center">
        <div class="relative max-w-2xl mx-auto">
            <span class="inline-block text-xs font-semibold uppercase tracking-[0.18em] bg-white px-3 py-1 rounded-full text-brand-600 mb-4">Central de ajuda</span>
            <h1 class="font-display font-extrabold text-4xl md:text-5xl leading-[1.05] text-ink-900">Como podemos<br>te <span class="text-brand-500">ajudar?</span></h1>
            <form class="mt-8 bg-white rounded-2xl shadow-card p-2 flex items-center gap-2 max-w-lg mx-auto">
                <div class="flex items-center gap-3 flex-1 px-4">
                    <svg class="w-5 h-5 text-ink-400 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path stroke-linecap="round" d="M20 20l-3.5-3.5"/></svg>
                    <input type="text" placeholder="Pesquisar dúvidas..." class="w-full py-3 text-sm focus:outline-none">
                </div>
                <button class="bg-brand-500 hover:bg-brand-600 text-white font-semibold text-sm rounded-xl px-5 py-3">Buscar</button>
            </form>
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-14">
    <div class="max-w-[1440px] mx-auto">
        <h2 class="font-display font-extrabold text-2xl text-ink-900 mb-6">Tópicos populares</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
            @php
                $topics = [
                    ['icon' => 'shield',  'title' => 'Conta e segurança', 'desc' => 'Acesso, senha, verificação e proteção.'],
                    ['icon' => 'badge',   'title' => 'Pagamentos',         'desc' => 'Formas de pagamento, reembolso, recibos.'],
                    ['icon' => 'headset', 'title' => 'Pedidos e serviços', 'desc' => 'Como contratar, acompanhar e avaliar.'],
                    ['icon' => 'thumb',   'title' => 'Prestadores',        'desc' => 'Cadastro, comissões e repasse de valores.'],
                ];
            @endphp
            @foreach($topics as $t)
                <a href="#" class="cat-card p-6 block">
                    <span class="inline-flex w-11 h-11 rounded-xl bg-brand-50 text-brand-600 items-center justify-center mb-4">
                        @include('layouts.biscaja.partials.feat-icon', ['icon' => $t['icon']])
                    </span>
                    <h3 class="font-semibold text-ink-900">{{ $t['title'] }}</h3>
                    <p class="mt-1 text-sm text-ink-600">{{ $t['desc'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-16">
    <div class="max-w-[1440px] mx-auto grid lg:grid-cols-3 gap-10">
        <div>
            <h2 class="font-display font-extrabold text-2xl text-ink-900">Perguntas frequentes</h2>
            <p class="mt-3 text-ink-600 text-sm">As dúvidas mais comuns de quem usa a BiscaJá. Não encontrou? Fale com nosso time.</p>
            <a href="{{ route('page.contact-us') }}" class="inline-flex mt-5 bg-brand-500 hover:bg-brand-600 text-white text-sm font-semibold px-5 py-3 rounded-xl">Falar com suporte</a>
        </div>
        <div class="lg:col-span-2 space-y-3">
            @php
                $faqs = [
                    ['q' => 'Como contrato um serviço pelo BiscaJá?',         'a' => 'Pesquise pelo tipo de serviço, escolha o profissional que melhor se encaixa no seu perfil e envie a solicitação. Você pode negociar pelo chat antes de fechar.'],
                    ['q' => 'O pagamento é seguro?',                          'a' => 'Sim. O valor fica retido em nossa plataforma e só é repassado ao profissional após a confirmação da conclusão do serviço.'],
                    ['q' => 'E se eu não ficar satisfeito com o serviço?',    'a' => 'Você pode abrir uma reclamação em até 7 dias após a conclusão. Nosso time avalia o caso e, quando aplicável, garantimos o reembolso.'],
                    ['q' => 'Quais são as formas de pagamento aceitas?',      'a' => 'Aceitamos cartões de crédito, débito, Pix e boleto bancário. Todas as transações são processadas em ambiente seguro.'],
                    ['q' => 'Como me tornar um prestador na BiscaJá?',        'a' => 'Cadastre-se na página "Seja um prestador", envie sua documentação e aguarde a verificação. Após aprovação, você já pode receber pedidos.'],
                    ['q' => 'Tem cobrança de mensalidade?',                   'a' => 'Não. Profissionais não pagam mensalidade. Cobramos apenas uma taxa de serviço por pedido concluído.'],
                ];
            @endphp
            @foreach($faqs as $f)
                <details class="cat-card px-6 py-5 group">
                    <summary class="flex items-center justify-between gap-4">
                        <span class="font-semibold text-ink-900">{{ $f['q'] }}</span>
                        <span class="faq-chev w-8 h-8 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6"/></svg>
                        </span>
                    </summary>
                    <p class="mt-4 text-sm text-ink-600 leading-relaxed">{{ $f['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-20">
    <div class="max-w-[1440px] mx-auto rounded-4xl bg-gradient-to-br from-brand-600 to-brand-400 text-white px-8 lg:px-14 py-12 grid lg:grid-cols-3 gap-6 items-center">
        <div class="lg:col-span-2">
            <h3 class="font-display font-extrabold text-3xl">Ainda precisa de ajuda?</h3>
            <p class="mt-2 text-white/90 max-w-md">Nosso time de suporte está disponível 24h para te atender por chat, telefone ou e-mail.</p>
        </div>
        <div class="flex flex-col sm:flex-row lg:flex-col gap-3">
            <a href="{{ route('page.contact-us') }}" class="bg-white text-brand-700 font-semibold text-sm px-5 py-3 rounded-xl text-center hover:bg-ink-100 transition">Falar com suporte</a>
            <a href="tel:+558300000000" class="border border-white/60 text-white font-semibold text-sm px-5 py-3 rounded-xl text-center hover:bg-white/10 transition">+55 83 0000-0000</a>
        </div>
    </div>
</section>

@endsection
