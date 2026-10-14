<?php
$assetPrefix = '';
$isHome = true;
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/content.php';
$pageTitle = $siteName . ' — Firearms Reference';
require __DIR__ . '/includes/header.php';
?>
        <section id="home" class="hero" aria-label="Featured slides">
            <div class="carousel" data-carousel>
                <div class="carousel-track">
                    <article class="slide is-active" data-slide>
                        <div class="slide-media">
                            <img src="images/carousel/slide-a1.jpeg" alt="slide 1">
                        </div>
                        <div class="slide-content">
                            <p class="eyebrow">Reference, not retail</p>
                            <h2>The Basics of firearms knowledge</h2>
                            <p>Browse core types, common terms, and how the major families of firearms are organized — written for learners, not shoppers.</p>
                        </div>
                    </article>
                    <article class="slide" data-slide>
                        <div class="slide-media">
                            <img src="images/carousel/slide-b.jpeg" alt="slide 2">
                        </div>
                        <div class="slide-content">
                            <p class="eyebrow">Safety first</p>
                            <h2>Treat every firearm as if it is loaded</h2>
                            <p>This site exists to explain categories and vocabulary. Safe handling, legal ownership, and local regulations always come before curiosity.</p>
                        </div>
                    </article>
                    <article class="slide" data-slide>
                        <div class="slide-media">
                            <img src="images/carousel/slide-c.jpeg" alt="slide 3">
                        </div>
                        <div class="slide-content">
                            <p class="eyebrow">Four starting points</p>
                            <h2>Pistols, rifles, shotguns, attachments</h2>
                            <p>Start with the family that matches what you want to understand, then drill into mechanics, roles, and typical use cases.</p>
                        </div>
                    </article>
                </div>

                <div class="carousel-controls">
                    <button type="button" class="carousel-btn" data-prev aria-label="Previous slide">‹</button>
                    <div class="carousel-dots" data-dots></div>
                    <button type="button" class="carousel-btn" data-next aria-label="Next slide">›</button>
                </div>
            </div>
        </section>

        <section id="categories" class="section categories">
            <div class="section-head">
                <p class="eyebrow">Catalog</p>
                <h2>Start with a category</h2>
                <p>we all know everything has a start.</p>
            </div>

            <div class="card-grid">
                <?php
                $order = ['pistols', 'rifles', 'shotguns', 'attachments'];
                $index = 1;
                foreach ($order as $slug):
                    $cat = $categories[$slug];
                ?>
                <article class="info-card">
                    <a class="card-photo" href="<?php echo htmlspecialchars($slug); ?>/">
                        <img src="<?php echo htmlspecialchars($cat['image']); ?>" alt="<?php echo htmlspecialchars($cat['alt']); ?>">
                    </a>
                    <span class="card-index"><?php echo str_pad((string) $index, 2, '0', STR_PAD_LEFT); ?></span>
                    <h3><?php echo htmlspecialchars($cat['name']); ?></h3>
                    <p><?php echo htmlspecialchars($cat['intro']); ?></p>
                    <a class="btn btn-ghost" href="<?php echo htmlspecialchars($slug); ?>/">Learn more</a>
                </article>
                <?php
                    $index++;
                endforeach;
                ?>
            </div>
        </section>

        <section id="about" class="section about-site">
            <div class="about-panel">
                <p class="eyebrow">The project</p>
                <h2>What this website is for</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nisl vitae magna tincidunt tincidunt. Sed non risus sit amet nisl pretium vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec sit amet nisl eu elit fermentum auctor. Curabitur convallis, nulla ac fermentum aliquet, sapien sapien finibus sapien, at tincidunt mi nisl at nisi. Maecenas a libero ut lorem ullamcorper tincidunt.</p>
                <p>Nam eget semper sapien. Proin ac urna at lectus tincidunt iaculis. Fusce in tellus sit amet ipsum tincidunt volutpat. Aenean non risus vitae nisl egestas ullamcorper. Integer ac magna vitae nunc malesuada facilisis.</p>
            </div>
        </section>

        <section id="developer" class="section about-me">
            <div class="developer-card">
                <div class="developer-copy">
                    <p class="eyebrow">The developer</p>
                    <h2>About me</h2>
                    <p>Hi — I built KnowYourFirearm as a personal reference site and a place to pour my firearm knowledge. I'm no expert in this matter but, I learn a lot from watching videos on YouTube and reading wikipedia pages. I live in a country where it's hard to own a firearm, because of that i never had a chance to learn about them properly nevermind shoots a gun. Anyways, I care about clear information architecture and pages that stay readable on a phone as well as a desk.</p>
                    <p>And if you want to know me more, go check out my little resume.</p>
                    <a class="btn btn-solid" href="<?php echo htmlspecialchars($resumeUrl); ?>">View resume</a>
                </div>
                <div class="developer-aside" aria-hidden="true">
                    <div class="portrait-frame">
                        <img src="images/DSC_0120.JPG" alt="">
                     
                    </div>
                </div>
            </div>
        </section>
<?php require __DIR__ . '/includes/footer.php'; ?>
