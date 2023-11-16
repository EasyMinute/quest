<?php $small_cta = get_sub_field('small_cta'); ?>

<section class="small_cta <?php echo $small_cta['mode'] ?>">
	<div class="container">
		<div class="small_cta__wrap">
			<h2 class="title-56">
				<?php echo $small_cta['title']; ?>
			</h2>
			<div class="small_cta__buttons">
				<button class="partner-trigger border-button white">
					<?php echo __('Partner with us', 'proacto') ?>
				</button>
                <?php get_template_part('template-parts/general/buttons'); ?>
			</div>
		</div>
	</div>
</section>