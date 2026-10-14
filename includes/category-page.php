<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/content.php';
if (!isset($categories[$categorySlug])) {
    http_response_code(404);
    $pageTitle = 'Not found';
    require __DIR__ . '/header.php';
    echo '<section class="section"><p>That category does not exist.</p></section>';
    require __DIR__ . '/footer.php';
    exit;
}
$cat = $categories[$categorySlug];
$pageTitle = $cat['name'] . ' — ' . $siteName;
require __DIR__ . '/header.php';
?>
<section class="page-hero">
    <div class="page-hero-media">
        <img src="<?php echo htmlspecialchars($assetPrefix . $cat['image']); ?>" alt="<?php echo htmlspecialchars($cat['alt']); ?>">
    </div>
    <div class="page-hero-copy">
        <p class="eyebrow"><?php echo htmlspecialchars($cat['kicker']); ?></p>
        <h1><?php echo htmlspecialchars($cat['name']); ?></h1>
        <p><?php echo htmlspecialchars($cat['intro']); ?></p>
    </div>
</section>

<section class="section">
    <div class="section-head">
        <p class="eyebrow">Articles</p>
        <h2>Read in this category</h2>
    </div>
    <div class="article-list">
        <?php foreach ($cat['articles'] as $item): ?>
            <article class="article-teaser">
                <a class="article-teaser-image" href="<?php echo htmlspecialchars($item['file']); ?>">
                    <img src="<?php echo htmlspecialchars($assetPrefix . $item['image']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
                </a>
                <div class="article-teaser-copy">
                    <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                    <p><?php echo htmlspecialchars($item['excerpt']); ?></p>
                    <a class="btn btn-ghost" href="<?php echo htmlspecialchars($item['file']); ?>">Read more</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/footer.php'; ?>
