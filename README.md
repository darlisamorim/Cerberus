# Cerberus ⚔️

**Versão:** 1.0.0\
Cerberus é um repositório modelo pensado para acelerar a criação de novos projetos PHP com uma estrutura organizada, enxuta e reutilizável, baseada no padrão MVC (Model-View-Controller).

Inspirado em frameworks modernos como o Laravel, este template oferece uma base sólida para desenvolver aplicações web, APIs ou sites institucionais, com foco em clareza, produtividade e boas práticas.

Ele vem pronto para uso com:

- Arquivo de rotas (`routes/web.php`) e controle de fluxo;
- Páginas organizadas em views modulares;
- Recursos visuais em `resources/` com CSS, JS, imagens e fontes;
- SEO moderno com metatags dinâmicas, suporte a Open Graph e Twitter Cards;
- Otimização para buscadores com `robots.txt`, `sitemap.xml` e `rss.xml`;
- Comentários em padrão PHPDoc em todos os arquivos principais;
- Documentação (`_docs/`), changelogs.

Seja para projetos pessoais, educacionais ou profissionais, Cerberus te poupa tempo ao iniciar com uma base bem pensada, responsiva e pronta para escalar. Os arquivos e pastas já estão lá — basta começar a codar e estruturá-los.


---

## ✨ Objetivo

Fornecer um ponto de partida limpo, organizado e extensível para qualquer projeto que precise de uma estrutura profissional desde o início. Pensado para uso pessoal, educacional ou profissional, com foco em reutilização e clareza.

---

## 🚀 Como usar este template do GitHub

Antes de tudo, você precisa garantir que o repositório esteja configurado como um **template**. Para isso:

1. Acesse seu repositório no GitHub.
2. Vá em **Settings** (configurações).
3. Marque a opção **Template repository** (localizada na seção "Features").
4. Pronto! Agora ele poderá ser reutilizado com o botão **Use this template** por qualquer pessoa.

Este repositório foi configurado como **template**. Isso significa que você pode criar um novo projeto com a mesma estrutura com apenas alguns cliques. Veja o passo a passo:

### 1. Criar um repositório a partir de um template

Caso você queira **usar este repositório como base** para um novo projeto, siga os passos abaixo. Esse processo pode ser feito com **qualquer repositório público que esteja marcado como "template"**, como é o caso deste.

#### Etapas principais:

1. Acesse o repositório original no GitHub: [`https://github.com/darlisamorim/Cerberus`](https://github.com/darlisamorim/Cerberus)
2. Clique no botão verde **Use this template** no canto superior direito da página.
3. Você será redirecionado para uma tela chamada **"Create a new repository"**.
4. O campo **Repository template** já estará preenchido com `darlisamorim/Cerberus`  ou com o nome do seu Repository Template.
5. Dê um nome para seu novo repositório no campo **Repository name**.
6. Escolha se o repositório será público ou privado.
7. Clique em **Create repository** para finalizar.

> Dica: Se você estiver criando esse projeto para um curso, portfólio ou time, escolha nomes descritivos e simples para facilitar a organização e o versionamento.

Você também pode acessar diretamente a tela de criação usando este link com o template pré-selecionado: 👉 [`https://github.com/new?template_name=Cerberus&template_owner=darlisamorim`](https://github.com/new?template_name=Cerberus\&template_owner=darlisamorim)

### 2. O que já vem pronto no template

Após criar seu novo repositório baseado no Cerberus, você perceberá que:

- Toda a estrutura base já está pronta para uso imediato;
- Os diretórios `app/`, `routes/`, `resources/`, `public/` já estão criados;
- Arquivos como `index.php`, `composer.json` e `web.php` já existem e podem ser personalizados.

> ✅ **Importante:** Edite os arquivos de acordo com seu novo projeto — personalize os nomes de páginas, rotas, controladores e outros arquivos conforme necessário. Abra os arquivos eles contém uma descrição para seu uso.

---
## 📁 Estrutura do Projeto

```bash
📁 Cerberus
│
├── LICENSE                         # Licença do projeto (MIT)
├── README.md                       # Instruções e informações sobre o projeto
│
├── _docs/                          # Documentação e changelogs
│   ├── CHANGELOG.en-US.md          # Registro de mudanças (Inglês)
│   └── CHANGELOG.pt-BR.md          # Registro de mudanças (Português)
│
├── app/                            # Código principal da aplicação (estrutura MVC)
│   ├── Controllers/                # Controladores (lógica do sistema)
│   ├── Models/                     # Modelos de dados
│   └── Views/                      # Visualizações principais (Views)
│
├── composer.json.example           # Arquivo de exemplo para dependências do Composer
│
├── public/                         # Pasta pública (acessada pelo navegador)
│   ├── .htaccess                   # Regras de redirecionamento (ex: rss.xml → rss.php)
│   ├── css/
│   │   └── style.css               # Estilos .CSS finais compilados para produção
│   ├── js/
│   │   └── main.js                 # Scripts .JS finais compilados para produção
│   ├── index.php                   # Arquivo de entrada principal da aplicação
│   ├── robots.txt                  # Regras de indexação para mecanismos de busca
│   ├── rss.php                     # Gera o conteúdo do RSS acessado via /rss.xml
│   ├── sitemap.php                 # Gera o sitemap acessado via /sitemap.xml
│
├── resources/                      # Recursos visuais e arquivos reutilizáveis
│   ├── assets/
│   │   ├── css/
│   │   │   ├── components/
│   │   │   │   ├── animate.css     # Animações base
│   │   │   │   ├── cssoo.css       # Estilos gerais do projeto
│   │   │   │   ├── normalize.css   # Reset CSS moderno
│   │   │   │   └── queries.css     # Media queries responsivas
│   │   │   ├── footer.css          # Estilos do rodapé
│   │   │   ├── header.css          # Estilos do cabeçalho
│   │   │   └── main.css            # Estilos principais da aplicação
│   │   ├── fonts/                  # Fontes utilizadas no projeto
│   │   ├── images/
│   │   │   ├── favicon.png         # Ícone exibido no navegador
│   │   │   ├── logotipo.png        # Logotipo do site
│   │   │   ├── notfound.png        # Imagem para páginas de erro 404
│   │   │   └── share.png           # Imagem para compartilhamento em redes sociais
│   │   └── js/
│   │       ├── html5shiv.js       # Suporte a HTML5 para navegadores antigos
│   │       ├── jquery.min.js      # Biblioteca jQuery (minificada)
│   │       └── main.js            # Scripts personalizados da aplicação
│   └── views/
│       ├── layouts/               # Estruturas globais (layouts base)
│       ├── pages/                 # Páginas completas (ex: home, sobre, contato)
│       └── partials/
│           ├── footer.php         # Rodapé HTML com scripts finais
│           ├── header.php         # Cabeçalho HTML com charset, fontes, metas
│           └── metas.php          # Metatags dinâmicas para SEO, OpenGraph e Twitter
│
└── routes/
    └── web.php                    # Definições de rotas da aplicação
```

Além disso, todos os arquivos `.php` já vêm comentados com um bloco de metadados no padrão **PHPDoc** recomendado pela **PHP-FIG**:

```php
<?php
/**
 * @source     Nome do arquivo
 * @location   Caminho relativo (ex: routes/web.php)
 * @summary    Breve descrição da finalidade do arquivo
 *
 * @author     Darlis A. Amorim <eu@darlisalvesamorim.com>
 * @see        https://github.com/darlisamorim/Cerberus
 * @package    Cerberus
 */


```

Esses comentários ajudam a manter a organização do projeto, facilitam a leitura por outras pessoas desenvolvedoras e garantem maior clareza durante manutenções futuras.


---

## 🌐 Sitemap, RSS dinâmico e redirecionamento com .htaccess

O Cerberus oferece suporte nativo a SEO técnico, incluindo um **feed RSS dinâmico** e um **sitemap.xml gerado automaticamente**, construídos com PHP e preparados para serem interpretados corretamente por navegadores, motores de busca e leitores de feed.

### ✅ O que é RSS?

O **RSS (Really Simple Syndication)** é um formato em XML que permite distribuir automaticamente os conteúdos mais recentes do seu site (como posts, atualizações e notícias). Plataformas como Feedly, Inoreader, redes sociais e ferramentas de indexação leem esse feed para manter os usuários informados das novidades sem precisar visitar o site manualmente.

### ✅ O que é um Sitemap?

O **sitemap.xml** é um arquivo que lista todas as URLs públicas do seu site, informando ao Google e outros buscadores:
- quais páginas existem,
- quando foram modificadas pela última vez,
- e com que frequência devem ser reindexadas.

Isso facilita a **indexação completa e eficiente** do seu site, melhorando o ranqueamento nos mecanismos de busca.

### 🔧 O que o Cerberus já entrega pronto

- `rss.php` → Responsável por gerar o conteúdo do feed RSS de forma dinâmica.
- `sitemap.php` → Cria automaticamente o sitemap XML com base nas páginas do site.
- `.htaccess` → Redireciona URLs como `/rss.xml` e `/sitemap.xml` para os arquivos PHP reais.
- Estrutura pronta com exemplos de `foreach` para listar posts e páginas dinamicamente.

---

### 🔗 Referências Oficiais

- 📡 [Especificação RSS 2.0 (W3C Validator)](https://validator.w3.org/feed/docs/rss2.html)
- 🗺️ [Protocolo oficial Sitemap (sitemaps.org)](https://www.sitemaps.org/protocol.html)


---

### 📄 Por que `.rss.php` e `.sitemap.php` em vez de `.xml`?

Arquivos `.xml` são estáticos e não interpretam código PHP. Isso impede o uso de variáveis, loops ou qualquer conteúdo dinâmico.

Com `.php`, você pode gerar XML válido dinamicamente, usando dados do banco de dados ou arrays, com este cabeçalho no topo do arquivo:

```php
<?php
header('Content-Type: application/rss+xml; charset=UTF-8'); // ou application/xml para sitemap
?>
```

A saída continuará sendo válida como RSS/XML e será lida por serviços como o Google Search Console, Feedly, Inoreader, etc.


---

### 🔁 Redirecionamento com `.htaccess`

O arquivo `.htaccess` já vem configurado para permitir que visitantes acessem `/rss.xml` e `/sitemap.xml`, mesmo os arquivos reais sendo `.php`:

```apacheconf
RewriteEngine On
RewriteRule ^rss.xml$ rss.php [L]
RewriteRule ^sitemap.xml$ sitemap.php [L]
```

---

### 🧩 Estrutura do RSS com loop

No `rss.php`, é possível gerar diversos `<item>` dinamicamente com um `foreach`, como este exemplo:

```php
<?php foreach ($posts as $post): ?>
<item>
    <title><?= htmlspecialchars($post['titulo']) ?></title>
    <link><?= SITE_URL ?>/post/<?= $post['slug'] ?></link>
    <description><?= htmlspecialchars($post['descricao']) ?></description>
    <pubDate><?= date(DATE_RSS, strtotime($post['data'])) ?></pubDate>
    <guid><?= SITE_URL ?>/post/<?= $post['slug'] ?></guid>
</item>
<?php endforeach; ?>
```

Cada `<item>` representa um post/artigo no seu feed.

---

### 🗺️ Estrutura do Sitemap com loop

No `sitemap.php`, você pode iterar sobre páginas assim:

```php
<?php foreach ($paginas as $pagina): ?>
<url>
    <loc><?= SITE_URL ?>/<?= $pagina['url'] ?></loc>
    <lastmod><?= $pagina['data'] ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
</url>
<?php endforeach; ?>
```

---

### 📌 Observação

Os exemplos acima já utilizam variáveis reais em PHP (`$post['titulo']`, `SITE_URL`, etc.), mas você pode adaptar conforme sua estrutura de dados — seja com arrays, objetos ou resultados do banco de dados.

---


## 🔧 Requisitos

- **PHP** >= 8.0 (recomendado uso com XAMPP, Laragon ou ambiente local/profissional)
- **Composer** Instalado Globalmente
- **Git** Instalado Globalmente

---

## 🗂 Documentação

A pasta `_docs` contém arquivos de changelog e futuras instruções técnicas, disponíveis em dois idiomas:

- 📘 [Changelog em Português (pt-BR)](_docs/CHANGELOG.pt-BR.md)
- 📘 [Changelog em Inglês (en-US)](_docs/CHANGELOG.en-US.md)&#x20;



---

## 📄 Licença

Este projeto está licenciado sob os termos da [MIT License](LICENSE).

---

## 👤 Autor

**Darlis A. Amorim**\
*Software Engineer and Full Stack Developer – São Paulo/SP.*

