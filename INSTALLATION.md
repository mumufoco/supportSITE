# Guia de Instalação - Support Solo Sondagens

Este documento fornece instruções passo a passo para instalar e configurar o projeto **Support Solo Sondagens** em seu ambiente local ou servidor.

## Pré-requisitos

Antes de começar, certifique-se de que você possui os seguintes requisitos instalados:

- **PHP 8.1+** com extensões: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
- **Composer** (gerenciador de dependências do PHP)
- **MySQL 8.0+** ou **MariaDB 10.3+**
- **Node.js 16+** e **npm** (para compilar assets)
- **Git** (para clonar o repositório)

## Passo 1: Clonar o Repositório

```bash
git clone https://github.com/mumufoco/supportSITE.git
cd supportSITE
```

## Passo 2: Instalar Dependências do PHP

```bash
composer install
```

## Passo 3: Configurar o Arquivo .env

Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Edite o arquivo `.env` e configure as seguintes variáveis:

### Configuração do Banco de Dados

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=support_sondagens
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

### Configuração do Instagram

Para integrar com o Instagram, você precisa:

1. Criar um aplicativo no [Facebook Developers](https://developers.facebook.com/)
2. Obter o **Access Token** da API do Instagram
3. Configurar as variáveis no `.env`:

```env
INSTAGRAM_ACCESS_TOKEN=seu_token_aqui
INSTAGRAM_BUSINESS_ACCOUNT_ID=seu_id_aqui
```

### Configuração de E-mail (Opcional)

Se deseja que o formulário de contato envie e-mails:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=seu_usuario
MAIL_PASSWORD=sua_senha
MAIL_FROM_ADDRESS=noreply@supportsondagens.com.br
MAIL_FROM_NAME="Support Solo Sondagens"
```

## Passo 4: Gerar a Chave da Aplicação

```bash
php artisan key:generate
```

## Passo 5: Criar o Banco de Dados

```bash
# Criar o banco de dados manualmente (MySQL)
mysql -u root -p
CREATE DATABASE support_sondagens CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

## Passo 6: Executar as Migrações

```bash
php artisan migrate
```

## Passo 7: Instalar Dependências do Node.js

```bash
npm install
```

## Passo 8: Compilar Assets (CSS e JavaScript)

```bash
# Para desenvolvimento
npm run dev

# Para produção
npm run build
```

## Passo 9: Criar Link Simbólico para Storage

```bash
php artisan storage:link
```

Isso permite que as imagens enviadas sejam acessíveis publicamente.

## Passo 10: Iniciar o Servidor Local

```bash
php artisan serve
```

O aplicativo estará disponível em `http://localhost:8000`

## Acesso ao Dashboard

### Credenciais Padrão (Temporárias)

- **E-mail:** `admin@example.com`
- **Senha:** `password`

**⚠️ IMPORTANTE:** Altere essas credenciais antes de colocar em produção!

### URL do Dashboard

```
http://localhost:8000/admin/dashboard
```

## Configuração de Autenticação Real

Para implementar autenticação real, use o **Laravel Breeze**:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev
php artisan migrate
```

## Sincronização do Instagram

Para sincronizar os posts do Instagram:

1. Acesse o Dashboard em `/admin/dashboard`
2. Clique em "Sincronizar Posts" na seção do Instagram
3. Os posts serão importados e exibidos automaticamente

## Estrutura de Pastas

```
supportSITE/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/
│   │       │   ├── ServiceController.php
│   │       │   ├── PortfolioController.php
│   │       │   └── InstagramController.php
│   │       └── ContactController.php
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
│       ├── services/
│       ├── portfolio/
│       ├── contact/
│       └── layouts/
├── routes/
│   └── web.php
└── public/
    └── storage/
```

## Funcionalidades Principais

### 1. Dashboard Administrativo
- Gerenciamento de Serviços
- Gerenciamento de Portfólio
- Sincronização de Posts do Instagram
- Estatísticas em tempo real

### 2. Frontend
- Página inicial com feed do Instagram
- Página de Serviços
- Página de Portfólio
- Página de Contato com formulário

### 3. SEO
- Meta tags personalizáveis por página
- Controle de títulos e descrições
- Suporte a Open Graph (OG) para redes sociais

### 4. Instagram Integration
- Sincronização automática de posts
- Exibição de likes e comentários
- Controle de visibilidade

## Troubleshooting

### Erro: "SQLSTATE[HY000]: General error: 1030"
Verifique se o banco de dados foi criado corretamente e se as credenciais no `.env` estão corretas.

### Erro: "The storage path does not exist"
Execute: `php artisan storage:link`

### Erro: "Class not found"
Execute: `composer dump-autoload`

### Instagram não sincroniza
Verifique se o `INSTAGRAM_ACCESS_TOKEN` está correto no `.env` e se a conta tem permissões de API.

## Deploy em Produção

### Passos Recomendados:

1. **Configurar variáveis de ambiente:**
   ```bash
   cp .env.example .env
   # Editar .env com dados de produção
   ```

2. **Instalar dependências:**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install
   npm run build
   ```

3. **Gerar chave:**
   ```bash
   php artisan key:generate
   ```

4. **Executar migrações:**
   ```bash
   php artisan migrate --force
   ```

5. **Otimizar cache:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

6. **Configurar permissões:**
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

## Suporte

Para dúvidas ou problemas, entre em contato através do formulário de contato no site ou envie um e-mail para `contato@supportsondagens.com.br`.

## Licença

Este projeto é propriedade de Support Solo Sondagens. Todos os direitos reservados.
