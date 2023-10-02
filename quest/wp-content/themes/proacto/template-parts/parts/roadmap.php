<?php $roadmap = get_sub_field('roadmap') ?>

<section class="roadmap <?php echo $roadmap['mode'] ?>">
	<div class="container">
		<h2 class="title-40">
			<?php echo $roadmap['title'] ?>
		</h2>
		<?php if (!wp_is_mobile()): ?>
			<img src="<?php echo esc_url($roadmap['desktop_image']['url']) ?>" alt="<?php echo esc_attr($roadmap['desktop_image']['alt']) ?>">
		<?php else: ?>
			<img src="<?php echo esc_url($roadmap['mobile_image']['url']) ?>" alt="<?php echo esc_attr($roadmap['mobile_image']['alt']) ?>">
		<?php endif ?>
	</div>
</section>