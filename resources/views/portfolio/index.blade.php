<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Support Solo Sondagens</title>
    
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

        /* Page Header -->
        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a3a0a 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .page-header h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .page-header p {
            font-size: 18px;
            opacity: 0.9;
        }

        /* Content Section -->
        .content-section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary-color);
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        /* Portfolio Grid -->
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .portfolio-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .portfolio-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .portfolio-content {
            padding: 25px;
        }

        .portfolio-content h3 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .portfolio-client {
            color: var(--secondary-color);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .portfolio-description {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .portfolio-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .portfolio-link:hover {
            color: var(--secondary-color);
        }

        /* Pagination */
        .pagination {
            justify-content: center;
            margin-top: 40px;
        }

        .pagination .page-link {
            color: var(--primary-color);
            border-color: #ddd;
        }

        .pagination .page-link:hover {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            border-color: var(--secondary-color);
        }

        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
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

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state i {
            font-size: 64px;
            color: #ccc;
            margin-bottom: 20px;
        }

        .empty-state p {
            color: #999;
            font-size: 18px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 28px;
            }

            .page-header p {
                font-size: 16px;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .content-section {
                padding: 40px 0;
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
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Nossos Projetos</h1>
            <p>Conheça os projetos que realizamos com excelência e profissionalismo</p>
        </div>
    </section>

    <!-- Content -->
    <section class="content-section">
        <div class="container">
            @if($portfolios->count() > 0)
                <div class="portfolio-grid">
                    @foreach($portfolios as $portfolio)
                        <div class="portfolio-card">
                            @if($portfolio->image)
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="portfolio-image">
                            @else
                                <div class="portfolio-image" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1a3a0a 100%); display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-images" style="font-size: 48px; color: rgba(255,255,255,0.3);"></i>
                                </div>
                            @endif
                            
                            <div class="portfolio-content">
                                @if($portfolio->client_name)
                                    <div class="portfolio-client">{{ $portfolio->client_name }}</div>
                                @endif
                                <h3>{{ $portfolio->title }}</h3>
                                <p class="portfolio-description">
                                    {{ Str::limit($portfolio->description, 150) }}
                                </p>
                                <a href="#" class="portfolio-link">
                                    Ver Detalhes <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $portfolios->links() }}
                </div>
            @else
                <div class="empty-state">
                    <i class="fas fa-inbox"></i>
                    <p>Nenhum projeto cadastrado ainda.</p>
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
