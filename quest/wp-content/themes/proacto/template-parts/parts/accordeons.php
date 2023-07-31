<?php $accordeons = get_sub_field('accordeons'); ?>

<section class="accordeons">
	<div class="container">
		<ul class="accordeons__wrap">
			<?php foreach($accordeons['qa'] as $key => $item): ?>
				<li class="accordeons__item">
					<h3 class="text-20">
						<?php echo $item['question'] ?>
					</h3>
					<p class="text-18">
						<?php echo $item['answer'] ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>	
</section>