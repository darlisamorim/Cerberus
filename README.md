# Cerberus - Tema WordPress Moderno com TailwindCSS

**Versão:** 1.0.0  
**Compatibilidade:** PHP **8+**

É um repositório modelo criado para servir como base na construção de novos projetos PHP organizados com uma estrutura MVC simples, inspirado em frameworks modernos como Laravel. Este template facilita o início de projetos padronizados e reutilizáveis, seja para APIs, sites institucionais ou projetos pessoais.

---

## ✨ Objetivo

O objetivo deste repositório é fornecer um ponto de partida limpo, organizado e extensível para qualquer projeto PHP que precise de uma estrutura profissional desde o início. Você pode usar este repositório como um **template no GitHub** para criar seus próprios repositórios com apenas um clique.

---

## 📁 Estrutura do Projeto

```bash
📁 **Cerberus**

├── LICENSE                  # Licença do projeto
├── README.md                # Instruções e explicações do projeto
├── _docs                    # Documentação e changelog
│   ├── CHANGELOG.md
│   └── CHANGELOG.pt-BR.md
├── app                      # Código principal da aplicação
│   ├── Controllers          # Lógica de controle
│   ├── Models               # Modelos de dados
│   └── Views                # Templates HTML ou arquivos de visualização
├── composer.json            # Gerenciamento de dependências PHP
├── public                   # Pasta pública (ponto de entrada)
│   └── index.php            # Arquivo de entrada da aplicação
├── resources                # Recursos estáticos e views
│   ├── assets               # Assets (CSS, JS, imagens, fontes)
│   │   ├── css
│   │   │   ├── main.css
│   │   │   └── queries.css
│   │   ├── fonts
│   │   ├── images
│   │   │   ├── favicon.png
│   │   │   ├── logo.png
│   │   │   └── notfound.png
│   │   └── js
│   │       ├── jquery.min.js
│   │       └── main.js
│   └── views                # Views organizadas por página ou componente
└── routes
    └── web.php              # Arquivo de rotas da aplicação
````

---

## 🚀 Como usar este repositório como template

Para criar seu próprio projeto baseado no **Cerberus**, siga os passos abaixo:

1. Acesse o repositório no GitHub:
   👉 [`https://github.com/darlisamorim/Cerberus`](https://github.com/darlisamorim/Cerberus) e faça o download do arquivos do **Cerberus**.

2. Crie um repositório com o nome que quiser. Em seguida vá para dentro das configurações desse novo repositório abaixo do nome do respositorio que voce acaba de criar marque a caixinha Template repository.

2. Clique no botão verde **"Use this template"** no topo da página, como mostrado na imagem abaixo:

   ![Use this template](./_docs/assets/use-this-template-button.png)

3. Escolha um nome para o seu novo repositório e clique em **"Create repository from template"**.

4. Clone o novo repositório no seu computador:

   ```bash
   git clone https://github.com/seu-usuario/seu-novo-projeto.git
   cd seu-novo-projeto
   ```

5. Instale as dependências com o Composer:

   ```bash
   composer install
   ```

6. Configure seu servidor local (ex: XAMPP, Laragon ou Apache) para apontar para a pasta `public/` como raiz do projeto.

---

## 🔧 Requisitos

* PHP >= 8.0
* Composer instalado globalmente
* Servidor local (Apache/Nginx ou XAMPP/Laragon)
* Opcional: GitHub CLI para clonar e configurar rapidamente

---

## 🗂 Documentação

A pasta `_docs` contém arquivos de changelog e futuras instruções técnicas, tanto em inglês quanto em português.

---

## 📄 Licença

Este projeto está licenciado sob os termos da [MIT License](LICENSE).

---

## 👤 Author

**Darlis A. Amorim**  
*Software Engineer and Full Stack Developer of São Paulo/SP.*