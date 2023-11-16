<?php $team = get_sub_field('team') ?>

<section class="team <?php echo $team['mode'] ?>">
	<div class="container">
		<h2 class="title-40">
			<?php echo $team['title'] ?>
		</h2>
        <div class="team-container">
            <div class="team__wrap swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($team['members'] as $item): ?>
                        <div class="team-item swiper-slide">
                            <div class="team__photo">
                                <figure>
                                    <img src="<?php echo esc_url($item['image']['url']) ?>" alt="<?php echo esc_attr($item['image']['alt']) ?>">
                                </figure>
                                <div class="team__description">
                                    <?php echo $item['description'] ?>
                                </div>
                            </div>
                            <h3 class="title-24">
                                <?php echo $item['name'] ?>
                            </h3>
                            <p class="text-20">
                                <?php echo $item['role'] ?>
                            </p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button swiper-button-prev"></div>
            <div class="swiper-button swiper-button-next"></div>
        </div>
	</div>
</section>