<?php
header('Content-Type: application/rss+xml; charset=UTF-8');

// Exemplo de array com dados simulados dos posts
$posts = [
    [
        'titulo' => 'Lançamento do Cerberus',
        'slug' => 'lancamento-do-cerberus',
        'descricao' => 'Conheça o Cerberus, um template base em PHP com estrutura MVC.',
        'data' => '2025-07-17'
    ],
    [
        'titulo' => 'Atualização v1.1',
        'slug' => 'atualizacao-v1-1',
        'descricao' => 'Novos recursos adicionados ao projeto Cerberus!',
        'data' => '2025-07-15'
    ]
];

define('SITE_URL', 'https://www.seusite.com.br');
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>Cerberus | Feed Oficial</title>
        <link><?= SITE_URL ?></link>
        <description>Feed de atualizações do projeto Cerberus</description>
        <language>pt-BR</language>
        <lastBuildDate><?= date(DATE_RSS) ?></lastBuildDate>

        <?php foreach ($posts as $post): ?>
            <item>
                <title><?= htmlspecialchars($post['titulo']) ?></title>
                <link><?= SITE_URL ?>/post/<?= $post['slug'] ?></link>
                <description><?= htmlspecialchars($post['descricao']) ?></description>
                <pubDate><?= date(DATE_RSS, strtotime($post['data'])) ?></pubDate>
                <guid><?= SITE_URL ?>/post/<?= $post['slug'] ?></guid>
            </item>
        <?php endforeach; ?>
    </channel>
</rss>
