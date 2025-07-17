<?php
header('Content-Type: application/xml; charset=UTF-8');

// Simulação de páginas existentes no site
$paginas = [
    ['url' => '', 'data' => '2025-07-17'],
    ['url' => 'sobre', 'data' => '2025-07-16'],
    ['url' => 'contato', 'data' => '2025-07-15'],
];

define('SITE_URL', 'https://www.seusite.com.br');
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
                        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <?php foreach ($paginas as $pagina): ?>
        <url>
            <loc><?= SITE_URL ?>/<?= $pagina['url'] ?></loc>
            <lastmod><?= $pagina['data'] ?></lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
</urlset>
