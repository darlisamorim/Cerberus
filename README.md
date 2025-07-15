# Cerberus ⚔️

**Versão:** 1.0.0\
Cerberus é um repositório modelo criado para servir como base na construção de novos projetos  com uma estrutura MVC simples, inspirado em frameworks modernos como Laravel. Este template facilita o início de projetos padronizados e reutilizáveis, seja para APIs, sites institucionais ou projetos pessoais.

---

## ✨ Objetivo

Fornecer um ponto de partida limpo, organizado e extensível para qualquer projeto que precise de uma estrutura profissional desde o início. Pensado para uso pessoal, educacional ou profissional, com foco em reutilização e clareza.

---

## 📁 Estrutura do Projeto

Este projeto também inclui um arquivo `robots.txt` configurado para restringir o acesso de robôs a certas pastas internas:

```txt
User-Agent: *
Allow: /

Disallow: /app/
Disallow: /routes/
Disallow: /resources/
Disallow: /_docs/
Disallow: /vendor/
```

```bash
📁 Cerberus
│
├── robots.txt                 # Regras de indexação para mecanismos de busca  
├── LICENSE                    # Licença do projeto
├── README.md                  # Instruções e explicações do projeto
├── _docs                      # Documentação e changelog
│   ├── CHANGELOG.md
│   └── CHANGELOG.pt-BR.md
├── app                        # Código principal da aplicação
│   ├── Controllers            # Lógica de controle
│   ├── Models                 # Modelos de dados
│   └── Views                  # Templates HTML ou arquivos de visualização
├── composer.json.example              # Gerenciamento de dependências PHP
├── public                     # Pasta pública (ponto de entrada)
│   └── index.php              # Arquivo de entrada da aplicação
├── resources                  # Recursos estáticos e views
│   ├── assets                 # Assets (CSS, JS, imagens, fontes)
│   │   ├── css                # Arquivos de estilo CSS do projeto
│   │   │   ├── main.css       # Estilos principais da aplicação
│   │   │   └── queries.css    # Estilos responsivos e media queries
│   │   ├── fonts              # Fontes customizadas utilizadas na aplicação
│   │   ├── images             # Imagens da interface do projeto
│   │   │   ├── favicon.png    # Ícone exibido na aba do navegador
│   │   │   ├── logotipo.png       # Logotipo da aplicação
│   │   │   └── notfound.png   # Imagem exibida em páginas de erro 404
│   │   └── js                 # Scripts JavaScript
│   │       ├── jquery.min.js  # Biblioteca jQuery (minificada)
│   │       └── main.js        # Scripts customizados do projeto
│   └── views                  # Views organizadas por página ou componente
└── routes
    └── web.php                # Arquivo de rotas da aplicação
```

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

