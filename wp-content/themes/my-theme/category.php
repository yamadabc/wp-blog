<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <div id="container">
        <?php get_template_part('includes/header'); ?>
        <div class='category-name'>
            <h3 class='category'><?php $cat = get_the_category();
                                    echo $cat[0]->cat_name; ?></h3>
        </div>
        <div id='indexPosts'>
            <main>
                <!-- 記事一覧 -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class='index-post'>
                            <a href="<?php the_permalink() ?>" class='article-title'>
                                <h2><?php the_title() ?></h2>
                                <p><?php $cat = get_the_category();
                                    echo $cat[0]->cat_name; ?></p>
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('thumbnail', 'class=thumbnail');
                                else :
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="No Image" class='thumbnail' />
                                <?php endif; ?>
                                <?php the_excerpt() ?>
                            </a>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php echo paginate_links() ?>
                <?php wp_footer(); ?>
            </main>
            <!-- サイドバー -->
            <aside>
                <?php if (dynamic_sidebar('main-sidbar')) : else : endif; ?>
            </aside>
        </div>
        <?php get_template_part('footer'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>