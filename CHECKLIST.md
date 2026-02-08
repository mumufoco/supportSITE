# Checklist de Instalação e Verificação

Este checklist garante que o site Support Solo Sondagens está instalado e funcionando corretamente após a integração do Nicepage com Laravel.

## ✅ Instalação Inicial

- [ ] Repositório clonado com sucesso
- [ ] Composer dependencies instaladas (`composer install`)
- [ ] Arquivo `.env` criado e configurado (cópia de `.env.example`)
- [ ] Chave da aplicação gerada (`php artisan key:generate`)
- [ ] Banco de dados configurado no `.env` (se necessário)
- [ ] Migrações executadas (`php artisan migrate`) (se necessário)

## 📁 Migração de Assets

- [ ] Comando de migração de imagens executado (`php artisan migrate:nicepage-images`)
- [ ] Diretório `public/images/` criado
- [ ] Imagens identificadas e copiadas (ou relatório de imagens faltantes revisado)
- [ ] CSS copiado para `public/css/`
- [ ] JavaScript copiado para `public/js/`
- [ ] Favicon presente em `public/`

## 🔗 Validação de Links

- [ ] Comando de validação executado (`php artisan validate:internal-links`)
- [ ] Links quebrados identificados e corrigidos (se houver)
- [ ] Todas as rotas necessárias registradas em `routes/nicepage.php`

## 🚀 Servidor e Aplicação

- [ ] Servidor Laravel iniciado (`php artisan serve`)
- [ ] Aplicação acessível em http://localhost:8000
- [ ] Página inicial redireciona corretamente para `/pt/pagina-1`
- [ ] Sem erros 500 ou 404 na página inicial

## 🌐 Navegação e Páginas

- [ ] Página inicial (`/pt/pagina-1`) carrega corretamente
- [ ] Menu de navegação está visível e funcional
- [ ] Links internos do menu funcionam
- [ ] Navegação entre páginas funciona sem erros
- [ ] Páginas em português acessíveis (`/pt/*`)
- [ ] Páginas em inglês acessíveis (`/en/*`)
- [ ] Páginas em espanhol acessíveis (`/es/*`)

## 🎨 Assets Visuais

- [ ] CSS carregando corretamente (verificar no DevTools)
- [ ] Estilos aplicados às páginas
- [ ] Layout responsivo funciona em diferentes resoluções
- [ ] Cores e tipografia de acordo com o design original

## 📸 Imagens

- [ ] Logo do site exibe corretamente
- [ ] Ícones de idiomas exibem corretamente
- [ ] Favicon aparece na aba do navegador
- [ ] Imagens de conteúdo carregam (ou placeholders identificados)
- [ ] Sem erros 404 para imagens críticas no console

## ⚙️ JavaScript

- [ ] JavaScript carregando corretamente (verificar no DevTools)
- [ ] Menu hamburger funciona em mobile
- [ ] Dropdowns do menu funcionam
- [ ] Animações e interações funcionam
- [ ] Sem erros JavaScript no console

## 🌍 Alternância de Idiomas

- [ ] Seletor de idiomas visível no cabeçalho
- [ ] Troca entre Português/English/Español funciona
- [ ] URL muda corretamente ao trocar idioma (`/pt/`, `/en/`, `/es/`)
- [ ] Conteúdo traduzido carrega adequadamente

## 📝 Formulários (se aplicável)

- [ ] Formulário de denúncia acessível
- [ ] Campos do formulário renderizam corretamente
- [ ] Validação do formulário funciona (se implementada)
- [ ] Envio do formulário funciona ou exibe mensagem apropriada

## 🔍 SEO e Meta Tags

- [ ] Meta tags presentes no `<head>` das páginas
- [ ] Títulos de página apropriados
- [ ] Meta descriptions presentes
- [ ] Open Graph tags configuradas

## 📱 Responsividade

- [ ] Site funciona em desktop (1920x1080)
- [ ] Site funciona em tablet (768x1024)
- [ ] Site funciona em mobile (375x667)
- [ ] Menu responsivo funciona em mobile
- [ ] Imagens se adaptam a diferentes tamanhos de tela

## 🔐 Segurança e Performance

- [ ] Sem warnings de segurança no console
- [ ] Assets carregam via HTTPS (em produção)
- [ ] Sem recursos bloqueados por CORS
- [ ] Tempo de carregamento aceitável (< 3s para primeira carga)

## 📚 Documentação

- [ ] README.md atualizado e completo
- [ ] CHECKLIST.md criado
- [ ] Estrutura de diretórios documentada
- [ ] Comandos Artisan documentados

## ✨ Finalização

- [ ] Todos os itens acima verificados
- [ ] Site pronto para demonstração/produção
- [ ] Equipe treinada sobre como usar e manter o site
- [ ] Backup do código realizado

---

## 📋 Notas

Use este checklist cada vez que:
- Instalar o projeto em um novo ambiente
- Fazer deploy em staging ou produção
- Atualizar ou modificar assets do Nicepage
- Adicionar novos idiomas ao site

## 🆘 Problemas Comuns

**CSS não carrega:** Verificar se os arquivos estão em `public/css/` e se as permissões estão corretas.

**Imagens não aparecem:** Executar `php artisan migrate:nicepage-images` e verificar o relatório de imagens faltantes.

**Links quebrados:** Executar `php artisan validate:internal-links` e corrigir as rotas identificadas.

**Erro 500:** Verificar logs em `storage/logs/laravel.log` e permissões de diretórios `storage/` e `bootstrap/cache/`.

**JavaScript não funciona:** Verificar console do navegador para erros e garantir que `jquery.js` e `nicepage.js` estão carregando.
