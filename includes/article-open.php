<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/content.php';
$pageTitle = $articleTitle . ' — ' . $siteName;
$categoryName = $categories[$categorySlug]['name'];
require __DIR__ . '/header.php';
?>
<article class="article-page">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo htmlspecialchars($assetPrefix); ?>index.php">Home</a>
        <span aria-hidden="true">/</span>
        <a href="<?php echo htmlspecialchars($assetPrefix . $categorySlug . '/'); ?>"><?php echo htmlspecialchars($categoryName); ?></a>
        <span aria-hidden="true">/</span>
        <span><?php echo htmlspecialchars($articleTitle); ?></span>
    </nav>
    <p class="eyebrow"><?php echo htmlspecialchars($categoryName); ?></p>
    <h1><?php echo htmlspecialchars($articleTitle); ?></h1>
    <figure class="article-figure">
        <img src="<?php echo htmlspecialchars($assetPrefix . $articleImage); ?>" alt="<?php echo htmlspecialchars($articleAlt); ?>">
    </figure>
    <div class="article-body">
