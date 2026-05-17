@extends('layouts.biscaja.app')

@section('title', 'BiscaJá — Trabalho num clique')

@section('content')

{{-- ============ HERO ============ --}}
<section class="px-6 lg:px-10 pt-10 lg:pt-14">
    <div class="max-w-[1280px] mx-auto">
        <div class="hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-16 py-14 lg:py-20">
            <div class="relative grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-up">
                    <span class="inline-flex items-center gap-2 bg-white/80 backdrop-blur px-3.5 py-1.5 rounded-full text-xs font-semibold text-brand-700 ring-1 ring-brand-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-500 animate-pulse"></span>
                        Disponível para Android e iOS
                    </span>
                    <h1 class="mt-5 font-display font-extrabold text-4xl md:text-5xl lg:text-[60px] leading-[1.04] tracking-tight text-ink-900">
                        Trabalho num<br>
                        <span class="text-brand-500">clique.</span>
                    </h1>
                    <p class="mt-6 text-ink-600 text-lg max-w-[520px] leading-relaxed">
                        A BiscaJá é a plataforma que conecta você aos melhores profissionais da sua região.
                        Tudo na palma da sua mão, com segurança, agilidade e preço justo.
                    </p>

                    {{-- App store buttons --}}
                    <div class="mt-8 flex flex-wrap gap-3" id="download">
                        <a href="#" class="inline-flex items-center gap-3 bg-ink-900 hover:bg-black text-white px-5 py-3.5 rounded-2xl transition shadow-soft group">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M16.5 12.5a4 4 0 012-3.4 4.1 4.1 0 00-3.2-1.7c-1.4-.1-2.7.8-3.4.8-.7 0-1.8-.8-3-.8a4.3 4.3 0 00-3.7 2.2c-1.6 2.7-.4 6.7 1.1 8.9.8 1.1 1.7 2.2 2.9 2.2 1.2 0 1.6-.7 3-.7s1.8.7 3 .7c1.2 0 2-1.1 2.8-2.2a9.5 9.5 0 001.3-2.6 4 4 0 01-2.8-3.4zM14 5.5a4 4 0 001-3 4 4 0 00-2.6 1.4 3.7 3.7 0 00-1 2.9A3.3 3.3 0 0014 5.5z"/></svg>
                            <span class="text-left leading-tight">
                                <span class="block text-[10px] uppercase tracking-wider text-white/70">Baixar na</span>
                                <span class="block text-base font-semibold">App Store</span>
                            </span>
                        </a>
                        <a href="#" class="inline-flex items-center gap-3 bg-ink-900 hover:bg-black text-white px-5 py-3.5 rounded-2xl transition shadow-soft group">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M3.6 1.8a2 2 0 00-.6 1.5v17.4a2 2 0 00.6 1.5l11-11-11-9.4zM14.5 12.2l3.1-3.1L5 1.5l9.5 10.7zM18.7 9.8l3.5 2c.7.4.7 1.7 0 2.1l-3.5 2-3.4-3 3.4-3.1zM5 22.5l12.6-7.3-3.1-3.1L5 22.5z"/></svg>
                            <span class="text-left leading-tight">
                                <span class="block text-[10px] uppercase tracking-wider text-white/70">Disponível no</span>
                                <span class="block text-base font-semibold">Google Play</span>
                            </span>
                        </a>
                    </div>

                    {{-- Mini social proof --}}
                    <div class="mt-8 flex items-center gap-5">
                        <div class="flex -space-x-2">
                            @foreach(['from-brand-300 to-brand-500','from-amber-300 to-amber-500','from-sky-300 to-sky-500','from-rose-300 to-rose-500'] as $c)
                                <div class="w-9 h-9 rounded-full bg-gradient-to-br {{ $c }} ring-2 ring-white"></div>
                            @endforeach
                        </div>
                        <div class="leading-tight">
                            <div class="flex items-center gap-1">
                                @for($i=0;$i<5;$i++)<svg class="w-4 h-4 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.1 6.3 7 .9-5 4.9 1.2 6.9L12 17.8 5.7 21l1.2-6.9-5-4.9 7-.9z"/></svg>@endfor
                                <span class="ml-1 text-sm font-semibold text-ink-900">4.9</span>
                            </div>
                            <div class="text-xs text-ink-500 mt-0.5">+12.300 avaliações nas lojas</div>
                        </div>
                    </div>
                </div>

                {{-- Phone mockup --}}
                <div class="relative h-[520px] hidden lg:flex justify-center items-center">
                    <div class="absolute w-[420px] h-[420px] rounded-full bg-brand-200/60 blur-3xl"></div>

                    {{-- Floating card: serviço concluído --}}
                    <div class="absolute top-2 left-0 bg-white rounded-2xl shadow-card p-4 w-[210px] z-30">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7"/></svg>
                            </div>
                            <div class="leading-tight">
                                <div class="text-[12px] font-semibold text-ink-900">Serviço concluído</div>
                                <div class="text-[10px] text-ink-500">há 2 minutos</div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating card: profissionais --}}
                    <div class="absolute bottom-8 right-0 bg-white rounded-2xl shadow-card px-4 py-3 flex items-center gap-3 z-30">
                        <span class="w-10 h-10 rounded-full bg-brand-50 text-brand-600 flex items-center justify-center">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20v-2a4 4 0 00-3-3.87M9 20v-2a4 4 0 013-3.87M9 7a3 3 0 116 0 3 3 0 01-6 0z"/></svg>
                        </span>
                        <div class="leading-tight">
                            <div class="font-display font-bold text-ink-900 text-base">+2.500</div>
                            <div class="text-[10px] text-ink-500">Profissionais ativos</div>
                        </div>
                    </div>

                    {{-- Phone frame --}}
                    <div class="relative z-20 w-[260px] h-[520px] bg-ink-900 rounded-[44px] p-3 shadow-2xl">
                        <div class="w-full h-full rounded-[34px] overflow-hidden bg-white relative">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-28 h-6 bg-ink-900 rounded-b-2xl z-10"></div>
                            <div class="h-full bg-gradient-to-b from-brand-50 to-white p-4 pt-10 flex flex-col">
                                <div class="flex items-center justify-between">
                                    <div class="text-[10px]">
                                        <div class="text-ink-500">Olá,</div>
                                        <div class="font-semibold text-ink-900 text-sm">João da Silva</div>
                                    </div>
                                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-brand-400 to-brand-600"></div>
                                </div>
                                <div class="mt-4 bg-white rounded-2xl shadow-soft p-3 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-ink-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path stroke-linecap="round" d="M20 20l-3.5-3.5"/></svg>
                                    <span class="text-[11px] text-ink-400">O que você precisa hoje?</span>
                                </div>
                                <div class="mt-4 grid grid-cols-3 gap-2">
                                    @foreach([
                                        ['Limpeza','#22ad95'],
                                        ['Reformas','#f59e0b'],
                                        ['Pintura','#0ea5e9'],
                                        ['Mudanças','#a855f7'],
                                        ['Jardim','#10b981'],
                                        ['Elétrica','#ef4444'],
                                    ] as $c)
                                        <div class="bg-white rounded-xl p-2.5 text-center shadow-soft">
                                            <div class="w-7 h-7 mx-auto rounded-lg" style="background:{{ $c[1] }}1a;"></div>
                                            <div class="text-[9px] mt-1.5 text-ink-700 font-medium">{{ $c[0] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-4 bg-white rounded-2xl shadow-soft p-3">
                                    <div class="flex items-center gap-2">
                                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-brand-300 to-brand-500"></div>
                                        <div class="flex-1 leading-tight">
                                            <div class="text-[11px] font-semibold text-ink-900">Carlos Silva</div>
                                            <div class="text-[9px] text-ink-500">Eletricista • ★ 4.9</div>
                                        </div>
                                        <span class="text-[9px] font-bold text-brand-600">R$ 150</span>
                                    </div>
                                </div>
                                <div class="mt-auto bg-brand-500 text-white text-center text-[11px] font-semibold py-2.5 rounded-xl">Buscar serviços</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ BENEFICIOS ============ --}}
<section class="px-6 lg:px-10 mt-20" id="recursos">
    <div class="max-w-[1280px] mx-auto text-center">
        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-600">Por que BiscaJá</span>
        <h2 class="mt-3 font-display font-extrabold text-3xl md:text-4xl text-ink-900 max-w-2xl mx-auto">Tudo o que você precisa para resolver, num só app.</h2>
        <p class="mt-4 text-ink-600 max-w-xl mx-auto">Da contratação ao pagamento, cuidamos de cada detalhe para você ter a melhor experiência possível.</p>
    </div>
    <div class="max-w-[1280px] mx-auto mt-12 grid md:grid-cols-2 lg:grid-cols-4 gap-5">
        @php
            $benefits = [
                ['icon' => 'shield',  'title' => 'Pagamento seguro',          'desc' => 'O valor fica retido até a conclusão do serviço, com total proteção.'],
                ['icon' => 'badge',   'title' => 'Profissionais verificados', 'desc' => 'Todos os prestadores passam por um rigoroso processo de validação.'],
                ['icon' => 'headset', 'title' => 'Atendimento 24h',           'desc' => 'Suporte humano sempre que você precisar, antes, durante e depois.'],
                ['icon' => 'thumb',   'title' => 'Satisfação garantida',      'desc' => 'Compromisso com a qualidade e o seu sorriso no final.'],
            ];
        @endphp
        @foreach($benefits as $b)
            <div class="cat-card p-7 text-left">
                <span class="inline-flex w-12 h-12 rounded-xl bg-brand-50 text-brand-600 items-center justify-center mb-4">
                    @include('layouts.biscaja.partials.feat-icon', ['icon' => $b['icon']])
                </span>
                <h3 class="font-semibold text-ink-900 text-lg">{{ $b['title'] }}</h3>
                <p class="mt-2 text-sm text-ink-600 leading-relaxed">{{ $b['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ============ COMO FUNCIONA ============ --}}
<section class="px-6 lg:px-10 mt-24" id="como-funciona">
    <div class="max-w-[1280px] mx-auto grid lg:grid-cols-2 gap-14 items-center">
        <div class="order-2 lg:order-1 relative">
            <div class="relative rounded-3xl overflow-hidden shadow-card aspect-[4/5] max-w-md mx-auto">
                <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?auto=format&fit=crop&w=900&q=80" alt="Pessoa usando o app" class="w-full h-full object-cover">
            </div>
            <div class="absolute -top-4 -left-4 bg-white rounded-2xl shadow-card px-5 py-3 hidden md:flex items-center gap-3">
                <span class="w-10 h-10 rounded-full bg-brand-500 text-white flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7"/></svg>
                </span>
                <div class="leading-tight">
                    <div class="font-semibold text-ink-900 text-sm">Pedido aceito</div>
                    <div class="text-xs text-ink-500">Em até 5 minutos</div>
                </div>
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <span class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-600">Como funciona</span>
            <h2 class="mt-3 font-display font-extrabold text-3xl md:text-4xl text-ink-900">Do pedido à execução,<br>tudo em poucos toques.</h2>
            <ol class="mt-8 space-y-6">
                @php
                    $steps = [
                        ['title' => 'Diga o que precisa',  'desc' => 'Abra o app e descreva o serviço, escolha a categoria e informe sua localização.'],
                        ['title' => 'Receba orçamentos',   'desc' => 'Profissionais verificados da sua região enviam propostas em minutos.'],
                        ['title' => 'Contrate sem stress', 'desc' => 'Converse pelo chat, agende, pague de forma segura e avalie ao final.'],
                    ];
                @endphp
                @foreach($steps as $i => $s)
                    <li class="flex gap-5">
                        <div class="shrink-0 w-12 h-12 rounded-2xl bg-brand-50 text-brand-700 flex items-center justify-center font-display font-extrabold text-lg">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}</div>
                        <div>
                            <h3 class="font-semibold text-ink-900 text-lg">{{ $s['title'] }}</h3>
                            <p class="mt-1 text-sm text-ink-600 leading-relaxed">{{ $s['desc'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
            <a href="#download" class="inline-flex mt-8 bg-brand-500 hover:bg-brand-600 text-white px-6 py-3.5 rounded-xl text-sm font-semibold transition">Quero baixar o app</a>
        </div>
    </div>
</section>

{{-- ============ NÚMEROS ============ --}}
<section class="px-6 lg:px-10 mt-24">
    <div class="max-w-[1280px] mx-auto rounded-4xl bg-ink-900 text-white px-8 lg:px-14 py-14 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        @php
            $stats = [
                ['v' => '+2.500',  'l' => 'Profissionais ativos'],
                ['v' => '+18 mil', 'l' => 'Serviços concluídos'],
                ['v' => '4.9★',    'l' => 'Avaliação média'],
                ['v' => '98%',     'l' => 'Clientes satisfeitos'],
            ];
        @endphp
        @foreach($stats as $s)
            <div>
                <div class="font-display font-extrabold text-4xl md:text-5xl text-brand-300">{{ $s['v'] }}</div>
                <div class="mt-2 text-sm text-ink-300">{{ $s['l'] }}</div>
            </div>
        @endforeach
    </div>
</section>

{{-- ============ PARA PRESTADORES ============ --}}
<section class="px-6 lg:px-10 mt-24" id="prestadores">
    <div class="max-w-[1280px] mx-auto hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-14 py-14 lg:py-16">
        <div class="relative grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <span class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-600">Para profissionais</span>
                <h2 class="mt-3 font-display font-extrabold text-3xl md:text-4xl text-ink-900">Aumente sua renda<br>com a <span class="text-brand-500">BiscaJá.</span></h2>
                <p class="mt-4 text-ink-600 max-w-md">Receba pedidos de clientes da sua região, defina sua agenda e expanda sua clientela com segurança e visibilidade.</p>
                <ul class="mt-6 space-y-3">
                    @foreach(['Sem mensalidade — só paga ao concluir um serviço','Agenda 100% flexível, no seu ritmo','Pagamento garantido e repasse rápido','Construa sua reputação com avaliações reais'] as $b)
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 w-5 h-5 rounded-full bg-brand-500 text-white flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7"/></svg>
                            </span>
                            <span class="text-sm text-ink-800">{{ $b }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="#download" class="inline-flex items-center gap-2 bg-ink-900 hover:bg-black text-white px-5 py-3 rounded-xl text-sm font-semibold transition">Baixar app do prestador</a>
                </div>
            </div>
            <div class="relative hidden lg:block">
                <div class="rounded-3xl overflow-hidden shadow-card">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=900&q=70" alt="Prestador" class="w-full h-[420px] object-cover">
                </div>
                <div class="absolute -bottom-5 -left-5 bg-white rounded-2xl shadow-card px-5 py-4 flex items-center gap-3">
                    <span class="w-11 h-11 rounded-full bg-brand-500 text-white flex items-center justify-center">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 1v22M17 5H9a3 3 0 100 6h6a3 3 0 110 6H7"/></svg>
                    </span>
                    <div>
                        <div class="font-semibold text-ink-900 text-sm">R$ 2.480 esta semana</div>
                        <div class="text-xs text-ink-500">7 serviços concluídos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ DEPOIMENTOS ============ --}}
<section class="px-6 lg:px-10 mt-24">
    <div class="max-w-[1280px] mx-auto">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-600">Depoimentos</span>
            <h2 class="mt-3 font-display font-extrabold text-3xl md:text-4xl text-ink-900">Quem usa, recomenda.</h2>
            <p class="mt-4 text-ink-600">Histórias reais de clientes e profissionais que confiam na BiscaJá.</p>
        </div>
        <div class="mt-12 grid md:grid-cols-3 gap-6">
            @php
                $testimonials = [
                    ['name' => 'Mariana Costa',  'role' => 'Cliente, João Pessoa', 'text' => 'Resolveu meu problema em menos de 1 hora. Profissional super educado e o preço foi justo. Virei fã!'],
                    ['name' => 'Roberto Almeida', 'role' => 'Prestador, Eletricista', 'text' => 'Em 2 meses dobrei o número de clientes. O app é simples e os pagamentos sempre em dia.'],
                    ['name' => 'Juliana Pereira', 'role' => 'Cliente, Cabedelo',   'text' => 'A segurança de pagar só após o serviço fez toda a diferença. Recomendo de olhos fechados.'],
                ];
            @endphp
            @foreach($testimonials as $t)
                <div class="cat-card p-7">
                    <div class="flex items-center gap-1 text-amber-400">
                        @for($i=0;$i<5;$i++)<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.1 6.3 7 .9-5 4.9 1.2 6.9L12 17.8 5.7 21l1.2-6.9-5-4.9 7-.9z"/></svg>@endfor
                    </div>
                    <p class="mt-4 text-ink-700 leading-relaxed">"{{ $t['text'] }}"</p>
                    <div class="mt-6 flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-brand-300 to-brand-500"></div>
                        <div class="leading-tight">
                            <div class="font-semibold text-ink-900 text-sm">{{ $t['name'] }}</div>
                            <div class="text-xs text-ink-500">{{ $t['role'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ FAQ ============ --}}
<section class="px-6 lg:px-10 mt-24" id="ajuda">
    <div class="max-w-[1280px] mx-auto grid lg:grid-cols-3 gap-12">
        <div>
            <span class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-600">Ajuda</span>
            <h2 class="mt-3 font-display font-extrabold text-3xl md:text-4xl text-ink-900">Perguntas frequentes</h2>
            <p class="mt-4 text-ink-600 text-sm">Não encontrou o que procura? Fale com o nosso time de suporte.</p>
            <a href="{{ route('page.contact-us') }}" class="inline-flex mt-5 bg-brand-500 hover:bg-brand-600 text-white text-sm font-semibold px-5 py-3 rounded-xl">Falar com suporte</a>
        </div>
        <div class="lg:col-span-2 space-y-3">
            @php
                $faqs = [
                    ['q' => 'Como contrato um serviço pelo BiscaJá?',         'a' => 'Basta baixar o app, pesquisar o tipo de serviço, escolher o profissional e enviar a solicitação. Você pode negociar pelo chat antes de fechar.'],
                    ['q' => 'O pagamento é seguro?',                          'a' => 'Sim. O valor fica retido em nossa plataforma e só é repassado ao profissional após a confirmação da conclusão do serviço.'],
                    ['q' => 'Quais são as formas de pagamento aceitas?',      'a' => 'Cartões de crédito, débito, Pix e boleto bancário, em ambiente totalmente seguro.'],
                    ['q' => 'Em quais cidades a BiscaJá já está disponível?', 'a' => 'Começamos em João Pessoa e estamos expandindo gradualmente para outras cidades do Nordeste.'],
                    ['q' => 'Como me tornar um prestador?',                   'a' => 'Baixe o app de prestador, faça seu cadastro com a documentação solicitada e aguarde a verificação. Aprovado, você já recebe pedidos.'],
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

{{-- ============ CTA FINAL ============ --}}
<section class="px-6 lg:px-10 mt-24">
    <div class="max-w-[1280px] mx-auto rounded-4xl bg-gradient-to-br from-brand-600 via-brand-500 to-brand-400 px-8 lg:px-16 py-14 lg:py-20 text-white relative overflow-hidden">
        <div class="absolute -right-10 -top-10 w-80 h-80 rounded-full bg-white/10 blur-3xl"></div>
        <div class="absolute -left-10 -bottom-10 w-72 h-72 rounded-full bg-white/10 blur-3xl"></div>
        <div class="relative text-center max-w-2xl mx-auto">
            <h2 class="font-display font-extrabold text-3xl md:text-5xl leading-tight">Pronto para resolver<br>na palma da mão?</h2>
            <p class="mt-5 text-white/90 text-lg">Baixe o BiscaJá agora e tenha milhares de profissionais a um clique de distância.</p>
            <div class="mt-8 flex flex-wrap gap-3 justify-center">
                <a href="#" class="inline-flex items-center gap-3 bg-ink-900 hover:bg-black text-white px-6 py-4 rounded-2xl transition shadow-soft">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M16.5 12.5a4 4 0 012-3.4 4.1 4.1 0 00-3.2-1.7c-1.4-.1-2.7.8-3.4.8-.7 0-1.8-.8-3-.8a4.3 4.3 0 00-3.7 2.2c-1.6 2.7-.4 6.7 1.1 8.9.8 1.1 1.7 2.2 2.9 2.2 1.2 0 1.6-.7 3-.7s1.8.7 3 .7c1.2 0 2-1.1 2.8-2.2a9.5 9.5 0 001.3-2.6 4 4 0 01-2.8-3.4zM14 5.5a4 4 0 001-3 4 4 0 00-2.6 1.4 3.7 3.7 0 00-1 2.9A3.3 3.3 0 0014 5.5z"/></svg>
                    <span class="text-left leading-tight"><span class="block text-[10px] uppercase tracking-wider text-white/70">Baixar na</span><span class="block text-base font-semibold">App Store</span></span>
                </a>
                <a href="#" class="inline-flex items-center gap-3 bg-ink-900 hover:bg-black text-white px-6 py-4 rounded-2xl transition shadow-soft">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor"><path d="M3.6 1.8a2 2 0 00-.6 1.5v17.4a2 2 0 00.6 1.5l11-11-11-9.4zM14.5 12.2l3.1-3.1L5 1.5l9.5 10.7zM18.7 9.8l3.5 2c.7.4.7 1.7 0 2.1l-3.5 2-3.4-3 3.4-3.1zM5 22.5l12.6-7.3-3.1-3.1L5 22.5z"/></svg>
                    <span class="text-left leading-tight"><span class="block text-[10px] uppercase tracking-wider text-white/70">Disponível no</span><span class="block text-base font-semibold">Google Play</span></span>
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const id = a.getAttribute('href');
            if (id.length > 1) {
                const el = document.querySelector(id);
                if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
            }
        });
    });
</script>
@endpush

@endsection
