<footer class="mt-24 bg-ink-900 text-ink-200">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 py-16 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-10">
        <div class="col-span-2 lg:col-span-2 max-w-sm">
            <div class="flex items-center gap-2 mb-5">
                <span class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-brand-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 11l8-7 8 7M5 9.5V20a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V9.5"/></svg>
                </span>
                <div class="leading-tight">
                    <div class="font-display font-extrabold text-[22px] text-white">Bisca<span class="text-brand-400">Já</span></div>
                    <div class="text-[10px] uppercase tracking-[0.18em] text-ink-400 -mt-0.5">Trabalho num clique</div>
                </div>
            </div>
            <p class="text-sm text-ink-300 leading-relaxed">
                Conectamos você aos melhores profissionais da sua região com praticidade, segurança e qualidade garantida.
            </p>
            <div class="flex items-center gap-3 mt-6">
                @foreach(['instagram','facebook','twitter','linkedin'] as $s)
                    <a href="#" aria-label="{{ $s }}" class="w-9 h-9 rounded-full bg-ink-800 hover:bg-brand-500 flex items-center justify-center text-ink-200 hover:text-white transition">
                        <span class="text-xs font-semibold">{{ strtoupper(substr($s,0,1)) }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-4 text-sm">Empresa</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('biscaja.como-funciona') }}" class="hover:text-brand-300">Como funciona</a></li>
                <li><a href="{{ route('biscaja.seja-prestador') }}" class="hover:text-brand-300">Seja um prestador</a></li>
                <li><a href="#" class="hover:text-brand-300">Sobre nós</a></li>
                <li><a href="#" class="hover:text-brand-300">Carreiras</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-4 text-sm">Suporte</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('biscaja.ajuda') }}" class="hover:text-brand-300">Central de ajuda</a></li>
                <li><a href="{{ route('page.contact-us') }}" class="hover:text-brand-300">Fale conosco</a></li>
                <li><a href="#" class="hover:text-brand-300">Segurança</a></li>
                <li><a href="#" class="hover:text-brand-300">Pagamentos</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-4 text-sm">Legal</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-brand-300">Termos de uso</a></li>
                <li><a href="#" class="hover:text-brand-300">Privacidade</a></li>
                <li><a href="#" class="hover:text-brand-300">Cookies</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-ink-800">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-10 py-5 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-ink-400">
            <p>© {{ date('Y') }} BiscaJá. Todos os direitos reservados.</p>
            <p>Feito com cuidado em João Pessoa, PB.</p>
        </div>
    </div>
</footer>
