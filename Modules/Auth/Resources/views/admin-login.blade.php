<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>{{ translate('admin_login') }} — BiscaJá</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="nofollow, noindex">
    @php($favIcon = getBusinessSettingsImageFullPath(key: 'business_favicon', settingType: 'business_information', path: 'business/', defaultPath: 'public/assets/admin-module/img/placeholder.png'))
    <link rel="shortcut icon" href="{{ $favIcon }}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="{{ asset('public/assets/admin-module') }}/css/material-icons.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('public/assets/admin-module') }}/css/toastr.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { 50:'#e6f7f4',100:'#c2ebe4',200:'#8ed8cc',300:'#52c2b0',400:'#22ad95',500:'#0f9a82',600:'#0a8470',700:'#076a5b',800:'#055447',900:'#033c33' },
                        ink:   { 900:'#0e2030',800:'#162a3d',700:'#243a52',600:'#465a70',500:'#6b7a8a',400:'#9aa6b2',300:'#cbd3db',200:'#e4e8ec',100:'#f1f4f6',50:'#f7f9fa' }
                    },
                    fontFamily: {
                        sans: ['Inter','system-ui','sans-serif'],
                        display: ['"Plus Jakarta Sans"','Inter','sans-serif']
                    },
                    boxShadow: {
                        soft: '0 6px 24px -8px rgba(14, 32, 48, 0.10)',
                        card: '0 20px 60px -20px rgba(14, 32, 48, 0.25)'
                    },
                    borderRadius: { '4xl': '2rem' }
                }
            }
        }
    </script>
    <style>
        body { font-family:'Inter',system-ui,sans-serif; color:#162a3d; background:#f7f9fa; }
        h1,h2,h3 { font-family:'Plus Jakarta Sans','Inter',sans-serif; }
        .brand-bg {
            background:
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.18) 0, transparent 40%),
                radial-gradient(circle at 20% 90%, rgba(255,255,255,0.12) 0, transparent 45%),
                linear-gradient(135deg, #076a5b 0%, #0f9a82 55%, #22ad95 100%);
        }
        .field { position: relative; }
        .field input {
            width: 100%;
            height: 52px;
            padding: 0 44px 0 44px;
            border: 1px solid #e4e8ec;
            border-radius: 14px;
            background: #fff;
            font-size: 14px;
            color: #162a3d;
            transition: border-color .15s ease, box-shadow .15s ease;
        }
        .field input:focus {
            outline: none;
            border-color: #22ad95;
            box-shadow: 0 0 0 4px #e6f7f4;
        }
        .field input::placeholder { color: #9aa6b2; }
        .field > .left-icon, .field > .right-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7a8a;
            font-size: 20px;
            user-select: none;
        }
        .field > .left-icon  { left: 14px; }
        .field > .right-icon { right: 14px; cursor: pointer; }
        .check { width: 18px; height: 18px; accent-color: #0f9a82; }
        .btn-primary {
            display: inline-flex; align-items: center; justify-content: center;
            gap: 8px;
            width: 100%; height: 52px;
            background: #0f9a82; color: #fff;
            border: 0; border-radius: 14px;
            font-weight: 600; font-size: 15px;
            transition: background .15s ease, transform .05s ease;
        }
        .btn-primary:hover { background: #0a8470; }
        .btn-primary:active { transform: translateY(1px); }
        @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        .floaty { animation: float 5s ease-in-out infinite; }
    </style>
</head>
<body class="antialiased">

<?php
$logo = getBusinessSettingsImageFullPath(key: 'business_logo', settingType: 'business_information', path: 'business/', defaultPath: 'public/assets/biscaja/biscaja_logo.png');
?>

<div class="min-h-screen flex">

    {{-- ============ BRAND PANEL ============ --}}
    <aside class="brand-bg hidden lg:flex flex-col justify-between w-1/2 xl:w-[55%] p-12 text-white relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-white/10 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-16 w-[28rem] h-[28rem] rounded-full bg-white/5 blur-3xl"></div>

        <div class="relative">
            <a href="{{ url('/') }}" class="inline-flex bg-white rounded-2xl px-4 py-3 shadow-soft">
                <img src="{{ asset('public/assets/biscaja/biscaja_logo.png') }}"
                     srcset="{{ asset('public/assets/biscaja/biscaja_logo.png') }} 1x, {{ asset('public/assets/biscaja/biscaja_logo@2x.png') }} 2x"
                     alt="BiscaJá" class="h-12 w-auto">
            </a>
        </div>

        <div class="relative max-w-md">
            <h1 class="font-display font-extrabold text-4xl xl:text-5xl leading-[1.1]">
                Bem-vindo de volta ao<br>painel da BiscaJá.
            </h1>
            <p class="mt-5 text-white/85 text-base leading-relaxed">
                Gerencie profissionais, pedidos e tudo o que faz a plataforma girar — num só lugar.
            </p>

            <div class="mt-10 grid grid-cols-3 gap-4">
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="font-display font-extrabold text-2xl">+2.5k</div>
                    <div class="text-xs text-white/80 mt-1">Profissionais</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="font-display font-extrabold text-2xl">+18k</div>
                    <div class="text-xs text-white/80 mt-1">Serviços</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-2xl p-4 border border-white/15">
                    <div class="font-display font-extrabold text-2xl">4.9★</div>
                    <div class="text-xs text-white/80 mt-1">Avaliação</div>
                </div>
            </div>
        </div>

        <div class="relative flex items-center justify-between text-xs text-white/70">
            <span>© {{ date('Y') }} BiscaJá. Todos os direitos reservados.</span>
            <span class="hidden xl:inline">Trabalho num clique.</span>
        </div>
    </aside>

    {{-- ============ FORM PANEL ============ --}}
    <main class="flex-1 flex items-center justify-center p-6 sm:p-10">
        <div class="w-full max-w-md">

            {{-- Mobile logo --}}
            <div class="lg:hidden flex justify-center mb-8">
                <img src="{{ asset('public/assets/biscaja/biscaja_logo.png') }}"
                     srcset="{{ asset('public/assets/biscaja/biscaja_logo.png') }} 1x, {{ asset('public/assets/biscaja/biscaja_logo@2x.png') }} 2x"
                     alt="BiscaJá" class="h-12 w-auto">
            </div>

            <div class="flex items-start justify-between gap-3 mb-8">
                <div>
                    <h2 class="font-display font-extrabold text-3xl text-ink-900">{{ translate('admin_Sign_In') }}</h2>
                    <p class="mt-2 text-sm text-ink-600">{{ translate('sign_in_to_stay_connected') }}</p>
                </div>
                <span class="inline-flex items-center bg-brand-50 text-brand-700 text-[11px] font-semibold px-2.5 py-1 rounded-full ring-1 ring-brand-200">
                    v{{ env('SOFTWARE_VERSION') }}
                </span>
            </div>

            <form action="{{ route('admin.auth.login') }}" enctype="multipart/form-data" method="POST" id="login-form" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-semibold text-ink-700 mb-1.5">{{ translate('email') }}</label>
                    <div class="field">
                        <span class="material-icons left-icon">mail</span>
                        <input type="email" name="email_or_phone" id="email"
                               value="{{ request()->cookie('remember_email') }}"
                               placeholder="{{ translate('example@gmail.com') }}" required>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-xs font-semibold text-ink-700 mb-1.5">{{ translate('password') }}</label>
                    <div class="field">
                        <span class="material-icons left-icon">lock</span>
                        <input type="password" name="password" id="password"
                               value="{{ request()->cookie('remember_password') }}"
                               placeholder="{{ translate('********') }}" required>
                        <span class="material-icons right-icon togglePassword" data-target="password">visibility_off</span>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" class="check" name="remember" value="1"
                               {{ request()->cookie('remember_checked') ? 'checked' : '' }} id="rememberMeCheckbox">
                        <span class="text-sm text-ink-700">{{ translate('Remember me?') }}</span>
                    </label>
                </div>

                @php($recaptcha = business_config('recaptcha', 'third_party'))
                @if(isset($recaptcha) && $recaptcha->is_active)
                    <div class="recaptcha flex justify-center">
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                    </div>
                @endif

                <button class="btn-primary" id="signInBtn" type="submit">
                    {{ translate('sign_in') }}
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 5l7 7-7 7"/></svg>
                </button>

                <p class="text-center text-sm text-ink-600 pt-2">
                    {{ translate('want_to_sign_in_to_your_provider_account') }}?
                    <a href="{{ route('provider.auth.login') }}" class="text-brand-600 font-semibold hover:text-brand-700">{{ translate('sign_in_here') }}</a>
                </p>
            </form>

            @if(env('APP_ENV')=='demo')
                <div class="mt-6 bg-ink-900 text-white rounded-2xl p-4 flex items-center gap-3">
                    <button type="button" class="login-copy w-10 h-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center transition" title="Copiar credenciais">
                        <span class="material-symbols-outlined text-[20px]">content_copy</span>
                    </button>
                    <div class="text-xs leading-snug">
                        <div><span class="text-white/60">{{ translate('email') }}:</span> {{ translate('admin@admin.com') }}</div>
                        <div><span class="text-white/60">{{ translate('password') }}:</span> {{ translate('12345678') }}</div>
                    </div>
                </div>
            @endif
        </div>
    </main>
</div>

<script src="{{ asset('public/assets/admin-module') }}/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('public/assets/admin-module') }}/js/toastr.js"></script>
{!! Toastr::message() !!}

<script>
    "use strict";

    // Password visibility toggle
    document.querySelectorAll('.togglePassword').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var target = document.getElementById(btn.dataset.target || 'password');
            if (!target) return;
            if (target.type === 'password') { target.type = 'text'; btn.textContent = 'visibility'; }
            else { target.type = 'password'; btn.textContent = 'visibility_off'; }
        });
    });

    @if(env('APP_ENV')=='demo')
        $('.login-copy').on('click', function () { copy_cred(); });
        function copy_cred() {
            $('#email').val('admin@admin.com');
            $('#password').val('12345678');
            toastr.success('{{ translate('Copied successfully') }}', 'Success', { CloseButton: true, ProgressBar: true });
        }
    @endif

    @if ($errors->any())
        @foreach($errors->all() as $error)
            toastr.error('{{ $error }}', 'Error', { CloseButton: true, ProgressBar: true });
        @endforeach
    @endif
</script>

@php($recaptcha = business_config('recaptcha', 'third_party'))
@if(isset($recaptcha) && $recaptcha->is_active)
    <script src="https://www.google.com/recaptcha/api.js?render={{ $recaptcha->live_values['site_key'] }}"></script>
    <script>
        "use strict";
        $('#signInBtn').click(function (e) {
            e.preventDefault();
            if (typeof grecaptcha === 'undefined') {
                toastr.error('Invalid recaptcha key provided. Please check the recaptcha configuration.');
                return;
            }
            grecaptcha.ready(function () {
                grecaptcha.execute('{{ $recaptcha->live_values['site_key'] }}', { action: 'submit' }).then(function (token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.querySelector('form').submit();
                });
            });
            window.onerror = function (message) {
                var errorMessage = 'An unexpected error occurred.';
                if (message.includes('Invalid site key')) {
                    errorMessage = 'Invalid site key provided. Please check the site key configuration.';
                } else if (message.includes('not loaded in api.js')) {
                    errorMessage = 'reCAPTCHA API could not be loaded. Please check the API configuration.';
                }
                toastr.error(errorMessage);
                return true;
            };
        });
    </script>
@endif

</body>
</html>
