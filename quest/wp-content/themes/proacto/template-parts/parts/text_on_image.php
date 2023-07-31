<?php 
$text_on_image = get_sub_field('text_on_image'); 
?>

<section class="text_on_image">
	<div class="container">
		<div class="text_on_image__wrap" style="background-image: url(<?php echo esc_url($text_on_image['image']['url']) ?>);">
			<div class="text_on_image__text">
				<?php echo $text_on_image['text'] ?>
			</div>
		</div>
	</div>	
</section>