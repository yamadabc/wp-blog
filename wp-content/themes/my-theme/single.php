<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class='singlePostTitle'>
                <p><?php the_time('Y-m-d'); ?></p>
                <h2><?php the_title(); ?></h2>
                <p><?php $cat = get_the_category();
                    echo $cat[0]->cat_name; ?></p>
            </div>
            <div id='indexPosts'>
                <main>
                    <article class='single-post'>
                        <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('thumbnail', 'class=thumbnail');
                        else :
                        ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="No Image" class='thumbnail' />
                        <?php endif; ?>
                        <p>
                            <?php the_content() ?>
                        </p>
                    </article>
                    <?php get_template_part('includes/sns'); ?>
                </main>
                <!-- サイドバー -->
                <aside>
                    <?php if (dynamic_sidebar('main-sidbar')) : else : endif; ?>
                </aside>
            </div>
            <?php get_template_part('footer'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>