<ul class="dogs-info__list dogs-info__list-secondary">

    <?php
    $favoriteFood = get_field('favorite_food');
    if ($favoriteFood) : ?>
        <li class="dogs-info__list-item">
            <span class="dogs-info__list-item-icon"><i class="fas fa-drumstick-bite"></i></span>
            <span class="dogs-info__list-item-content">
                <span class="dogs-info__list-item-label">Favorite food</span>
                <span class="dogs-info__list-item-field"><?= $favoriteFood ?></span>
            </span>
        </li>
    <?php endif; ?>

    <?php
    $foodAllergies = get_field('food_allergies');
    if ($foodAllergies) : ?>
        <li class="dogs-info__list-item food-allergies">
            <span class="dogs-info__list-item-icon"><i class="fas fa-allergies"></i></span>
            <span class="dogs-info__list-item-content">
                <span class="dogs-info__list-item-label">Food allergies</span>
                <span class="dogs-info__list-item-field"><?= $foodAllergies ?></span>
            </span>
        </li>
    <?php endif; ?>

    <?php
    $favoriteToy = get_field('favorite_toy');
    if ($favoriteToy) : ?>
        <li class="dogs-info__list-item">
            <span class="dogs-info__list-item-icon"><i class="fas fa-heart"></i></span>
            <span class="dogs-info__list-item-content">
                <span class="dogs-info__list-item-label">Favorite toy</span>
                <span class="dogs-info__list-item-field"><?= $favoriteToy ?></span>
            </span>
        </li>
    <?php endif; ?>
</ul>