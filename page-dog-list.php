<?php
/*
Template Name: Dog list
*/
get_header();
the_post();

?>
<div class="page-content">
    <div class="container">
        <h1>Seniority list:</h1>
        <div class="filter">
            <div class="filter__item"> <span class="filter__item-icon"><i class="fas fa-filter"></i></span></div>
            <div class="filter__item toggle-allergies">
                <span class="filter__item-label">Food allergies</span>
                <label class="switch">
                    <input type="checkbox" value="food-allergies" class="toggle-allergies">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="filter__item">
                <span class="filter__item-label">Breed</span>
                <div class="filter__item-dropdown">


                    <div class="filter__item-selected">All</div>
                    <ul class="breeds-list">
                        <li class="breeds-list__item"><a href="" class="all">All</a></li>

                        <?php
                        $args = array(
                            'category' => 'dogs',
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );

                        $cats = get_categories($args);

                        foreach ($cats as $cat) {
                        ?>
                            <li class="breeds-list__item"><a href="" class="<?php echo $cat->slug; ?>"> <?php echo $cat->name; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dog-list-container">

            <?php

            $args = array(
                'post_type' => 'dogs',
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => 'birth_date',
                    )
                ),
                'orderby' => 'meta_value_num',
                'order' => 'ASC',

            );


            $the_query = new WP_Query($args);


            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {

                    $the_query->the_post(); ?>


                    <div class="dogs-card <?php $cat = get_the_category($post->ID);
                                            $catSlug = $cat[0]->slug;
                                            echo ($catSlug); ?> <?php $foodAllergies = get_field('food_allergies');
                                                                if ($foodAllergies) : ?>food-allergies<?php endif; ?>">
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


                <?php }
            } else { ?>

                <h2>Not Found</h2>

                <?php //endif; 
                ?>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query();    ?>

        </div>
    </div>

</div>
<?php get_footer(); ?>