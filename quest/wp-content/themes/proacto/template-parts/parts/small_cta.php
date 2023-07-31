<?php $small_cta = get_sub_field('small_cta'); ?>

<section class="small_cta">
	<div class="container">
		<div class="small_cta__wrap">
			<h2 class="title-56">
				<?php echo $small_cta['title']; ?>
			</h2>
			<div class="small_cta__buttons">
				<button class="apply-trigger border-button white">
					<?php echo __('Apply for testing', 'proacto') ?>
				</button>
				<button class="partner-trigger solid-button white">
					<?php echo __('Partner with us', 'proacto') ?>
				</button>
			</div>
		</div>
	</div>
</section>