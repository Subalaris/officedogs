<?php

/**
 * The template for displaying all single dogs
 *
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main single-dog">

        <?php

        // Start the Loop.
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content-single-dog', 'single');

        endwhile; // End the loop.
        ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
