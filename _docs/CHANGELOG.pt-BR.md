# Syndicate News - Tema WordPress Moderno com TailwindCSS

**Versão:** 1.0.0  
**Compatibilidade:** WordPress **6+** | PHP **8+**

Syndicate News é um tema WordPress leve, moderno e modular, ideal para portais de notícias, blogs e revistas digitais. Foi desenvolvido com **Tailwind CSS**, seguindo uma estrutura limpa e escalável com foco em performance, acessibilidade e personalização avançada.

---

## 📁 Estrutura do Projeto

```bash
📁 Syndicate-news/
├── 📄 README.md
├── 📄 style.css                 # Informações do tema
├── 📄 functions.php             # Inicialização, includes e funções principais
├── 📄 header.php / footer.php   # Cabeçalho e rodapé
├── 📄 sidebar.php               # Barra lateral com suporte a anúncios
├── 📁 resources/
│   ├── 📁 css/                  # main.css, queries.css, tailwind.css
│   ├── 📁 js/                   # main.js, jquery.min.js (opcional)
│   ├── 📁 fonts/                # Fontes utilizadas
│   └── 📁 images/               # Favicon, logo, imagens de fallback
├── 📁 src/
│   ├── 📁 Admin/                # Configurações de tema no admin
│   ├── 📁 Core/                 # TemplateLoader
│   ├── 📁 Customizer/           # Estilização via painel WP
│   ├── 📁 Enqueue/              # Registro de scripts e estilos
│   ├── 📁 Helpers/              # Funções utilitárias (ex: excerpt_limit)
│   ├── 📁 Setup/                # ThemeSetup (menus, thumbs, etc.)
│   └── 📁 Widgets/              # Widgets customizados (Trending Now)
├── 📁 templates/
│   ├── 404.php, archive.php, category.php, single.php, etc.
├── 📁 views/
│   ├── components/             # Blocos reutilizáveis (ex: ads)
│   ├── partials/               # Navegação, toolbars
│   ├── posts/                  # content.php
│   └── pages/                  # front-page.php, sobre.php
├── 📁 languages/               # Arquivos .po e .mo para tradução
├── 📄 screenshot.png           # Preview no painel do WordPress
```

---

## 🚀 Funcionalidades

- ✅ **Arquitetura modular limpa e escalável**
- 🌍 **Suporte multilíngue** (.po/.mo e Customizer traduzido)
- 🖼️ **Lazy loading** para performance de imagens
- 🧩 **Blocos reutilizáveis** (anúncios, toolbars, etc.)
- 🎨 **Personalização completa via painel** (cores, fontes, logos)
- 💬 **Sistema de comentários** (WordPress ou Disqus)
- 🔁 **Navegação entre posts** (anterior/próximo)
- 📱 **Design responsivo com Tailwind**
- 🧠 **SEO otimizado** (meta tags, alt text, headings)
- ♿ **Boas práticas de acessibilidade**

---

## ⚙️ Requisitos

- PHP 8.0 ou superior
- WordPress 6.0 ou superior
- TailwindCSS compilado (em `resources/css/`)

---

## 🎨 Personalização

Você pode modificar facilmente:

- Cores do tema
- Tipografia
- Texto do rodapé
- Menus e navegação
- Imagens padrão e anúncios
- Traduções via painel (suporte a Polylang ou Loco Translate)

> Acesse **Aparência > Personalizar** ou o painel de configurações do tema.

---

## 🔧 Tecnologias utilizadas

- Tailwind CSS (compilado)
- HTML5, PHP 8+ com organização moderna
- Arquitetura MVC adaptada para WordPress
- Modularização inspirada no Laravel

---

## 🧪 Testes e Desenvolvimento

- ✅ Layouts testados: `single.php`, `archive.php`, `404.php`
- ✅ Navegação entre posts implementada
- ✅ Lazy loading ativado
- ✅ Comentários funcionais
- ⚠️ WP-CLI: erro de conexão com banco de dados está em análise
- 🔍 SEO otimizado com títulos, descrições e imagens com `alt`
- 🧪 Performance verificada com ferramentas externas

---

## 📦 Releases

- **v1.0.0** – Estrutura base com layout moderno, suporte ao Customizer, widgets personalizados, fallback de imagem e navegação entre posts.

---

## 📌 Planejamento Futuro

- 🧩 Suporte a Dark Mode
- 🔎 Pesquisa com AJAX
- 📝 Modo Escritor (para longforms)
- 📱 Otimizações AMP e PWA
- ⚙️ Templates personalizados adicionais
- 💡 Página de configurações global no admin

---

## 📄 Changelog

Veja `CHANGELOG.md` (em breve) para uma lista completa de mudanças entre versões.

---

## 📝 Licença

Distribuído sob a [Licença MIT](LICENSE).

---

## 👤 Autor

**Darlis A. Amorim**  
*Full Stack Developer • São Paulo/SP*
