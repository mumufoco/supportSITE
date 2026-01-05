# Support Solo Sondagens - Resumo do Projeto

## 📋 Visão Geral

O projeto **Support Solo Sondagens** é uma aplicação web moderna desenvolvida em **Laravel 11** que substitui o WordPress anterior, oferecendo um **Dashboard Administrativo robusto**, **integração com Instagram** e **controle avançado de SEO**.

A aplicação foi construída do zero com foco em:
- ✅ Flexibilidade total para customizações futuras
- ✅ Performance otimizada
- ✅ Interface intuitiva e profissional
- ✅ Integração com redes sociais
- ✅ SEO dinâmico e controlável

---

## 🎯 Funcionalidades Principais

### 1. **Dashboard Administrativo**

O painel de controle oferece uma interface completa para gerenciar todo o conteúdo do site:

#### 📊 Dashboard Principal
- **Estatísticas em tempo real:** Total de serviços, projetos e posts do Instagram
- **Listagem de conteúdo recente:** Últimos serviços e projetos cadastrados
- **Painel de integração do Instagram:** Botão para sincronizar posts

#### 🔧 Gerenciamento de Serviços
- Criar, editar e deletar serviços
- Upload de imagens e ícones
- **Painel de SEO integrado:**
  - Meta título (até 255 caracteres)
  - Meta descrição (até 500 caracteres)
  - Palavras-chave
  - Imagem para redes sociais (Open Graph)
- Status ativo/inativo

#### 🖼️ Gerenciamento de Portfólio
- Criar, editar e deletar projetos
- Informações do cliente
- Upload de imagens
- **SEO completo:** Meta tags, descrição, palavras-chave
- Paginação automática

#### 📱 Integração com Instagram
- **Sincronização automática de posts** via API do Instagram
- Exibição de likes e comentários
- Controle de visibilidade (mostrar/ocultar posts)
- Galeria visual dos posts sincronizados
- Links diretos para os posts no Instagram

---

### 2. **Frontend Responsivo**

#### 🏠 Página Inicial (Home)
- Hero section com call-to-action
- Seção de serviços com cards dinâmicos
- **Feed do Instagram integrado** com efeito hover
- Links para redes sociais
- Design totalmente responsivo

#### 📑 Página de Serviços
- Listagem paginada de todos os serviços
- Cards com ícones e descrições
- Design profissional e intuitivo

#### 📸 Página de Portfólio
- Galeria de projetos realizados
- Informações do cliente
- Descrição detalhada de cada projeto
- Paginação automática

#### 📧 Página de Contato
- Formulário de contato completo
- Informações de contato (endereço, telefone, e-mail)
- Validação de dados
- Integração com e-mail (configurável)

---

### 3. **SEO Avançado**

O sistema oferece controle total sobre SEO em cada página:

- **Meta Tags Dinâmicas:** Título, descrição, palavras-chave
- **Open Graph (OG):** Imagens e dados para compartilhamento em redes sociais
- **Estrutura Semântica:** HTML5 semântico para melhor indexação
- **URLs Amigáveis:** Slugs automáticos baseados em títulos
- **Responsividade:** Otimizado para mobile (fator importante no Google)

---

### 4. **Integração com Instagram**

A integração com o Instagram permite:

- **Sincronização automática** de posts via API oficial da Meta
- **Exibição em tempo real** no site
- **Controle de visibilidade:** Escolher quais posts mostrar
- **Métricas:** Likes e comentários exibidos
- **Links diretos:** Acesso rápido aos posts no Instagram

---

## 🏗️ Arquitetura Técnica

### Stack de Tecnologias

| Componente | Tecnologia |
|-----------|-----------|
| **Backend** | Laravel 11 |
| **Linguagem** | PHP 8.1+ |
| **Banco de Dados** | MySQL 8.0+ / MariaDB |
| **Frontend** | Bootstrap 5 + Custom CSS |
| **Ícones** | Font Awesome 6.4 |
| **Build Tool** | Vite |
| **Gerenciador de Pacotes** | Composer + npm |

### Estrutura de Pastas

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
│   │   ├── InstagramPost.php
│   │   └── User.php
│   └── Services/
│       └── InstagramService.php
├── database/
│   ├── migrations/
│   │   ├── create_services_table.php
│   │   ├── create_portfolios_table.php
│   │   └── create_instagram_posts_table.php
│   └── seeders/
├── resources/
│   └── views/
│       ├── admin/
│       │   ├── dashboard.blade.php
│       │   ├── services/
│       │   ├── portfolios/
│       │   └── instagram/
│       ├── services/
│       ├── portfolio/
│       ├── contact/
│       └── layouts/
├── routes/
│   └── web.php
└── public/
    └── storage/
```

### Banco de Dados

#### Tabelas Principais

**services**
- id, title, slug, description, short_description
- image, icon, meta_title, meta_description, meta_keywords, og_image
- is_active, created_at, updated_at

**portfolios**
- id, title, slug, description, client_name
- image, images (JSON), meta_title, meta_description, meta_keywords, og_image
- is_active, created_at, updated_at

**instagram_posts**
- id, instagram_id, caption, media_type, media_url, permalink
- timestamp, likes_count, comments_count, is_active
- created_at, updated_at

---

## 🚀 Como Usar

### Instalação Rápida

```bash
# 1. Clonar repositório
git clone https://github.com/mumufoco/supportSITE.git
cd supportSITE

# 2. Instalar dependências
composer install
npm install

# 3. Configurar ambiente
cp .env.example .env
php artisan key:generate

# 4. Configurar banco de dados no .env
# DB_DATABASE=support_sondagens
# DB_USERNAME=root
# DB_PASSWORD=sua_senha

# 5. Executar migrações
php artisan migrate

# 6. Compilar assets
npm run dev

# 7. Iniciar servidor
php artisan serve
```

### Acessar o Dashboard

- **URL:** `http://localhost:8000/admin/dashboard`
- **E-mail:** `admin@example.com`
- **Senha:** `password`

### Sincronizar Instagram

1. Configure `INSTAGRAM_ACCESS_TOKEN` e `INSTAGRAM_BUSINESS_ACCOUNT_ID` no `.env`
2. Acesse o Dashboard
3. Clique em "Sincronizar Posts" na seção do Instagram
4. Os posts aparecerão automaticamente

---

## 📱 Páginas Disponíveis

| Página | URL | Descrição |
|--------|-----|-----------|
| Home | `/` | Página inicial com feed do Instagram |
| Serviços | `/servicos` | Listagem de todos os serviços |
| Portfólio | `/portfolio` | Galeria de projetos realizados |
| Contato | `/contato` | Formulário de contato |
| Dashboard | `/admin/dashboard` | Painel administrativo |
| Gerenciar Serviços | `/admin/services` | CRUD de serviços |
| Gerenciar Portfólio | `/admin/portfolios` | CRUD de portfólios |
| Gerenciar Instagram | `/admin/instagram` | Sincronização e controle de posts |

---

## 🔐 Segurança

- ✅ **CSRF Protection:** Tokens CSRF em todos os formulários
- ✅ **SQL Injection Prevention:** Uso de prepared statements (Eloquent ORM)
- ✅ **XSS Prevention:** Escape automático de dados em Blade
- ✅ **Password Hashing:** Senhas criptografadas com bcrypt
- ✅ **HTTPS Ready:** Suporte completo a HTTPS

---

## 🎨 Customização

### Alterar Cores da Marca

Edite o arquivo `resources/views/layouts/admin.blade.php` e procure por:

```css
:root {
    --primary-color: #2d5016;      /* Verde escuro */
    --secondary-color: #a4d65e;    /* Verde claro */
    --light-bg: #f8f9fa;
}
```

### Adicionar Novas Páginas

1. Criar a view em `resources/views/`
2. Adicionar a rota em `routes/web.php`
3. Criar o controlador se necessário

### Integrar com E-mail

Configure as variáveis `MAIL_*` no `.env` e descomente o código de envio em `ContactController.php`.

---

## 📈 Próximas Melhorias (Roadmap)

- [ ] Implementar autenticação real com Laravel Breeze
- [ ] Adicionar área do cliente para acompanhar projetos
- [ ] Sistema de agendamento de consultas
- [ ] Blog integrado com categorias
- [ ] Integração com Google Analytics
- [ ] Sistema de avaliações de clientes
- [ ] Chatbot para atendimento
- [ ] App mobile (React Native)

---

## 📞 Suporte

Para dúvidas ou problemas:
- 📧 E-mail: `contato@supportsondagens.com.br`
- 🌐 Site: `https://site.supportsondagens.com.br`
- 📱 Instagram: `@support_solo_sondagens`

---

## 📄 Licença

Este projeto é propriedade de **Support Solo Sondagens**. Todos os direitos reservados © 2026.

---

## 🙏 Agradecimentos

Desenvolvido com ❤️ usando Laravel, Bootstrap e muito café ☕

**Versão:** 1.0.0  
**Data:** Janeiro de 2026  
**Desenvolvedor:** Manus AI
