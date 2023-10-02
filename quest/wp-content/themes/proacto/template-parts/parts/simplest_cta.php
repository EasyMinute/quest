<?php $simplest_cta = get_sub_field('simplest_cta') ?>

<section class="simplest_cta <?php echo $simplest_cta['mode'] ?>">
	<div class="container">
		<div class="simplest_cta__wrap">
			<h2 class="title-40">
				<?php echo $simplest_cta['title']; ?>
			</h2>
			<a href="<?php echo $simplest_cta['button']['url']; ?>" class="solid-button orange">
				<?php echo $simplest_cta['button']['title']; ?>
			</a>
		</div>
	</div>
</section>