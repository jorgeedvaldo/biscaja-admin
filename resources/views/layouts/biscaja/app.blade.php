<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'BiscaJá — Trabalho num clique')</title>
    <meta name="description" content="@yield('meta_description', 'Encontre profissionais qualificados para serviços de limpeza, reformas, instalações e muito mais.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50:  '#e6f7f4',
                            100: '#c2ebe4',
                            200: '#8ed8cc',
                            300: '#52c2b0',
                            400: '#22ad95',
                            500: '#0f9a82',
                            600: '#0a8470',
                            700: '#076a5b',
                            800: '#055447',
                            900: '#033c33',
                        },
                        ink: {
                            900: '#0e2030',
                            800: '#162a3d',
                            700: '#243a52',
                            600: '#465a70',
                            500: '#6b7a8a',
                            400: '#9aa6b2',
                            300: '#cbd3db',
                            200: '#e4e8ec',
                            100: '#f1f4f6',
                            50:  '#f7f9fa',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 6px 24px -8px rgba(14, 32, 48, 0.10)',
                        card: '0 12px 32px -12px rgba(14, 32, 48, 0.15)',
                    },
                    borderRadius: {
                        '4xl': '2rem',
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Inter', system-ui, sans-serif; color: #162a3d; background: #ffffff; }
        h1, h2, h3, h4, h5 { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        .hero-bg {
            background: linear-gradient(135deg, #e6f7f4 0%, #d1efe7 60%, #c2ebe4 100%);
        }
        .hero-bg::before {
            content: '';
            position: absolute; inset: 0;
            background-image:
                radial-gradient(circle at 78% 30%, rgba(34, 173, 149, 0.18) 0, transparent 38%),
                radial-gradient(circle at 65% 70%, rgba(15, 154, 130, 0.10) 0, transparent 40%);
            pointer-events: none;
        }
        .chip {
            display: inline-flex; align-items: center;
            padding: 6px 14px; border-radius: 999px;
            background: #fff; border: 1px solid #e4e8ec;
            font-size: 13px; color: #243a52; font-weight: 500;
            transition: all .15s ease;
        }
        .chip:hover { border-color: #22ad95; color: #0a8470; }

        .cat-card {
            background: #fff;
            border: 1px solid #eef1f4;
            border-radius: 16px;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }
        .cat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -16px rgba(14, 32, 48, 0.18);
            border-color: #c2ebe4;
        }

        .pro-card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #eef1f4;
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .pro-card:hover { transform: translateY(-3px); box-shadow: 0 20px 40px -20px rgba(14, 32, 48, 0.22); }

        .pill-badge {
            background: #e6f7f4; color: #0a8470;
            border: 1px solid #c2ebe4;
            font-size: 11px; font-weight: 600;
            padding: 3px 10px; border-radius: 999px;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp .6s ease both; }

        details > summary { list-style: none; cursor: pointer; }
        details > summary::-webkit-details-marker { display: none; }
        details[open] .faq-chev { transform: rotate(180deg); }
        .faq-chev { transition: transform .2s ease; }
    </style>
    @stack('head')
</head>

<body class="antialiased bg-white text-ink-900">

@include('layouts.biscaja.partials.header')

<main>
    @yield('content')
</main>

@include('layouts.biscaja.partials.footer')

@stack('scripts')
</body>
</html>
