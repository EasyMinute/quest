<?php $team = get_sub_field('team') ?>

<section class="team">
	<div class="container">
		<h2 class="title-40">
			<?php echo $team['title'] ?>
		</h2>
		<ul class="team__wrap">
			<?php foreach ($team['members'] as $item): ?>
				<li>
                    <div class="team__photo">
                        <figure>
                            <img src="<?php echo esc_url($item['image']['url']) ?>" alt="<?php echo esc_attr($item['image']['alt']) ?>">
                        </figure>
                    </div>
					<h3 class="title-24">
						<?php echo $item['name'] ?>
					</h3>
					<p class="text-20">
						<?php echo $item['role'] ?>
					</p>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</section>