@extends('layouts.portfolio')

@section('title', 'Lahbib Touahria — Développeur Web Freelance')

@section('meta_description', 'Lahbib Touahria — Développeur Web Freelance spécialisé en Laravel, applications métier, systèmes de gestion et solutions web sur mesure.')

@section('content')

    {{-- =========================
         HERO
    ========================== --}}

    <section class="hero" id="home">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <div class="hero-badge">
                        <span class="status"></span>
                        Disponible pour de nouveaux projets
                    </div>

                     <h1>
                        Développeur Web
                        <span>Freelance</span>
                    </h1>

                    <p class="hero-text">
                        Je conçois et développe des applications web modernes,
                        des systèmes de gestion et des solutions métier sur mesure,
                        avec une approche centrée sur la simplicité, la performance
                        et l'expérience utilisateur.
                    </p>

                    <div class="hero-buttons">

                        <a href="#projects" class="btn-primary-custom">
                            <i class="bi bi-folder2-open me-2"></i>
                            Voir mes projets
                        </a>

                        <a href="#"
                          class="btn-outline-custom"
                           data-bs-toggle="modal"
                              data-bs-target="#contactModal">
                          <i class="bi bi-chat-dots me-2"></i>
                            Me contacter
                        </a>

                    </div>

                    <div class="mt-4 text-muted small">

                        <i class="bi bi-code-slash me-1"></i>
                        Laravel

                        <span class="mx-2">·</span>

                        <i class="bi bi-database me-1"></i>
                        MySQL

                        <span class="mx-2">·</span>

                        <i class="bi bi-bootstrap me-1"></i>
                        Bootstrap

                        <span class="mx-2">·</span>

                        <i class="bi bi-box-seam me-1"></i>
                        Docker

                    </div>

                </div>


                <div class="col-lg-5 hero-code">

                    <div class="code-card">

                        <div class="code-header">

                            <span class="code-dot"></span>
                            <span class="code-dot"></span>
                            <span class="code-dot"></span>

                            <span class="code-title">
                                Developer.php
                            </span>

                        </div>

                        <div class="code-body">

                            <div>
                                <span class="code-keyword">class</span>
                                <span class="code-class">Developer</span>
                            </div>

                            <div>{</div>

                            <div class="ms-3">
                                <span class="code-keyword">public</span>
                                $name =
                                <span class="code-string">
                                    "LahbibCoding"
                                </span>;
                            </div>

                            <div class="ms-3">
                                <span class="code-keyword">public</span>
                                $role =
                                <span class="code-string">
                                    "Web Developer"
                                </span>;
                            </div>

                            <div class="ms-3">
                                <span class="code-keyword">public</span>
                                $stack = [
                            </div>

                            <div class="ms-5">
                                <span class="code-string">
                                    "Laravel"
                                </span>,
                            </div>

                            <div class="ms-5">
                                <span class="code-string">
                                    "PHP"
                                </span>,
                            </div>

                            <div class="ms-5">
                                <span class="code-string">
                                    "MySQL"
                                </span>,
                            </div>

                            <div class="ms-5">
                                <span class="code-string">
                                    "Bootstrap"
                                </span>,
                            </div>

                            <div class="ms-5">
                                <span class="code-string">
                                    "Docker"
                                </span>
                            </div>

                            <div class="ms-3">];</div>

                            <div class="ms-3">
                                <span class="code-keyword">public function</span>
                                <span class="code-method">
                                    create()
                                </span>
                            </div>

                            <div class="ms-3">{</div>

                            <div class="ms-5">
                                return
                                <span class="code-string">
                                    "Solutions web utiles";
                                </span>
                            </div>

                            <div class="ms-3">}</div>

                            <div>}</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         ABOUT
    ========================== --}}

    <section id="about">

        <div class="container">

            <div class="about-box">

                <div class="row align-items-center g-5">

                    <div class="col-lg-7">

                        <div class="section-label">
                            À propos
                        </div>

                        <h2 class="mb-4">
                            Transformer les besoins métier
                            en solutions web concrètes.
                        </h2>

                        <p>
                            Je suis Lahbib , développeur web freelance.
                            Je m'intéresse particulièrement aux applications
                            métier, aux systèmes de gestion et aux plateformes
                            web qui permettent de simplifier les processus
                            professionnels.
                        </p>

                        <p class="mb-0">
                            Mon approche repose sur Laravel, PHP, MySQL,
                            Bootstrap, JavaScript, Git et Docker, avec une
                            attention particulière portée à la structure,
                            la sécurité, la maintenabilité et l'expérience
                            utilisateur.
                        </p>

                    </div>

                    <div class="col-lg-5">

                        <div class="row g-4">

                            <div class="col-6">
                                <div class="about-stat">
                                    <strong>Laravel</strong>
                                    <span>Framework principal</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="about-stat">
                                    <strong>Web</strong>
                                    <span>Applications modernes</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="about-stat">
                                    <strong>ERP</strong>
                                    <span>Systèmes de gestion</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="about-stat">
                                    <strong>UI/UX</strong>
                                    <span>Interfaces responsives</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         SERVICES
    ========================== --}}

    <section
        id="services"
        class="section-light"
    >

        <div class="container">

            <div class="row mb-5">

                <div class="col-lg-8">

                    <div class="section-label">
                        Services
                    </div>

                    <h2 class="section-title">
                        Des solutions adaptées à vos besoins
                    </h2>

                    <p class="section-description">
                        Du développement d'un site web à la réalisation
                        d'un système de gestion complet, je transforme
                        vos besoins en solutions simples et évolutives.
                    </p>

                </div>

            </div>


            <div class="row g-4">

                {{-- Service 1 --}}

                <div class="col-md-6 col-lg-4">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-globe2"></i>
                        </div>

                        <h3>
                            Développement Web
                        </h3>

                        <p>
                            Création de sites et applications web
                            modernes, rapides, responsives et adaptés
                            à vos objectifs.
                        </p>

                    </div>

                </div>


                {{-- Service 2 --}}

                <div class="col-md-6 col-lg-4">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-window-stack"></i>
                        </div>

                        <h3>
                            Applications métier
                        </h3>

                        <p>
                            Développement de solutions permettant
                            d'organiser, automatiser et suivre
                            les activités d'une organisation.
                        </p>

                    </div>

                </div>


                {{-- Service 3 --}}

                <div class="col-md-6 col-lg-4">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-palette"></i>
                        </div>

                        <h3>
                            UI / UX & Design
                        </h3>

                        <p>
                            Conception d'interfaces claires, modernes
                            et responsives, pensées pour faciliter
                            l'utilisation.
                        </p>

                    </div>

                </div>


                {{-- Service 4 --}}

                <div class="col-md-6 col-lg-4">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-code-square"></i>
                        </div>

                        <h3>
                            Laravel sur mesure
                        </h3>

                        <p>
                            Développement d'applications Laravel
                            structurées, sécurisées et évolutives.
                        </p>

                    </div>

                </div>


                {{-- Service 5 --}}

                <div class="col-md-6 col-lg-4">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>

                        <h3>
                            Systèmes de gestion
                        </h3>

                        <p>
                            Conception de plateformes pour gérer
                            les utilisateurs, données, documents,
                            processus et activités.
                        </p>

                    </div>

                </div>


                {{-- Service 6 --}}

                <div class="col-md-6 col-lg-4">

                    <div class="service-card">

                        <div class="service-icon">
                            <i class="bi bi-tools"></i>
                        </div>

                        <h3>
                            Maintenance & évolution
                        </h3>

                        <p>
                            Correction, amélioration et évolution
                            d'applications web existantes.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


{{-- =========================
     PROJECTS
========================== --}}

<section id="projects" class="py-5">

    <div class="container">

        {{-- Section title --}}
        <div class="row mb-5">
            <div class="col-lg-8">
                <span class="text-uppercase small fw-semibold">
                    Mes réalisations
                </span>

                <h2 class="display-6 fw-bold mt-2">
                    Mes projets
                </h2>

                <p class="text-muted mt-3">
                    Découvrez quelques applications web et solutions métier
                    que j’ai conçues et développées pour répondre à des
                    besoins professionnels concrets.
                </p>
            </div>
        </div>



        {{-- =====================================================
             PROJECT 1 : SGA
        ====================================================== --}}

        <div class="project-item mb-5 pb-5 border-bottom">

            <div class="row align-items-center g-4">

                {{-- Main screenshot --}}
                <div class="col-lg-6 order-lg-2">

                    <div class="project-image rounded-4 overflow-hidden shadow-sm">

                        <a href="{{ asset('images/projects/sga/sga-dashboard.jpg') }}"
                           data-bs-toggle="modal"
                           data-bs-target="#sgaGallery">

                            <img
                                src="{{ asset('images/projects/sga/sga-dashboard.jpg') }}"
                                class="img-fluid w-100"
                                alt="SGA - Tableau de bord"
                            >

                        </a>

                    </div>

                </div>


                {{-- Project information --}}
                <div class="col-lg-6 order-lg-1">

                    <span class="badge text-bg-dark mb-3">
                        Application de gestion
                    </span>

                    <h3 class="fw-bold">
                        SGA
                    </h3>

                    <h5 class="text-muted mb-3">
                        Application de gestion
                    </h5>

                    <p class="text-muted">
                        Une application de gestion conçue pour centraliser
                        les opérations, faciliter le suivi des activités
                        et améliorer la gestion quotidienne.
                    </p>

                    <div class="mb-4">

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            Laravel
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            PHP
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            MySQL
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            Bootstrap
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            JavaScript
                        </span>

                    </div>

                    <button
                        type="button"
                        class="btn btn-dark"
                        data-bs-toggle="modal"
                        data-bs-target="#sgaGallery"
                    >
                        <i class="bi bi-images me-2"></i>
                        Voir les captures
                    </button>

                </div>

            </div>

        </div>


        {{-- =====================================================
             PROJECT 2 : GESTION DES VENTES
        ====================================================== --}}

        <div class="project-item mb-5">

            <div class="row align-items-center g-4">

                {{-- Main screenshot --}}
                <div class="col-lg-6">

                    <div class="project-image rounded-4 overflow-hidden shadow-sm">

                        <a href="{{ asset('images/projects/ventes/ventes-dashboard.jpg') }}"
                           data-bs-toggle="modal"
                           data-bs-target="#ventesGallery">

                            <img
                                src="{{ asset('images/projects/ventes/ventes-dashboard.jpg') }}"
                                class="img-fluid w-100"
                                alt="Gestion des ventes - Tableau de bord"
                            >

                        </a>

                    </div>

                </div>


                {{-- Project information --}}
                <div class="col-lg-6">

                    <span class="badge text-bg-dark mb-3">
                        Solution commerciale
                    </span>

                    <h3 class="fw-bold">
                        Gestion des ventes
                    </h3>

                    <h5 class="text-muted mb-3">
                        Application de gestion commerciale
                    </h5>

                    <p class="text-muted">
                        Une solution de gestion commerciale conçue pour
                        s’adapter aux différents types d’activités et
                        besoins liés à la vente et au commerce.
                    </p>

                    <div class="mb-4">

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            Laravel
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            PHP
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            MySQL
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            Bootstrap
                        </span>

                        <span class="badge bg-light text-dark border me-1 mb-1">
                            JavaScript
                        </span>

                    </div>

                    <button
                        type="button"
                        class="btn btn-dark"
                        data-bs-toggle="modal"
                        data-bs-target="#ventesGallery"
                    >
                        <i class="bi bi-images me-2"></i>
                        Voir les captures
                    </button>

                </div>

            </div>

        </div>

    </div>




    {{-- =========================================================
         MODAL : SGA GALLERY
    ========================================================== --}}

    <div
        class="modal fade"
        id="sgaGallery"
        tabindex="-1"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content border-0">

                <div class="modal-header">

                    <h5 class="modal-title fw-bold">
                        SGA — Captures de l'application
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Fermer"
                    ></button>

                </div>

                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <img
                                src="{{ asset('images/projects/sga/erp.sgd.jpg') }}"
                                class="img-fluid rounded-3"
                                alt="SGA - Tableau de bord"
                            >
                        </div>

                        <div class="col-md-6">
                            <img
                                src="{{ asset('images/projects/sga/sgd.home.jpg') }}"
                                class="img-fluid rounded-3"
                                alt="SGA - Utilisateurs"
                            >
                        </div>

                        
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
         MODAL : GESTION DES VENTES GALLERY
    ========================================================== --}}

    <div
        class="modal fade"
        id="ventesGallery"
        tabindex="-1"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content border-0">

                <div class="modal-header">

                    <h5 class="modal-title fw-bold">
                        Gestion des ventes — Captures
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Fermer"
                    ></button>

                </div>

                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <img
                                src="{{ asset('images/projects/ventes/vent.dashb.jpg') }}"
                                class="img-fluid rounded-3"
                                alt="Gestion des ventes - Tableau de bord"
                            >
                        </div>

                        <div class="col-md-6">
                            <img
                                src="{{ asset('images/projects/ventes/vente login.jpg') }}"
                                class="img-fluid rounded-3"
                                alt="Gestion des ventes - Produits"
                            >
                        </div>

                        <div class="col-md-6">
                            <img
                                src="{{ asset('images/projects/ventes/vente.creat.jpg') }}"
                                class="img-fluid rounded-3"
                                alt="Gestion des ventes - Ventes"
                            >
                        </div>

                       

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

    {{-- =========================
         SKILLS
    ========================== --}}

    <section
        id="skills"
        class="section-light"
    >

        <div class="container">

            <div class="row mb-5">

                <div class="col-lg-8">

                    <div class="section-label">
                        Compétences
                    </div>

                    <h2 class="section-title">
                        Technologies & outils
                    </h2>

                    <p class="section-description">
                        Une stack orientée développement web moderne,
                        applications métier et environnements professionnels.
                    </p>

                </div>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-3">

                    <div class="skill-box">

                        <h3>
                            Backend
                        </h3>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            PHP
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            Laravel
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            MySQL
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-lg-3">

                    <div class="skill-box">

                        <h3>
                            Frontend
                        </h3>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            HTML / CSS
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            Bootstrap
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            JavaScript
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-lg-3">

                    <div class="skill-box">

                        <h3>
                            Outils
                        </h3>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            Git
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            GitHub
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            Docker
                        </div>

                    </div>

                </div>


                <div class="col-md-6 col-lg-3">

                    <div class="skill-box">

                        <h3>
                            Conception
                        </h3>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            UI / UX
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            Responsive
                        </div>

                        <div class="skill-item">
                            <i class="bi bi-check2"></i>
                            Architecture web
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         CONTACT
    ========================== --}}

    <section id="contact">

        <div class="container">

            <div class="contact-box">

                <div class="section-label">
                    Contact
                </div>

                <h2>
                    Vous avez un projet ?
                </h2>

                <p>
                    Vous recherchez un développeur pour créer une
                    application web, moderniser un système existant
                    ou transformer une idée en solution concrète ?
                    Parlons-en.
                </p>
                <div class="mt-4 mb-4">
                   <a href="tel:+213699060385" class="text-decoration-none">
                      <i class="bi bi-telephone-fill me-2"></i>
                       +213 699 060 385
                    </a>
                 </div>

               <button
                     type="button"
                     class="btn-primary-custom border-0"
                        data-bs-toggle="modal"
                  data-bs-target="#contactModal"
                     >
                    <i class="bi bi-envelope me-2"></i>
                        Me contacter
               </button>

            </div>

        </div>

    </section>
<!-- =========================
     CONTACT MODAL
========================== -->

<div
    class="modal fade"
    id="contactModal"
    tabindex="-1"
    aria-labelledby="contactModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow">

            <div class="modal-header">

                <h5 class="modal-title fw-bold" id="contactModalLabel">
                    Me contacter
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Fermer"
                ></button>

            </div>

            <form action="{{ route('contact.send') }}" method="POST">

                @csrf

                <div class="modal-body">

                    <div class="mb-3">

                        <label
                            for="contactName"
                            class="form-label"
                        >
                            Nom
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="contactName"
                            name="name"
                            placeholder="Votre nom"
                            value="{{ old('name') }}"
                            required
                        >

                    </div>

                    <div class="mb-3">

                        <label
                            for="contactEmail"
                            class="form-label"
                        >
                            Adresse e-mail
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            id="contactEmail"
                            name="email"
                            placeholder="votre@email.com"
                            value="{{ old('email') }}"
                            required
                        >

                    </div>

                    <div class="mb-3">

                        <label
                            for="contactMessage"
                            class="form-label"
                        >
                            Message
                        </label>

                        <textarea
                            class="form-control"
                            id="contactMessage"
                            name="message"
                            rows="5"
                            placeholder="Écrivez votre message..."
                            required
                        >{{ old('message') }}</textarea>

                    </div>

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Fermer
                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <i class="bi bi-send me-1"></i>
                        Envoyer
                    </button>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection

