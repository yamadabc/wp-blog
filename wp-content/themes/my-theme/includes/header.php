<header>
    <?php get_template_part('includes/nav'); ?>

    <?php if (wp_is_mobile()) : ?>
        <h1><a class="title" href="<?php bloginfo('url'); ?>"><?php $title = get_bloginfo('name');
                                                                echo $title ?><p>旅、本、<br>プログラミング。</p></a></h1>
    <?php else : ?><h1><a class="title" href="<?php bloginfo('url'); ?>"><?php $title = get_bloginfo('name');
                                                                            echo $title ?><p>旅、本、プログラミング。</p></a></h1>
    <?php endif; ?>
</header>
<!-- パンくずリスト -->
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>