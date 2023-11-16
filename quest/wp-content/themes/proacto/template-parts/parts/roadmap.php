<?php $roadmap = get_sub_field('roadmap') ?>

<section class="roadmap <?php echo $roadmap['mode'] ?>">
	<div class="container">
		<h2 class="title-40">
			<?php echo $roadmap['title'] ?>
		</h2>

        <div class="roadmap-container">
            <?php if($roadmap['steps']) : ?>
                <div class="roadmap__wrap swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($roadmap['steps'] as $step) : ?>
                            <div class="roadmap-step swiper-slide <?php echo $step['status'] ?>">
                                <div class="roadmap-step__date text-14">
                                    <?php echo $step['date'] ?>
                                </div>
                                <h3 class="title-24">
                                    <?php echo $step['title'] ?>
                                </h3>
                                <?php if($step['status'] == 'planned'): ?>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.3333 13.3327H26.6667C27.4031 13.3327 28 13.9296 28 14.666V27.9993C28 28.7357 27.4031 29.3327 26.6667 29.3327H5.33333C4.59696 29.3327 4 28.7357 4 27.9993V14.666C4 13.9296 4.59696 13.3327 5.33333 13.3327H6.66667V11.9993C6.66667 6.8447 10.8453 2.66602 16 2.66602C21.1547 2.66602 25.3333 6.8447 25.3333 11.9993V13.3327ZM6.66667 15.9993V26.666H25.3333V15.9993H6.66667ZM14.6667 18.666H17.3333V23.9993H14.6667V18.666ZM22.6667 13.3327V11.9993C22.6667 8.31746 19.6819 5.33268 16 5.33268C12.3181 5.33268 9.33333 8.31746 9.33333 11.9993V13.3327H22.6667Z" fill="#4A5568"/>
                                    </svg>
                                <?php else: ?>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3339 20.2272L25.5905 7.9707L27.4761 9.85632L13.3339 23.9984L4.84863 15.5132L6.73425 13.6276L13.3339 20.2272Z" fill="#FFA417"/>
                                    </svg>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="swiper-pagination"></div>

            <div class="swiper-button swiper-button-prev"></div>
            <div class="swiper-button swiper-button-next"></div>
        </div>
	</div>
</section>