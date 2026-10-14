<?php
require_once __DIR__ . '/config.php';
$homeHref = $assetPrefix . 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($assetPrefix); ?>css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="<?php echo htmlspecialchars($homeHref); ?>" aria-label="<?php echo htmlspecialchars($siteName); ?> home">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 40 40" width="36" height="36">
                        <circle cx="20" cy="20" r="17" fill="none" stroke="currentColor" stroke-width="1.5"/>
                        <circle cx="20" cy="20" r="8" fill="none" stroke="currentColor" stroke-width="1.5"/>
                        <circle cx="20" cy="20" r="2.5" fill="currentColor"/>
                        <line x1="20" y1="3" x2="20" y2="11" stroke="currentColor" stroke-width="1.5"/>
                        <line x1="20" y1="29" x2="20" y2="37" stroke="currentColor" stroke-width="1.5"/>
                        <line x1="3" y1="20" x2="11" y2="20" stroke="currentColor" stroke-width="1.5"/>
                        <line x1="29" y1="20" x2="37" y2="20" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </span>
                <span class="brand-text"><?php echo htmlspecialchars($siteName); ?></span>
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav id="site-nav" class="site-nav" aria-label="Primary">
                <a href="<?php echo htmlspecialchars($homeHref); ?>">Home</a>
                <a href="<?php echo htmlspecialchars($homeHref); ?>#categories">Categories</a>
                <a href="<?php echo htmlspecialchars($homeHref); ?>#about">About</a>
                <a href="<?php echo htmlspecialchars($homeHref); ?>#developer">Developer</a>
            </nav>
        </div>
    </header>
    <main>
