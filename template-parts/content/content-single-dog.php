<?php

/**
 * Template part for displaying dogs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="dogs-card">
            <div class="dogs-card__img-wrapper">
                <figure class="dogs-card__img">
                    <?php the_post_thumbnail(); ?>
                </figure>
            </div>
            <div class="dogs-card__content">
                <div class="dogs-title__wrapper">
                    <?php
                    the_title('<h1 class="dogs-title">', '</h1>');
                    ?>
                </div>
                <div class="dogs-info">
                    <?php
                    get_template_part('template-parts/content/info-list-primary');
                    get_template_part('template-parts/content/info-list-secondary');
                    ?>
                </div>
            </div>
        </div><!-- .dogs-card -->
    </div>

    <footer class="entry-footer">
        <?php twentynineteen_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->