<footer>
    <div class='footer'>
        <div class='footer-profile'>
            <p>About me</p>
            <?php if (dynamic_sidebar('main-sidbar')) : else : endif; ?>
        </div>
    </div>
    <!-- お問い合わせとプライバシーポリシー -->
    <div class='fixed-page'>
        <?php wp_nav_menu(array(
            'theme_location'  => 'footer',
        )); ?>
        <small class="copyright">©️２０２１ Akina</small>
    </div>
</footer>