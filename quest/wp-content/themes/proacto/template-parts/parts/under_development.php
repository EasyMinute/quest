<?php $under_development = get_sub_field('under_development'); ?>

<section class="under_development <?php echo $under_development['mode'] ?>">
    <img src="<?php echo esc_url($under_development['image']['url']) ?>" alt="<?php echo esc_attr($under_development['image']['alt']) ?>">
    <div class="under_development__blur">
        <h3 class="title-24"><?php echo $under_development['title'] ?></h3>
    </div>
</section>
