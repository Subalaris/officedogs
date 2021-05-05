<?php
/*
Template Name: Homepage
*/
get_header();
the_post();

?>
<div class="page-content">
    <div class="container">
        <h1>Birthdays this month:</h1>



        <?php
        $month = date('m');

        $args = array(
            'post_type' => 'dogs',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key'        => 'birth_date',
                    'compare'    => 'LIKE',
                    'value'        => $month,
                )
            ),
        );

        $the_query = new WP_Query($args);


        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {

                $the_query->the_post(); ?>


                <div class="homepage-container">
                    <?php
                    $birthDate = get_field('birth_date');
                    if ($birthDate) : ?>
                        <h3><?= $birthDate ?></h3>
                    <?php endif; ?>

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
                                get_template_part('template-parts/content/info-list-secondary');
                                ?>
                            </div>
                        </div>
                        <a href=" <?php echo get_permalink($post->ID); ?>" class="stretched-link"></a>
                    </div><!-- .dogs-card -->


                <?php }
        } else { ?>

                <h2>No birthdays this month</h2>

                <?php //endif; 
                ?>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query();    ?>
                </div>
    </div>
</div>
<?php get_footer(); ?>