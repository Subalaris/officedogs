<ul class="dogs-info__list dogs-info__list-primary">

    <?php
    $birthDate = get_field('birth_date');
    if ($birthDate) : ?>
        <li class="dogs-info__list-item">
            <span class="dogs-info__list-item-icon"><i class="fas fa-birthday-cake"></i></span>
            <span class="dogs-info__list-item-content">
                <span class="dogs-info__list-item-label">Birth date</span>
                <span class="dogs-info__list-item-field"><?= $birthDate ?></span>
            </span>
        </li>
    <?php endif; ?>

    <?php
    $owner = get_field('owner');
    if ($owner) : ?>
        <li class="dogs-info__list-item">

            <span class="dogs-info__list-item-icon"><i class="fas fa-user-circle"></i></span>
            <span class="dogs-info__list-item-content">
                <span class="dogs-info__list-item-label">Owner</span>
                <span class="dogs-info__list-item-field"><?= $owner ?></span>
            </span>
        </li>
    <?php endif; ?>

    <?php
    $breed = get_field('breed');
    if ($breed) : ?>
        <li class="dogs-info__list-item dog-breed" data-breed="<?= $breed ?>">
            <span class="dogs-info__list-item-icon"><i class="fas fa-paw"></i></span>
            <span class="dogs-info__list-item-content">
                <span class="dogs-info__list-item-label">Breed</span>
                <span class="dogs-info__list-item-field"><?= $breed ?></span>
            </span>
        </li>
    <?php endif; ?>
</ul>