<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
          content="@yield('meta_description', 'Lahbib Touahria — Développeur Web Freelance spécialisé en Laravel, applications métier et systèmes de gestion.')">

    <title>
        @yield('title', 'Lahbib Touahria — Développeur Web Freelance')
    </title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --dark: #111827;
            --dark-soft: #1f2937;
            --text: #374151;
            --muted: #6b7280;
            --light: #f8fafc;
            --border: #e5e7eb;
            --accent: #10b981;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text);
            background: #ffffff;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(229, 231, 235, 0.8);
            transition: all .3s ease;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--dark);
            letter-spacing: -0.5px;
        }

        .navbar-brand span {
            color: var(--primary);
        }

        .navbar .nav-link {
            color: #4b5563;
            font-size: .92rem;
            font-weight: 500;
            margin: 0 .35rem;
            transition: color .2s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--primary);
        }

        .btn-contact {
            background: var(--dark);
            color: white !important;
            border-radius: 8px;
            padding: .55rem 1rem !important;
        }

        .btn-contact:hover {
            background: var(--primary);
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 92vh;
            display: flex;
            align-items: center;
            background:
                radial-gradient(
                    circle at 80% 20%,
                    rgba(37, 99, 235, .10),
                    transparent 30%
                ),
                linear-gradient(
                    180deg,
                    #ffffff 0%,
                    #f8fafc 100%
                );
            padding: 100px 0 70px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: #eff6ff;
            color: var(--primary);
            border: 1px solid #dbeafe;
            border-radius: 50px;
            padding: .45rem .8rem;
            font-size: .82rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
        }

        .hero-badge .status {
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.05;
            font-weight: 800;
            letter-spacing: -2px;
            color: var(--dark);
            margin-bottom: 1.5rem;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-text {
            font-size: 1.1rem;
            color: var(--muted);
            max-width: 680px;
            margin-bottom: 2rem;
        }

        .hero-buttons {
            display: flex;
            gap: .8rem;
            flex-wrap: wrap;
        }

        .btn-primary-custom {
            background: var(--primary);
            border: 1px solid var(--primary);
            color: white;
            padding: .75rem 1.3rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all .2s ease;
        }

        .btn-primary-custom:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-1px);
        }

        .btn-outline-custom {
            background: white;
            border: 1px solid var(--border);
            color: var(--dark);
            padding: .75rem 1.3rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all .2s ease;
        }

        .btn-outline-custom:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        /* =========================
           CODE CARD
        ========================= */

        .code-card {
            background: #111827;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(17, 24, 39, .18);
            max-width: 520px;
            margin: auto;
        }

        .code-header {
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 13px 16px;
            background: #1f2937;
        }

        .code-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #6b7280;
        }

        .code-title {
            margin-left: 8px;
            color: #9ca3af;
            font-size: .75rem;
        }

        .code-body {
            padding: 1.5rem;
            color: #d1d5db;
            font-family: 'Courier New', monospace;
            font-size: .88rem;
            line-height: 1.9;
        }

        .code-keyword {
            color: #c084fc;
        }

        .code-class {
            color: #60a5fa;
        }

        .code-method {
            color: #34d399;
        }

        .code-string {
            color: #fbbf24;
        }

        /* =========================
           SECTIONS
        ========================= */

        section {
            padding: 100px 0;
        }

        .section-light {
            background: var(--light);
        }

        .section-label {
            color: var(--primary);
            font-size: .8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: .6rem;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            color: var(--dark);
            letter-spacing: -1px;
            margin-bottom: 1rem;
        }

        .section-description {
            color: var(--muted);
            max-width: 700px;
        }

        /* =========================
           SERVICES
        ========================= */

        .service-card {
            height: 100%;
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 2rem;
            transition: all .25s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: #bfdbfe;
            box-shadow: 0 15px 35px rgba(15, 23, 42, .08);
        }

        .service-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eff6ff;
            color: var(--primary);
            border-radius: 10px;
            font-size: 1.3rem;
            margin-bottom: 1.3rem;
        }

        .service-card h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: .7rem;
        }

        .service-card p {
            color: var(--muted);
            margin-bottom: 0;
            font-size: .92rem;
        }

        /* =========================
           PROJECT
        ========================= */

        .project-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            transition: all .25s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(15, 23, 42, .09);
        }

        .project-image {
            min-height: 260px;
            background:
                linear-gradient(
                    135deg,
                    #1e3a8a,
                    #2563eb
                );
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 2rem;
        }

        .project-image-content {
            text-align: center;
        }

        .project-image-content i {
            font-size: 4rem;
            opacity: .9;
            margin-bottom: 1rem;
        }

        .project-image-content h3 {
            font-weight: 700;
            margin: 0;
        }

        .project-content {
            padding: 1.8rem;
        }

        .project-content h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
        }

        .project-content p {
            color: var(--muted);
            font-size: .92rem;
        }

        .tech-badge {
            display: inline-block;
            background: #f3f4f6;
            color: #374151;
            border-radius: 6px;
            padding: .3rem .55rem;
            margin: .2rem;
            font-size: .75rem;
            font-weight: 600;
        }

        /* =========================
           SKILLS
        ========================= */

        .skill-box {
            background: white;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.5rem;
            height: 100%;
        }

        .skill-box h3 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1rem;
        }

        .skill-item {
            display: flex;
            align-items: center;
            gap: .7rem;
            margin-bottom: .7rem;
            color: #4b5563;
            font-size: .9rem;
        }

        .skill-item i {
            color: var(--primary);
        }

        /* =========================
           ABOUT
        ========================= */

        .about-box {
            background: var(--dark);
            color: white;
            border-radius: 18px;
            padding: 3rem;
        }

        .about-box h2 {
            font-weight: 800;
        }

        .about-box p {
            color: #d1d5db;
        }

        .about-stat {
            border-left: 1px solid #374151;
            padding-left: 1.2rem;
        }

        .about-stat strong {
            display: block;
            font-size: 1.7rem;
            color: white;
        }

        .about-stat span {
            color: #9ca3af;
            font-size: .8rem;
        }

        /* =========================
           CONTACT
        ========================= */

        .contact-box {
            background: #eff6ff;
            border: 1px solid #dbeafe;
            border-radius: 18px;
            padding: 4rem 2rem;
            text-align: center;
        }

        .contact-box h2 {
            color: var(--dark);
            font-weight: 800;
        }

        .contact-box p {
            color: var(--muted);
            max-width: 600px;
            margin: 1rem auto 2rem;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: var(--dark);
            color: #9ca3af;
            padding: 50px 0 25px;
        }

        footer h5 {
            color: white;
            font-weight: 700;
        }

        footer a {
            color: #9ca3af;
        }

        footer a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            margin-top: 35px;
            padding-top: 20px;
            font-size: .82rem;
        }

        /* =========================
           RTL
        ========================= */

        [dir="rtl"] {
            text-align: right;
        }

        [dir="rtl"] .about-stat {
            border-left: 0;
            border-right: 1px solid #374151;
            padding-left: 0;
            padding-right: 1.2rem;
        }

        [dir="rtl"] .navbar .nav-link {
            margin-left: .35rem;
            margin-right: .35rem;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 991.98px) {

            .hero {
                min-height: auto;
                padding-top: 130px;
            }

            .hero-code {
                margin-top: 50px;
            }

            section {
                padding: 75px 0;
            }

            .navbar-collapse {
                padding: 1rem 0;
            }
        }

        @media (max-width: 575.98px) {

            .hero h1 {
                letter-spacing: -1px;
            }

            .about-box {
                padding: 2rem;
            }

            .contact-box {
                padding: 3rem 1.5rem;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                Lahbib<span>.</span>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#portfolioNavbar"
                aria-controls="portfolioNavbar"
                aria-expanded="false"
                aria-label="Menu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="portfolioNavbar"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            Accueil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            À propos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">
                            Projets
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills">
                            Compétences
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="nav-link btn-contact" href="#contact">
                            Me contacter
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- =========================
         MAIN CONTENT
    ========================= -->

    <main>

        @yield('content')

    </main>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <div class="container">

            <div class="row g-4">

                <div class="col-lg-5">

                    <h5 class="mb-3">
                        Lahbib Touahria
                    </h5>

                    <p class="mb-0">
                        Développeur Web Freelance spécialisé dans
                        la création d'applications web, de systèmes
                        de gestion et de solutions métier sur mesure.
                    </p>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <h5 class="mb-3">
                        Navigation
                    </h5>

                    <ul class="list-unstyled mb-0">

                        <li class="mb-2">
                            <a href="{{ url('/') }}">
                                Accueil
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="#about">
                                À propos
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="#services">
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="#projects">
                                Projets
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="col-sm-6 col-lg-4">

                    <h5 class="mb-3">
                        Technologies
                    </h5>

                    <p class="mb-0">
                        Laravel · PHP · MySQL · Bootstrap · JavaScript ·
                        Git · GitHub · Docker
                    </p>

                </div>

            </div>

            <div class="footer-bottom text-center">

                © {{ date('Y') }} Lahbib Touahria.
                Tous droits réservés.

            </div>

        </div>

    </footer>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')

</body>

</html>

