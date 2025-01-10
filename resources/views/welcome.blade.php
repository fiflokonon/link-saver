<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkSaver - Organisation de Liens Intelligente</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #4f46e5;
            --accent-color: #f472b6;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .brand-name {
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem;
            color: var(--primary-color);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 120px 0;
            border-radius: 0 0 50px 50px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1'/%3E%3C/svg%3E");
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .feature-icon {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            width: 80px;
            height: 80px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transform: rotate(-5deg);
            transition: transform 0.3s ease;
        }

        .feature-icon:hover {
            transform: rotate(0deg) scale(1.1);
        }

        .feature-card {
            padding: 2rem;
            border-radius: 20px;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .cta-section {
            background-color: #f8f9fa;
            padding: 80px 0;
            border-radius: 50px;
            margin: 40px 0;
        }

        .btn {
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px 0;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .lang-switch {
            cursor: pointer;
            padding: 8px 20px;
            border-radius: 20px;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }

        .lang-switch:hover {
            background: var(--primary-color);
            color: white;
        }

        .tech-stack img {
            height: 60px;
            margin: 15px;
            opacity: 0.7;
            transition: all 0.3s ease;
            border-radius: 10px;
        }

        .tech-stack img:hover {
            opacity: 1;
            transform: scale(1.1);
        }

        [lang="en"] .fr-content {
            display: none;
        }

        [lang="fr"] .en-content {
            display: none;
        }

        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .hero-image {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
                border-radius: 0 0 30px 30px;
            }

            .feature-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<!-- Le reste du HTML reste le même, avec quelques ajustements de classes -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand brand-name" href="#">LinkSaver</a>
        <!-- ... reste du navbar ... -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link fr-content" href="#features">Fonctionnalités</a>
                    <a class="nav-link en-content" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fr-content" href="#tech">Technologies</a>
                    <a class="nav-link en-content" href="#tech">Technologies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fr-content" href="/api/documentation">Documentation</a>
                    <a class="nav-link en-content" href="/api/documentations">Documentation</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="lang-switch me-3" onclick="toggleLanguage()">
                    <span class="fr-content">EN</span>
                    <span class="en-content">FR</span>
                </div>
                <a class="btn btn-primary fr-content" href="#contact">Commencer</a>
                <a class="btn btn-primary en-content" href="#contact">Get Started</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-content">
        <!-- ... contenu du hero ... -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="fr-content">
                    <h1 class="display-4 fw-bold mb-4">Organisez vos liens comme jamais auparavant</h1>
                    <p class="lead mb-4">Une API puissante pour sauvegarder, catégoriser et partager vos liens importants en toute sécurité.</p>
                    <div class="d-flex gap-3">
                        <a href="/api/documentation" class="btn btn-light btn-lg">Voir la Documentation</a>
                    </div>
                </div>
                <div class="en-content">
                    <h1 class="display-4 fw-bold mb-4">Organize your links like never before</h1>
                    <p class="lead mb-4">A powerful API to save, categorize and share your important links securely.</p>
                    <div class="d-flex gap-3">
                        <a href="/api/documentation" class="btn btn-light btn-lg">View Documentation</a>
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-6">--}}
{{--                <img src="/api/placeholder/600/400" alt="API Illustration" class="img-fluid rounded shadow">--}}
{{--            </div>--}}
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5" id="features">
    <div class="container">
        <h2 class="text-center mb-5 fr-content">Fonctionnalités Principales</h2>
        <h2 class="text-center mb-5 en-content">Key Features</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-save fa-lg"></i>
                    </div>
                    <div class="fr-content">
                        <h3>Sauvegarde Sécurisée</h3>
                        <p>Stockez vos liens en toute sécurité avec des informations personnalisées et une gestion avancée des permissions.</p>
                    </div>
                    <div class="en-content">
                        <h3>Secure Storage</h3>
                        <p>Store your links securely with custom information and advanced permission management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-tags fa-lg"></i>
                    </div>
                    <div class="fr-content">
                        <h3>Organisation Flexible</h3>
                        <p>Catégorisez et taguez vos liens pour une organisation optimale et une recherche efficace.</p>
                    </div>
                    <div class="en-content">
                        <h3>Flexible Organization</h3>
                        <p>Categorize and tag your links for optimal organization and efficient search.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="feature-icon mx-auto">
                        <i class="fas fa-share-alt fa-lg"></i>
                    </div>
                    <div class="fr-content">
                        <h3>Partage Facile</h3>
                        <p>Partagez vos collections de liens avec d'autres utilisateurs tout en gardant le contrôle sur vos données.</p>
                    </div>
                    <div class="en-content">
                        <h3>Easy Sharing</h3>
                        <p>Share your link collections with other users while maintaining control over your data.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="bg-light py-5" id="tech">
    <div class="container">
        <h2 class="text-center mb-5 fr-content">Technologies Utilisées</h2>
        <h2 class="text-center mb-5 en-content">Technologies Used</h2>
        <div class="row align-items-center justify-content-center text-center tech-stack">
            <div class="col-md-2">
                <img src="/img/laravel.png" alt="Laravel" class="img-fluid">
                <p>Laravel</p>
            </div>
            <div class="col-md-2">
                <img src="/img/postgres.png" alt="PostgreSQL" class="img-fluid">
                <p>PostgreSQL</p>
            </div>
            <div class="col-md-2">
                <img src="/img/jwt.jpeg" alt="JWT" class="img-fluid">
                <p>JWT</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="contact">
    <div class="container text-center">
        <div class="fr-content">
            <h2 class="mb-4">Prêt à commencer ?</h2>
            <p class="lead mb-4">Créez votre compte gratuitement et commencez à organiser vos liens dès aujourd'hui.</p>
            <a href="#" class="btn btn-primary btn-lg">Créer un compte</a>
        </div>
        <div class="en-content">
            <h2 class="mb-4">Ready to start?</h2>
            <p class="lead mb-4">Create your free account and start organizing your links today.</p>
            <a href="#" class="btn btn-primary btn-lg">Create Account</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>LinkSaver</h5>
                <p class="fr-content">Une solution moderne pour la gestion de vos liens.</p>
                <p class="en-content">A modern solution for managing your links.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="social-links">
                    <a href="https://github.com/fiflokonon" class="text-light me-3"><i class="fab fa-github"></i></a>
                    <a href="https://facebook.com/fifonsi.lokonon.1" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                    <a href="https://linkedin.com/in/arnaud-fifonsi-lokonon" class="text-light"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Les autres sections restent identiques structurellement,
     mais bénéficient des nouveaux styles CSS -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleLanguage() {
        const html = document.documentElement;
        const currentLang = html.getAttribute('lang');
        const newLang = currentLang === 'fr' ? 'en' : 'fr';
        html.setAttribute('lang', newLang);
    }
</script>
</body>
</html>

