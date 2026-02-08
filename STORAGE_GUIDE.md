# Guia de Armazenamento de Imagens - Support Solo Sondagens

## 📁 Estrutura de Armazenamento

O sistema **Support Solo Sondagens** está configurado para armazenar todas as imagens **localmente no servidor**, garantindo que você tenha total controle sobre seus dados.

### Diretório Principal

```
storage/
├── app/
│   ├── public/
│   │   ├── branding/          # Logo e Favicon
│   │   ├── services/          # Imagens de Serviços
│   │   ├── portfolios/        # Imagens de Portfólios
│   │   └── instagram/         # Cache de Posts do Instagram
│   └── logs/
└── logs/
```

## 🔗 Link Simbólico

Para que as imagens sejam acessíveis publicamente, o Laravel cria um link simbólico:

```bash
php artisan storage:link
```

Isso cria um link em:
```
public/storage → storage/app/public
```

Após executar este comando, as imagens podem ser acessadas via:
```
https://seu-dominio.com.br/storage/branding/logo.png
https://seu-dominio.com.br/storage/services/imagem.jpg
```

## 📤 Upload de Imagens

### 1. **Logo e Favicon**

Localização: `storage/app/public/branding/`

Acessadas via:
```
/storage/branding/logo.png
/storage/branding/favicon.ico
```

**Configuração no Dashboard:** `/admin/settings`

### 2. **Imagens de Serviços**

Localização: `storage/app/public/services/`

Acessadas via:
```
/storage/services/servico-1.jpg
```

**Upload via:** `/admin/services/create` ou `/admin/services/{id}/edit`

### 3. **Imagens de Portfólios**

Localização: `storage/app/public/portfolios/`

Acessadas via:
```
/storage/portfolios/projeto-1.jpg
```

**Upload via:** `/admin/portfolios/create` ou `/admin/portfolios/{id}/edit`

### 4. **Cache do Instagram**

Localização: `storage/app/public/instagram/`

As imagens dos posts do Instagram são sincronizadas automaticamente e armazenadas localmente para garantir que o site funcione mesmo se a API do Instagram ficar indisponível.

## 🔒 Segurança

### Permissões de Pasta

As pastas de armazenamento devem ter as seguintes permissões:

```bash
chmod -R 775 storage/app/public
chmod -R 775 bootstrap/cache
```

### Arquivo .gitignore

O arquivo `.gitignore` está configurado para **não fazer upload** das imagens para o Git:

```
storage/app/public/*
!storage/app/public/.gitkeep
```

Isso garante que o repositório não fica muito grande com imagens.

## 💾 Backup de Imagens

### Recomendações

1. **Backup Local:** Faça backup regularmente da pasta `storage/app/public/`
2. **Backup Remoto:** Use serviços como AWS S3, Google Cloud Storage ou Backblaze B2
3. **Frequência:** Pelo menos uma vez por semana

### Script de Backup (Linux)

```bash
#!/bin/bash
BACKUP_DIR="/backups"
DATE=$(date +%Y%m%d_%H%M%S)
tar -czf "$BACKUP_DIR/storage_$DATE.tar.gz" storage/app/public/
```

## 🚀 Deploy em Produção

### Passo 1: Criar Diretórios

```bash
mkdir -p storage/app/public/branding
mkdir -p storage/app/public/services
mkdir -p storage/app/public/portfolios
mkdir -p storage/app/public/instagram
```

### Passo 2: Definir Permissões

```bash
chmod -R 775 storage/app/public
chmod -R 775 bootstrap/cache
```

### Passo 3: Criar Link Simbólico

```bash
php artisan storage:link
```

### Passo 4: Verificar Acesso

Acesse `https://seu-dominio.com.br/storage/` no navegador. Você deve ver a pasta `branding/` listada.

## 📊 Tamanho Máximo de Upload

As seguintes restrições estão configuradas:

| Tipo | Tamanho Máximo |
|------|---|
| Logo | 2 MB |
| Favicon | 512 KB |
| Imagens de Serviços | 5 MB |
| Imagens de Portfólios | 5 MB |

Essas configurações podem ser alteradas em `app/Http/Controllers/Admin/SettingsController.php`.

## 🔄 Sincronização de Imagens do Instagram

### Como Funciona

1. Você clica em "Sincronizar Posts" no Dashboard
2. O sistema faz requisições à API do Instagram
3. As imagens são baixadas e armazenadas localmente
4. Os posts são salvos no banco de dados com referência às imagens locais

### Vantagens

- ✅ Não depende da disponibilidade do Instagram
- ✅ Carregamento mais rápido (imagens no seu servidor)
- ✅ Controle total sobre quais posts mostrar
- ✅ Melhor para SEO (imagens otimizadas localmente)

## 🛠️ Troubleshooting

### Erro: "The storage path does not exist"

**Solução:**
```bash
php artisan storage:link
```

### Erro: "Permission denied" ao fazer upload

**Solução:**
```bash
chmod -R 775 storage/app/public
sudo chown -R www-data:www-data storage/app/public
```

### Imagens não aparecem após upload

**Verifique:**
1. Se o link simbólico foi criado: `ls -la public/storage`
2. Se as permissões estão corretas: `ls -la storage/app/public/`
3. Se o arquivo foi realmente salvo: `find storage/app/public -type f`

### Espaço em disco cheio

**Limpeza de imagens antigas:**
```bash
# Listar arquivos por tamanho
du -sh storage/app/public/*

# Remover arquivos não utilizados
find storage/app/public -type f -mtime +90 -delete
```

## 📈 Otimização de Imagens

### Redimensionamento Automático

O sistema pode ser configurado para redimensionar automaticamente as imagens. Adicione ao `SettingsController`:

```php
// Redimensionar imagem
$image = Image::make($request->file('logo'))
    ->fit(300, 100)
    ->save(storage_path('app/public/branding/logo.jpg'));
```

### Compressão

Para melhor performance, comprima as imagens antes de fazer upload:

```bash
# Usando ImageMagick
convert input.jpg -quality 85 -strip output.jpg

# Usando FFmpeg
ffmpeg -i input.jpg -q:v 5 output.jpg
```

## 🔐 Proteção de Imagens

### Restringir Acesso

Se desejar proteger certas imagens, mova-as para `storage/app/private/` e crie uma rota protegida:

```php
Route::get('/download/{file}', function ($file) {
    return Storage::download('private/' . $file);
})->middleware('auth');
```

## 📚 Referências

- [Laravel Storage Documentation](https://laravel.com/docs/11.x/filesystem)
- [Laravel File Upload](https://laravel.com/docs/11.x/requests#files)
- [Image Optimization Best Practices](https://web.dev/image-optimization/)

---

**Versão:** 1.0.0  
**Última atualização:** Janeiro de 2026
