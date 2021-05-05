<?php

/**
 * Template part for displaying dogs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $birthDate = get_field('birth_date');
    if ($birthDate) : ?>
        <p><?= $birthDate['text'] ?></p>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->