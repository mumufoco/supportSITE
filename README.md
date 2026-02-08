# Support Solo Sondagens - Website Moderno

Um website moderno construído com **Laravel**, apresentando um **Dashboard Administrativo** robusto, **integração com Instagram** e **controle avançado de SEO**.

## Características Principais

- **Dashboard Administrativo:** Interface intuitiva para gerenciar conteúdo, serviços e projetos.
- **Integração com Instagram:** Sincronização automática de posts da empresa para exibição no site.
- **Controle de SEO Avançado:** Gerenciamento de meta tags, títulos, descrições e sitemaps dinâmicos.
- **Gerenciamento de Serviços:** CRUD completo para serviços geológicos, fundações e projetos.
- **Gerenciamento de Portfólio:** Exibição de projetos realizados com imagens e descrições.
- **Responsivo:** Design totalmente responsivo para dispositivos móveis e desktop.

## Requisitos

- PHP 8.1 ou superior
- Composer
- MySQL 5.7 ou superior
- Node.js (para compilação de assets)

## Instalação

### 1. Clonar o Repositório

```bash
git clone https://github.com/seu-usuario/supportsondagens.git
cd supportsondagens
```

### 2. Instalar Dependências

```bash
composer install
npm install
```

### 3. Configurar Variáveis de Ambiente

```bash
cp .env.example .env
php artisan key:generate
```

Edite o arquivo `.env` e configure:

```env
DB_DATABASE=supportsondagens
DB_USERNAME=root
DB_PASSWORD=sua_senha

INSTAGRAM_ACCESS_TOKEN=seu_token_aqui
INSTAGRAM_BUSINESS_ACCOUNT_ID=seu_account_id_aqui
```

### 4. Executar Migrações

```bash
php artisan migrate
```

### 5. Compilar Assets

```bash
npm run build
```

### 6. Iniciar o Servidor

```bash
php artisan serve
```

O site estará disponível em `http://localhost:8000`.

## Configuração do Instagram

### Obter o Access Token e Business Account ID

1. Acesse [Meta for Developers](https://developers.facebook.com/).
2. Crie um aplicativo ou use um existente.
3. Configure a integração com Instagram.
4. Gere um **User Access Token** com permissões `instagram_basic,instagram_content_publish`.
5. Obtenha o **Business Account ID** na seção de configurações do Instagram.
6. Adicione essas credenciais no arquivo `.env`.

### Sincronizar Posts

No Dashboard, acesse a seção de Instagram e clique em "Sincronizar Posts" para obter os posts mais recentes.

## Estrutura de Pastas

```
supportsondagens/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── Admin/
│   │           ├── ServiceController.php
│   │           ├── PortfolioController.php
│   │           └── InstagramController.php
│   ├── Models/
│   │   ├── Service.php
│   │   ├── Portfolio.php
│   │   └── InstagramPost.php
│   └── Services/
│       └── InstagramService.php
├── database/
│   └── migrations/
├── resources/
│   └── views/
│       ├── admin/
│       └── layouts/
├── routes/
│   ├── web.php
│   └── api.php
└── .env.example
```

## Rotas Principais

### Frontend

- `/` - Home
- `/servicos` - Página de Serviços
- `/portfolio` - Portfólio de Projetos
- `/contato` - Formulário de Contato

### Admin (Requer Autenticação)

- `/admin/dashboard` - Dashboard Principal
- `/admin/services` - Gerenciamento de Serviços
- `/admin/portfolio` - Gerenciamento de Portfólio
- `/admin/instagram` - Gerenciamento de Posts do Instagram
- `/admin/seo` - Configurações de SEO

## Desenvolvido com

- [Laravel 11](https://laravel.com/)
- [Artesaos SEOTools](https://github.com/artesaos/seotools)
- [Guzzle HTTP](https://docs.guzzlephp.org/)
- [Tailwind CSS](https://tailwindcss.com/)

## Suporte

Para dúvidas ou sugestões, entre em contato através do formulário de contato no site.

## Licença

Este projeto é propriedade da Support Solo Sondagens.
