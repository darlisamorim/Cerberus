# Registro de Alterações

Todas as modificações relevantes deste projeto serão documentadas aqui.

Este changelog segue o modelo [Keep a Changelog](https://keepachangelog.com/pt-BR/1.0.0/) e adota a [SemVer](https://semver.org/lang/pt-BR/).

---

## [1.1.0] - 17/07/2025

### Adicionado
- Arquivo `rss.php` para geração dinâmica de feed RSS.
- Arquivo `sitemap.php` para criação automática de sitemap XML.
- Arquivo `.htaccess` com regras de redirecionamento amigável para `/rss.xml` e `/sitemap.xml`.
- Templates com `foreach` prontos para gerar `<item>` no RSS e `<url>` no sitemap dinamicamente.
- Referências oficiais adicionadas no `README.md` para RSS 2.0 e Sitemap Protocol.
- Observações e melhorias visuais na seção "Estrutura do Projeto".

### Documentação
- Seção completa sobre RSS, Sitemap e SEO técnico adicionada ao `README.md`.
- Explicações sobre uso de variáveis dinâmicas e cabeçalhos PHP para gerar XML compatível com buscadores.
- Destaque para redirecionamentos amigáveis e boas práticas com `.htaccess`.

### Corrigido
- Texto "Os arquivo e pastas..." corrigido para "Os arquivos e pastas...".
- Ajustes nos comentários descritivos da estrutura de diretórios.
- Melhorias de clareza e coesão nas explicações do projeto.

---

## [1.0.0] - 08/07/2025

### Adicionado
- Estrutura inicial do projeto Cerberus (MVC simples).
- Diretórios organizados: `app/`, `routes/`, `resources/`, `public/`.
- Comentários PHPDoc incluídos nos arquivos `.php`.
- Tutorial completo no `README.md` explicando como usar o template.

### Alterado
- Nenhuma modificação até o momento.

### Removido
- Nada removido nesta versão.
