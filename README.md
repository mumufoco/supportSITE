# Support Solo Sondagens - Site Oficial

Website moderno construído com **Laravel 10** integrado com o design **Nicepage**, apresentando um sistema multilíngue completo com páginas em Português, Inglês e Espanhol.

## 📋 Sobre o Projeto

Este é o site institucional da Support Solo Sondagens, uma empresa especializada em serviços geológicos, sondagens e ensaios laboratoriais. O site foi desenvolvido integrando um design profissional do Nicepage com o poder e flexibilidade do Laravel.

### Características Principais

- ✨ **Design Profissional**: Interface moderna criada no Nicepage e perfeitamente integrada ao Laravel
- 🌍 **Multilíngue**: Suporte completo para Português, Inglês e Espanhol
- 📱 **Responsivo**: Design totalmente responsivo para dispositivos móveis, tablets e desktops
- 🔍 **SEO Otimizado**: Meta tags, títulos e descrições configurados para melhor indexação
- ⚡ **Performance**: Assets otimizados e carregamento rápido
- 🎨 **276 Páginas**: Sistema completo com todas as páginas de serviços, portfólios e informações

## 🔧 Requisitos do Sistema

- PHP 8.1 ou superior
- Composer 2.x
- MySQL 5.7+ ou PostgreSQL (opcional, para funcionalidades de admin)
- Node.js e NPM (opcional, para compilação de assets customizados)
- Servidor web (Apache/Nginx) ou servidor embutido do Laravel

## 🚀 Instalação

### 1. Clone o Repositório

```bash
git clone https://github.com/mumufoco/supportSITE.git
cd supportSITE
```

### 2. Instale as Dependências

```bash
composer install
```

### 3. Configure o Ambiente

```bash
# Copie o arquivo de exemplo
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate
```

Edite o arquivo `.env` e configure as variáveis necessárias:

```env
APP_NAME="Support Site"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

# Configurações de idioma
APP_LOCALE=pt
APP_FALLBACK_LOCALE=pt
APP_AVAILABLE_LOCALES=pt,en,es

# Banco de dados (opcional para o site estático)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=support_site
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migre as Imagens do Nicepage

```bash
php artisan migrate:nicepage-images
```

Este comando irá:
- Criar o diretório `public/images/` se não existir
- Copiar todas as imagens encontradas no diretório `Nicepage/`
- Gerar um relatório de imagens copiadas e faltantes
- Identificar imagens referenciadas nos templates Blade

### 5. Execute o Servidor

```bash
php artisan serve
```

O site estará disponível em: **http://localhost:8000**

A página inicial irá redirecionar automaticamente para: **http://localhost:8000/pt/pagina-1**

## 📁 Estrutura do Projeto

```
supportSITE/
├── app/
│   ├── Console/
│   │   └── Commands/
│   │       ├── MigrateNicepageImages.php    # Comando de migração de imagens
│   │       └── ValidateInternalLinks.php    # Comando de validação de links
│   ├── Http/
│   │   └── Controllers/
│   │       └── Admin/                       # Controllers do admin (opcional)
│   └── Models/                              # Models da aplicação (opcional)
├── Nicepage/                                # Arquivos originais do Nicepage
│   ├── *.html                              # HTMLs originais
│   ├── *.css                               # CSS originais
│   ├── en/                                 # Páginas em inglês
│   ├── es/                                 # Páginas em espanhol
│   └── blog/                               # Páginas de blog
├── public/
│   ├── css/                                # Arquivos CSS compilados
│   ├── js/                                 # Arquivos JavaScript
│   ├── images/                             # Imagens do site
│   ├── intlTelInput/                       # Plugin de telefone internacional
│   └── favicon.ico                         # Favicon do site
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── nicepage.blade.php          # Layout master do Nicepage
│       ├── pt/                             # Views em português
│       ├── en/                             # Views em inglês
│       └── es/                             # Views em espanhol
├── routes/
│   ├── web.php                             # Rotas principais
│   └── nicepage.php                        # Rotas auto-geradas do Nicepage
├── .env.example                            # Exemplo de configuração
├── CHECKLIST.md                            # Checklist de instalação
└── README.md                               # Este arquivo
```

### Diretórios Principais

#### `resources/views/`
Contém todos os templates Blade organizados por idioma:
- `pt/` - 92 views em português
- `en/` - 92 views em inglês  
- `es/` - 92 views em espanhol
- `layouts/nicepage.blade.php` - Layout master que todas as páginas estendem

#### `routes/nicepage.php`
Arquivo com 309 rotas auto-geradas organizadas por idioma:
- Rotas com prefixo `/pt/` para português
- Rotas com prefixo `/en/` para inglês
- Rotas com prefixo `/es/` para espanhol

#### `public/css/` e `public/js/`
Assets já compilados e prontos para uso:
- `nicepage.css` - Framework CSS principal (1.5MB)
- `nicepage.js` - JavaScript principal (437KB)
- `jquery.js` - jQuery 3.x
- Arquivos CSS específicos de cada página

## 🌍 Sistema Multilíngue

### Como Funciona

O site utiliza prefixos de URL para distinguir entre idiomas:

- **Português (padrão)**: `/pt/pagina-1`, `/pt/servicos-geologico`
- **Inglês**: `/en/pagina-1`, `/en/servicos-geologico`
- **Espanhol**: `/es/pagina-1`, `/es/servicos-geologico`

### Estrutura de Rotas

As rotas seguem o padrão:
```php
Route::prefix('pt')->name('pt.')->group(function () {
    Route::get('pagina-1', fn() => view('pt.pagina-1'))->name('pagina-1');
    // ... mais rotas
});
```

### Trocar de Idioma nos Templates

Nos templates Blade, use a função `route()` para gerar links que mantêm o idioma:

```blade
<a href="{{ route('pt.servicos-geologico') }}">Serviços</a>
<a href="{{ route('en.servicos-geologico') }}">Services</a>
<a href="{{ route('es.servicos-geologico') }}">Servicios</a>
```

### Adicionar um Novo Idioma

1. Crie uma nova pasta em `resources/views/` (ex: `fr/`)
2. Copie todos os arquivos Blade de um idioma existente
3. Traduza o conteúdo dos templates
4. Adicione as rotas em `routes/nicepage.php`:

```php
Route::prefix('fr')->name('fr.')->group(function () {
    Route::get('pagina-1', fn() => view('fr.pagina-1'))->name('pagina-1');
    // ... adicionar todas as rotas
});
```

5. Atualize o `.env`:
```env
APP_AVAILABLE_LOCALES=pt,en,es,fr
```

## 🛠️ Comandos Artisan Customizados

### Migrar Imagens do Nicepage

```bash
php artisan migrate:nicepage-images
```

**O que faz:**
- Busca imagens no diretório `Nicepage/`
- Copia para `public/images/`
- Gera relatório de imagens copiadas/faltantes
- Identifica imagens referenciadas nas views

**Quando usar:**
- Após instalar o projeto pela primeira vez
- Após adicionar novas imagens ao Nicepage
- Para verificar imagens faltantes

### Validar Links Internos

```bash
php artisan validate:internal-links
```

**O que faz:**
- Escaneia todas as views Blade
- Identifica chamadas `route()`
- Verifica se as rotas existem
- Gera relatório de links quebrados

**Quando usar:**
- Após adicionar novas páginas
- Após modificar rotas
- Para garantir que não há links quebrados

## 🎨 Personalização

### Modificar Estilos

Os estilos principais estão em:
- `public/css/nicepage.css` - Framework base (não modificar)
- `public/css/[nome-da-pagina].css` - Estilos específicos de cada página

Para customizações:
1. Crie um arquivo CSS customizado em `public/css/custom.css`
2. Adicione no layout `resources/views/layouts/nicepage.blade.php`:

```blade
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush
```

### Modificar JavaScript

Para adicionar JavaScript customizado:
1. Crie um arquivo em `public/js/custom.js`
2. Adicione no layout:

```blade
@push('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
```

### Modificar o Layout Master

O layout master está em `resources/views/layouts/nicepage.blade.php`. Ele controla:
- Estrutura HTML base
- Meta tags
- Inclusão de CSS/JS
- Favicon
- Google Fonts

## 🔍 Páginas Principais

### Páginas de Serviços
- Serviços Geológicos
- Serviços Laboratoriais
- Sondagem Especiais
- Elaboração de Projetos
- Fundação Profunda

### Páginas de Portfólio
- Portfólio Solo
- Portfólio Mineração
- Portfólio Transmissoras

### Páginas Institucionais
- Página Inicial (Página 1)
- Missão, Valores e Objetivos
- Código de Ética e Conduta
- Políticas (Anticorrupção, Anti-Assédio, Dados, etc.)

### Páginas de Sondagem e Ensaios
Mais de 70 páginas detalhando diferentes tipos de:
- Sondagens (Percussão, Rotativa, Trado, etc.)
- Ensaios Laboratoriais (CBR, Granulometria, Triaxial, etc.)
- Sondas Especiais (Elétrica, Raio Gama, Polarização, etc.)

## 🧪 Testes e Validação

### Verificar Instalação

Use o checklist fornecido:

```bash
cat CHECKLIST.md
```

### Testar Rotas

```bash
php artisan route:list
```

Você verá 309 rotas registradas.

### Testar no Navegador

1. Inicie o servidor: `php artisan serve`
2. Acesse: http://localhost:8000
3. Verifique:
   - Redirecionamento para `/pt/pagina-1`
   - Menu de navegação funcional
   - Troca de idiomas funcional
   - CSS e JS carregando
   - Links internos funcionando

## 📊 Estatísticas do Projeto

- **276 páginas** Blade convertidas
- **309 rotas** registradas
- **3 idiomas** suportados
- **110 imagens** referenciadas
- **92 páginas** por idioma

## 🤝 Contribuindo

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 🐛 Problemas Conhecidos

### Imagens Faltantes
Algumas imagens referenciadas nos templates não existem fisicamente. Execute `php artisan migrate:nicepage-images` para ver o relatório completo. Você pode:
- Criar placeholders
- Obter as imagens originais do Nicepage
- Substituir por imagens existentes

### Links Quebrados
Alguns links podem estar quebrados devido a inconsistências nos nomes das rotas. Execute `php artisan validate:internal-links` para identificá-los.

## 📝 Licença

Este projeto é propriedade da Support Solo Sondagens. Todos os direitos reservados.

## 📞 Suporte

Para dúvidas ou suporte:
- Website: https://supportsondagens.com.br
- Email: contato@supportsondagens.com.br

## 🙏 Agradecimentos

- **Nicepage** - Pela ferramenta de design
- **Laravel** - Pelo framework robusto
- Equipe Support Solo Sondagens

---

Desenvolvido com ❤️ para Support Solo Sondagens
