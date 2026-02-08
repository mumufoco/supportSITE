<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Support Solo Sondagens</title>
    
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

        /* Contact Info Cards */
        .contact-info {
            background: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .contact-info i {
            font-size: 36px;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }

        .contact-info h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact-info p {
            color: #666;
            margin: 0;
        }

        /* Form Section */
        .form-section {
            background: var(--light-bg);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .form-section h3 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 30px;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(164, 214, 94, 0.25);
        }

        .form-label {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 8px;
        }

        .btn-submit {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 40px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #1a3a0a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: white;
        }

        /* Alert Messages */
        .alert {
            border-radius: 8px;
            border: none;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
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
            .page-header h1 {
                font-size: 28px;
            }

            .page-header p {
                font-size: 16px;
            }

            .content-section {
                padding: 40px 0;
            }

            .form-section {
                padding: 20px;
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
            <h1>Entre em Contato</h1>
            <p>Estamos prontos para ajudar com suas necessidades de sondagem geotécnica</p>
        </div>
    </section>

    <!-- Content -->
    <section class="content-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Endereço</h4>
                        <p>
                            Rua Exemplo, 123<br>
                            Cidade, Estado - CEP
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <h4>Telefone</h4>
                        <p>
                            (XX) XXXX-XXXX<br>
                            (XX) XXXX-XXXX
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <h4>E-mail</h4>
                        <p>
                            contato@supportsondagens.com.br<br>
                            info@supportsondagens.com.br
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="form-section">
                        <h3><i class="fas fa-envelope"></i> Envie uma Mensagem</h3>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>Erro!</strong>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="/contato">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nome Completo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Assunto <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Mensagem <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn-submit">
                                <i class="fas fa-paper-plane"></i> Enviar Mensagem
                            </button>
                        </form>
                    </div>
                </div>
            </div>
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
