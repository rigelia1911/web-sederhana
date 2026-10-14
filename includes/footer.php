    </main>
    <footer class="site-footer">
        <div class="footer-inner">
            <div>
                <p class="footer-brand"><?php echo htmlspecialchars($siteName); ?></p>
                <p class="footer-note">Educational firearms reference. Always follow local law and safety rules.</p>
            </div>
            <nav class="footer-nav" aria-label="Footer">
                <a href="<?php echo htmlspecialchars($assetPrefix); ?>index.php">Home</a>
                <a href="<?php echo htmlspecialchars($assetPrefix); ?>pistols/">Pistols</a>
                <a href="<?php echo htmlspecialchars($assetPrefix); ?>rifles/">Rifles</a>
                <a href="<?php echo htmlspecialchars($assetPrefix); ?>shotguns/">Shotguns</a>
                <a href="<?php echo htmlspecialchars($assetPrefix); ?>attachments/">Attachments</a>
            </nav>
            <p class="copyright">&copy; <?php echo $year; ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
        </div>
    </footer>
    <script src="<?php echo htmlspecialchars($assetPrefix); ?>script/script.js"></script>
</body>
</html>
