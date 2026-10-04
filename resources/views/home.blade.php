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

                    sodium_add

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

<section id="projects">

    <div class="container">

        <div class="row align-items-end mb-5">

            <div class="col-lg-8">

                <div class="section-label">
                    Mes projets
                </div>

                <h2 class="section-title">
                    Des applications métier conçues
                    pour répondre aux besoins réels
                </h2>

                <p class="section-description">
                    Je conçois des applications web modernes, modulaires
                    et évolutives, adaptées aux processus et aux besoins
                    spécifiques de chaque organisation et entreprise.
                </p>

            </div>

        </div>


        {{-- =========================
             PROJET 1 — SGA
        ========================== --}}

        <div class="row mb-5">

            <div class="col-12">

                <div class="project-card">

                    <div class="project-image">

                        <div class="project-image-content">

                            <i class="bi bi-building-gear"></i>

                            <h3>
                                SGA
                            </h3>

                            <p class="mb-0 opacity-75">
                                Système de Gestion Administrative
                            </p>

                        </div>

                    </div>


                    <div class="project-content">

                        <div class="d-flex justify-content-between
                                    align-items-start gap-3 flex-wrap">

                            <div>

                                <div class="section-label">
                                    Application métier
                                </div>

                                <h3>
                                    SGA — Système de Gestion Administrative
                                </h3>

                            </div>

                            <span class="badge bg-success-subtle text-success">
                                Projet en développement
                            </span>

                        </div>


                        <p class="mt-3">
                            SGA est une application web conçue pour
                            digitaliser, centraliser et simplifier
                            la gestion administrative d'une organisation.
                        </p>

                        <p>
                            La solution permet de structurer les processus,
                            centraliser les informations et faciliter
                            le suivi des activités grâce à une architecture
                            modulaire et évolutive.
                        </p>


                        <div class="mt-4">

                            <h6 class="fw-bold mb-3">
                                Fonctionnalités
                            </h6>

                            <span class="tech-badge">
                                Gestion administrative
                            </span>

                            <span class="tech-badge">
                                Ressources humaines
                            </span>

                            <span class="tech-badge">
                                Gestion documentaire
                            </span>

                            <span class="tech-badge">
                                Gestion financière
                            </span>

                            <span class="tech-badge">
                                Gestion des projets
                            </span>

                            <span class="tech-badge">
                                Suivi des activités
                            </span>

                            <span class="tech-badge">
                                Tableaux de bord
                            </span>

                            <span class="tech-badge">
                                Utilisateurs
                            </span>

                            <span class="tech-badge">
                                Rôles & permissions
                            </span>

                        </div>


                        <div class="mt-4">

                            <h6 class="fw-bold mb-3">
                                Technologies
                            </h6>

                            <span class="tech-badge">
                                Laravel
                            </span>

                            <span class="tech-badge">
                                PHP
                            </span>

                            <span class="tech-badge">
                                MySQL
                            </span>

                            <span class="tech-badge">
                                Bootstrap
                            </span>

                            <span class="tech-badge">
                                JavaScript
                            </span>

                            <span class="tech-badge">
                                Docker
                            </span>

                            <span class="tech-badge">
                                Git
                            </span>

                        </div>


                        <div class="mt-4 p-3 rounded bg-light">

                            <div class="d-flex gap-3">

                                <i class="bi bi-lightbulb text-primary fs-5"></i>

                                <div>

                                    <strong>
                                        Objectif
                                    </strong>

                                    <p class="mb-0 mt-1 small text-muted">
                                        Digitaliser les processus administratifs
                                        et fournir une plateforme centralisée,
                                        flexible et évolutive, adaptée aux
                                        besoins de chaque organisation.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================
             PROJET 2 — GESTION DE VENTE
        ========================== --}}

        <div class="row">

            <div class="col-12">

                <div class="project-card">

                    <div class="project-image">

                        <div class="project-image-content">

                            <i class="bi bi-cart-check-fill"></i>

                            <h3>
                                Gestion de vente
                            </h3>

                            <p class="mb-0 opacity-75">
                                Gestion commerciale et des ventes
                            </p>

                        </div>

                    </div>


                    <div class="project-content">

                        <div class="d-flex justify-content-between
                                    align-items-start gap-3 flex-wrap">

                            <div>

                                <div class="section-label">
                                    Application commerciale
                                </div>

                                <h3>
                                    Gestion de vente
                                </h3>

                            </div>

                            <span class="badge bg-success-subtle text-success">
                                Projet en développement
                            </span>

                        </div>


                        <p class="mt-3">
                            Une application web dédiée à la gestion des ventes
                            et des activités commerciales, conçue pour être
                            adaptée à différents types de commerces et
                            d'entreprises.
                        </p>

                        <p>
                            La solution peut évoluer selon les besoins de
                            l'activité : produits, clients, ventes, magasins,
                            stocks, achats, fournisseurs et suivi commercial.
                        </p>


                        <div class="mt-4">

                            <h6 class="fw-bold mb-3">
                                Fonctionnalités
                            </h6>

                            <span class="tech-badge">
                                Gestion des produits
                            </span>

                            <span class="tech-badge">
                                Gestion des clients
                            </span>

                            <span class="tech-badge">
                                Gestion des ventes
                            </span>

                            <span class="tech-badge">
                                Gestion des magasins
                            </span>

                            <span class="tech-badge">
                                Gestion des stocks
                            </span>

                            <span class="tech-badge">
                                Gestion des achats
                            </span>

                            <span class="tech-badge">
                                Fournisseurs
                            </span>

                            <span class="tech-badge">
                                Facturation
                            </span>

                            <span class="tech-badge">
                                Suivi commercial
                            </span>

                            <span class="tech-badge">
                                Tableaux de bord
                            </span>

                        </div>


                        <div class="mt-4">

                            <h6 class="fw-bold mb-3">
                                Technologies
                            </h6>

                            <span class="tech-badge">
                                Laravel
                            </span>

                            <span class="tech-badge">
                                PHP
                            </span>

                            <span class="tech-badge">
                                MySQL
                            </span>

                            <span class="tech-badge">
                                Bootstrap
                            </span>

                            <span class="tech-badge">
                                JavaScript
                            </span>

                            <span class="tech-badge">
                                Docker
                            </span>

                            <span class="tech-badge">
                                Git
                            </span>

                        </div>


                        <div class="mt-4 p-3 rounded bg-light">

                            <div class="d-flex gap-3">

                                <i class="bi bi-lightbulb text-primary fs-5"></i>

                                <div>

                                    <strong>
                                        Objectif
                                    </strong>

                                    <p class="mb-0 mt-1 small text-muted">
                                        Proposer une solution de gestion des
                                        ventes flexible et personnalisable,
                                        capable de s'adapter aux différents
                                        types de commerce et aux besoins
                                        spécifiques de chaque activité.
                                    </p>

                                </div>

                            </div>

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

