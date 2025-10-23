<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="/neural-glass/templatemo-neural-style.css" rel="stylesheet">
    <!--

    TemplateMo 597 Neural Glass

    https://templatemo.com/tm-597-neural-glass

    -->
    <style>

    </style>
</head>
<body>
<!-- Epic Neural Background -->
<div class="neural-background"></div>

<!-- Floating Geometric Shapes -->
<div class="geometric-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
</div>

<!-- Neural Network Lines -->
<div class="neural-lines">
    <div class="neural-line"></div>
    <div class="neural-line"></div>
    <div class="neural-line"></div>
</div>

<!-- Header -->
<header class="glass">
    <nav>
        <a href="/articles" class="logo">
            <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#e0a3ff"/>
                        <stop offset="50%" style="stop-color:#ff69b4"/>
                        <stop offset="100%" style="stop-color:#9370db"/>
                    </linearGradient>
                </defs>
                <circle cx="50" cy="30" r="8" fill="url(#logoGradient)" opacity="0.8">
                    <animate attributeName="opacity" values="0.8;1;0.8" dur="2s" repeatCount="indefinite"/>
                </circle>
                <circle cx="30" cy="60" r="6" fill="url(#logoGradient)" opacity="0.6">
                    <animate attributeName="opacity" values="0.6;1;0.6" dur="2.5s" repeatCount="indefinite"/>
                </circle>
                <circle cx="70" cy="65" r="7" fill="url(#logoGradient)" opacity="0.7">
                    <animate attributeName="opacity" values="0.7;1;0.7" dur="1.8s" repeatCount="indefinite"/>
                </circle>
                <line x1="50" y1="30" x2="30" y2="60" stroke="url(#logoGradient)" stroke-width="2" opacity="0.6">
                    <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" repeatCount="indefinite"/>
                </line>
                <line x1="50" y1="30" x2="70" y2="65" stroke="url(#logoGradient)" stroke-width="2" opacity="0.6">
                    <animate attributeName="opacity" values="0.6;1;0.6" dur="2.2s" repeatCount="indefinite"/>
                </line>
                <line x1="30" y1="60" x2="70" y2="65" stroke="url(#logoGradient)" stroke-width="2" opacity="0.6">
                    <animate attributeName="opacity" values="0.6;1;0.6" dur="2.8s" repeatCount="indefinite"/>
                </line>
            </svg>
            MySuperBlog
        </a>
        <ul class="nav-links">
            <li><a href="/articles/create">Créer</a></li>
        </ul>
        <div class="mobile-menu-toggle">
            <div class="hamburger-line"></div>
            <div class="hamburger-line"></div>
            <div class="hamburger-line"></div>
        </div>
    </nav>
    <div class="mobile-nav">
        <a href="#features">Neural</a>
        <a href="#showcase">Matrix</a>
        <a href="#timeline">Evolution</a>
        <a href="#contact">Connect</a>
        <a href="https://example.com" target="_blank" class="external-link">External</a>
    </div>
</header>

<!-- Section 1: Hero -->
<section class="hero" id="home">
    <div class="hero-content">
        <div class="hero-subtitle">Welcome to the Future</div>
        <h1>@yield('title')</h1>
    </div>
</section>

<!-- Section 2: Diagonal Features -->
<section class="features" id="features">
    <div class="features-container">
        @yield('main')
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-links">
            <a href="#features">Neural Networks</a>
            <a href="#showcase">Matrix Protocols</a>
            <a href="#timeline">Evolution</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Documentation</a>
            <!-- Add external links -->
            <a href="https://github.com/yourproject" target="_blank" rel="noopener">GitHub</a>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2025 NeuralGlass Interface. All quantum rights reserved across dimensions.</p>
        </div>
        <div class="footer-design">
            Design: <a href="https://templatemo.com" target="_blank" rel="nofollow noopener">TemplateMo</a> |
            Enhanced by Neural AI Systems |
            <a href="#">Quantum Framework</a>
        </div>
    </div>
</footer>
{{--<script src="/neural-glass/templatemo-neural-scripts.js"></script>--}}
</body>
</html>
