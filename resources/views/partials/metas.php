<?php
/**
 * @source     metas.php
 * @location   resources/views/partials/metas.php
 * @summary    Conjunto de meta tags dinâmicas para SEO, Open Graph e Twitter Cards
 *
 * @author     Darlis A. Amorim <eu@darlisalvesamorim.com>
 * @see        https://github.com/darlisamorim/Cerberus
 * @package    Cerberus
 */
?>

<!--
  Schema Microdata
  https://schema.org or https://schema.org/WebSite
-->
<meta itemprop="name" content="{{ $name }} | {{ $subname }}" />
<meta itemprop="description" content="{{ $description }}" />
<meta itemprop="url" content="{{ $domain }}" />
<meta itemprop="image" content="{{ $domain }}/{{ $image_share }}" />

<!--
  Facebook Open Graph
  https://ogp.me/
 -->
<meta property="og:title" content="{{ $name }} | {{ $subname }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:url" content="{{ $domain }}" />
<meta property="og:image" content="{{ $domain }}/{{ $image_share }}" />
<meta property="og:type" content="article" />
<meta property="og:image:alt" content="{{ $name }} | {{ $description }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:site_name" content="{{ $name }}" />
<meta property="og:locale" content="pt_BR" />
<!-- Pay attention to these items below, because they are similar but each goal has its own attribute -->
<meta property="og:app_id" content="{{ $fb_app_id }}" />
<meta property="fb:pages" content="{{ $fb_page_id }}" />
<meta property="article:author" content="{{ $linkedin }}" /> <!-- {FACEBOOK_PAGE_AUTHOR} -->
<meta property="article:publisher" content="{{ $linkedin }}" /> <!-- {FACEBOOK_PAGE} -->

<!--
  Twitter Microdata
  https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started
 -->
<meta property="twitter:title" content="{{ $name }} | {{ $subname }}" />
<meta property="twitter:description" content="{{ $description }}" />
<meta property="twitter:url" content="{{ $domain }}" />
<meta property="twitter:image" content="{{ $domain }}/{{ $image_share }}" />
<meta property="twitter:domain" content="{{ $domain }}" />
<meta property="twitter:card" content="summary_large_image" />
<!-- Options Metas -->
<meta name="twitter:site" content="{{ $twitter }}" />
<meta name="twitter:creator" content="{{ $twitter }}" />

