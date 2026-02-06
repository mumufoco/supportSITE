<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Solo Sondagens – Estrutura e experiência para atender os clientes mais exigentes</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2d5016;
            --secondary-color: #a4d65e;
            --light-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Navigation */
        nav {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 20px;
        }

        nav a {
            color: var(--primary-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--secondary-color) !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a3a0a 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-primary-custom {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary-custom:hover {
            background-color: #8bc34a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Services Section */
        .services-section {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--primary-color);
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .service-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .service-card i {
            font-size: 48px;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .service-card h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #666;
            font-size: 14px;
        }

        /* Instagram Section */
        .instagram-section {
            padding: 80px 0;
        }

        .instagram-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .instagram-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            aspect-ratio: 1;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .instagram-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .instagram-item:hover img {
            transform: scale(1.1);
        }

        .instagram-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(45, 80, 22, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: white;
        }

        .instagram-item:hover .instagram-overlay {
            opacity: 1;
        }

        .instagram-overlay a {
            color: white;
            text-decoration: none;
            font-size: 24px;
        }

        /* Footer */
        footer {
            background: var(--primary-color);
            color: white;
            padding: 40px 0 20px;
            margin-top: 80px;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        footer a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: white;
        }

        footer .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        footer .social-links a:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }

            .services-section,
            .instagram-section {
                padding: 50px 0;
            }

            .section-title h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-leaf"></i> Support Solo Sondagens
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Portfólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Support Solo Sondagens</h1>
            <p>Estrutura e experiência para atender os clientes mais exigentes</p>
            <a href="/contato" class="btn-primary-custom">Entre em Contato</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Serviços</h2>
                <p>Soluções completas em sondagens geotécnicas</p>
            </div>

            <div class="row">
                @forelse(\App\Models\Service::where('is_active', true)->limit(6)->get() as $service)
                    <div class="col-md-4 mb-4">
                        <div class="service-card">
                            @if($service->icon)
                                <i class="{{ $service->icon }}"></i>
                            @else
                                <i class="fas fa-cogs"></i>
                            @endif
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->short_description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Serviços serão adicionados em breve.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Instagram Section -->
    <section class="instagram-section">
        <div class="container">
            <div class="section-title">
                <h2>Estamos no Instagram</h2>
                <p>Acompanhe nossos projetos e novidades</p>
            </div>

            @if(\App\Models\InstagramPost::where('is_active', true)->count() > 0)
                <div class="instagram-grid">
                    @foreach(\App\Models\InstagramPost::where('is_active', true)->latest()->limit(12)->get() as $post)
                        <div class="instagram-item">
                            @if($post->media_url)
                                <img src="{{ $post->media_url }}" alt="Post">
                            @endif
                            <div class="instagram-overlay">
                                @if($post->permalink)
                                    <a href="{{ $post->permalink }}" target="_blank" title="Ver no Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-5">
                    <a href="https://instagram.com/support_solo_sondagens" target="_blank" class="btn-primary-custom">
                        <i class="fab fa-instagram"></i> Siga-nos no Instagram
                    </a>
                </div>
            @else
                <div class="text-center py-5">
                    <p class="text-muted">Posts do Instagram serão exibidos aqui em breve.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5>Support Solo Sondagens</h5>
                    <p>Estrutura e experiência para atender os clientes mais exigentes.</p>
                    <div class="social-links">
                        <a href="https://instagram.com/support_solo_sondagens" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="/portfolio">Portfólio</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <p>
                        <i class="fas fa-envelope"></i> contato@supportsondagens.com.br<br>
                        <i class="fas fa-phone"></i> (XX) XXXX-XXXX
                    </p>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p>&copy; 2026 Support Solo Sondagens. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
