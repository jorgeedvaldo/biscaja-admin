<footer class="mt-24 bg-ink-900 text-ink-200">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-10 py-16 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-10">
        <div class="col-span-2 lg:col-span-2 max-w-sm">
            <div class="mb-5 inline-flex bg-white rounded-2xl px-4 py-3 shadow-soft">
                <img src="{{ asset('public/assets/biscaja/biscaja_logo.png') }}"
                     srcset="{{ asset('public/assets/biscaja/biscaja_logo.png') }} 1x, {{ asset('public/assets/biscaja/biscaja_logo@2x.png') }} 2x"
                     alt="BiscaJá — Trabalho num clique" class="h-14 w-auto">
            </div>
            <p class="text-sm text-ink-300 leading-relaxed">
                A plataforma que conecta você aos melhores profissionais da sua região. Disponível para Android e iOS.
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
            <h4 class="text-white font-semibold mb-4 text-sm">Plataforma</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#como-funciona" class="hover:text-brand-300">Como funciona</a></li>
                <li><a href="#recursos" class="hover:text-brand-300">Recursos</a></li>
                <li><a href="#prestadores" class="hover:text-brand-300">Para prestadores</a></li>
                <li><a href="#download" class="hover:text-brand-300">Baixar o app</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-white font-semibold mb-4 text-sm">Suporte</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#ajuda" class="hover:text-brand-300">Central de ajuda</a></li>
                <li><a href="{{ route('page.contact-us') }}" class="hover:text-brand-300">Fale conosco</a></li>
                <li><a href="#" class="hover:text-brand-300">Segurança</a></li>
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
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10 py-5 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-ink-400">
            <p>© {{ date('Y') }} BiscaJá. Todos os direitos reservados.</p>
            <p>Feito com cuidado em João Pessoa, PB.</p>
        </div>
    </div>
</footer>
