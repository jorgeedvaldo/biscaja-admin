@extends('layouts.biscaja.app')

@section('title', 'Seja um prestador — BiscaJá')

@section('content')

<section class="px-6 lg:px-10 pt-6">
    <div class="max-w-[1440px] mx-auto hero-bg relative overflow-hidden rounded-4xl px-8 lg:px-14 py-14">
        <div class="relative grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <span class="inline-block text-xs font-semibold uppercase tracking-[0.18em] bg-white px-3 py-1 rounded-full text-brand-600 mb-4">Para profissionais</span>
                <h1 class="font-display font-extrabold text-4xl md:text-5xl leading-[1.05] text-ink-900">
                    Aumente sua renda<br>com a <span class="text-brand-500">BiscaJá.</span>
                </h1>
                <p class="mt-5 text-ink-600 text-lg max-w-md">Receba pedidos de clientes da sua região, defina sua agenda e expanda sua clientela com segurança e visibilidade.</p>
                <form class="mt-7 bg-white rounded-2xl shadow-card p-2 flex flex-col sm:flex-row gap-2 max-w-md">
                    <input type="email" placeholder="Seu melhor e-mail" class="flex-1 px-4 py-3 text-sm focus:outline-none">
                    <button class="bg-brand-500 hover:bg-brand-600 text-white font-semibold text-sm px-5 py-3 rounded-xl">Quero me cadastrar</button>
                </form>
                <div class="mt-6 flex flex-wrap gap-6 text-sm text-ink-700">
                    <div><span class="font-display font-extrabold text-2xl text-ink-900">+2.500</span><div class="text-xs text-ink-500">Prestadores ativos</div></div>
                    <div><span class="font-display font-extrabold text-2xl text-ink-900">R$ 3.8mi</span><div class="text-xs text-ink-500">Pagos a profissionais</div></div>
                    <div><span class="font-display font-extrabold text-2xl text-ink-900">4.9★</span><div class="text-xs text-ink-500">Avaliação média</div></div>
                </div>
            </div>
            <div class="relative hidden lg:block">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1000&q=70" class="rounded-3xl shadow-card w-full h-[460px] object-cover" alt="Prestador">
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

<section class="px-6 lg:px-10 mt-16">
    <div class="max-w-[1440px] mx-auto">
        <h2 class="font-display font-extrabold text-3xl text-ink-900 text-center">Por que escolher a BiscaJá?</h2>
        <p class="mt-3 text-ink-600 text-center max-w-xl mx-auto">Tudo o que você precisa para crescer profissionalmente, em um único aplicativo.</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">
            @php
                $benefits = [
                    ['title' => 'Pedidos próximos de você', 'desc' => 'Receba oportunidades por região e categoria, sem perder tempo.'],
                    ['title' => 'Pagamento garantido',       'desc' => 'O valor fica retido e é liberado ao concluir o serviço.'],
                    ['title' => 'Agenda flexível',           'desc' => 'Trabalhe quando e onde quiser, do seu jeito.'],
                    ['title' => 'Construa sua reputação',    'desc' => 'Acumule avaliações positivas e ganhe destaque.'],
                    ['title' => 'Suporte dedicado',          'desc' => 'Time pronto pra te ajudar 7 dias por semana.'],
                    ['title' => 'Sem mensalidade',           'desc' => 'Você só paga uma taxa quando fechar um serviço.'],
                ];
            @endphp
            @foreach($benefits as $b)
                <div class="cat-card p-6">
                    <span class="inline-flex w-11 h-11 rounded-xl bg-brand-50 text-brand-600 items-center justify-center mb-4">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7"/></svg>
                    </span>
                    <h3 class="font-semibold text-ink-900">{{ $b['title'] }}</h3>
                    <p class="mt-2 text-sm text-ink-600 leading-relaxed">{{ $b['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="px-6 lg:px-10 mt-20">
    <div class="max-w-[1440px] mx-auto rounded-4xl bg-ink-900 text-white px-8 lg:px-14 py-14 grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="font-display font-extrabold text-3xl md:text-4xl">Comece em 3 etapas</h2>
            <p class="mt-3 text-ink-300 max-w-md">Cadastro rápido, verificação simples e o primeiro pedido já pode chegar no mesmo dia.</p>
        </div>
        <ol class="space-y-5">
            @foreach([
                ['Cadastre-se', 'Preencha seus dados, especialidade e área de atuação.'],
                ['Envie sua documentação', 'Verificamos seus documentos para garantir confiança.'],
                ['Receba seus pedidos', 'Comece a receber clientes e a faturar pelo BiscaJá.']
            ] as $i => $row)
                <li class="flex gap-4">
                    <span class="w-9 h-9 rounded-full bg-brand-500 text-white flex items-center justify-center font-semibold shrink-0">{{ $i+1 }}</span>
                    <div>
                        <div class="font-semibold">{{ $row[0] }}</div>
                        <div class="text-sm text-ink-300 mt-1">{{ $row[1] }}</div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

@endsection
