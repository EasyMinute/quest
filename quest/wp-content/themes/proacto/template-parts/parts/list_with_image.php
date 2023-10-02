<?php $list_with_image = get_sub_field('list_with_image'); ?>

<section class="list_with_image <?php echo $list_with_image['mode'] ?>">
	<div class="container">
		<?php if ($list_with_image['title']): ?>
			<h2 class="title-40">
				<?php echo $list_with_image['title'] ?>
			</h2>
		<?php endif ?>
		<div class="list_with_image__wrap <?php echo $list_with_image['reversed'] ? 'reversed' : '' ?>">
			<div class="list_with_image__col texts">
				<h3 class="title-24">
					<?php echo $list_with_image['subtitle'] ?>
				</h3>
				<ul class="list_with_image__list">
					<?php foreach ($list_with_image['list_items'] as $item): ?>
						<li class="text-20">
							<?php echo $item['text'] ?>
						</li>	
					<?php endforeach ?>
				</ul>
			</div>
			<img src="<?php echo $list_with_image['image']['url'] ?>" alt="<?php echo $list_with_image['image']['url'] ?>" class="list_with_image__col image">
		</div>
	</div>	
</section>