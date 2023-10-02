<?php $contact_block = get_sub_field('contact_block'); ?>

<section class="contact_block <?php echo $contact_block['mode'] ?>" id="contact_block">
	<div class="container">
		<h2 class="title-40">
			<?php echo $contact_block['title'] ?>
		</h2>
		<p class="text-20">
			<?php echo $contact_block['text'] ?>
		</p>
		<div class="contact_block__wrap">
			<img src="<?php echo esc_url($contact_block['image']['url']) ?>" alt="<?php echo esc_attr($contact_block['image']['alt']) ?>" class="contact_block__image">
			<div class="contact_block__form">
				<?php echo do_shortcode( '[contact-form-7 id="161"]' ) ?>
                <p class="sent-form-text text-20">
                    <?php echo __('Successfully sent', 'proacto') ?>
                </p>
			</div>
		</div>
	</div>
</section>