<?php 
$cta = get_sub_field('cta');
$general = get_field('general', 'options');
?>

<section class="cta <?php echo $cta['mode'] ?>">
	<div class="container">
		<div class="cta__wrap">
			<h2 class="title-64">
				<?php echo $cta['title'] ?>
			</h2>
			<p class="text-20">
				<?php echo $cta['text'] ?>
			</p>
			<div class="cta__buttons">
                <?php $appstore_link = $general['link_to_appstore'] ? $general['link_to_appstore'] : 'javascript:void(0)'; ?>
                <?php $appstore_class = $general['link_to_appstore'] ? '' : 'appstore_trigger'; ?>
                <a href="<?php echo $appstore_link ?>" class="icon-button white <?php echo $appstore_class ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_189_5234)">
                            <path d="M11.6236 7.22161C10.7476 7.22161 9.39157 6.22561 7.96357 6.26161C6.07957 6.28561 4.35157 7.35361 3.37957 9.04561C1.42357 12.4416 2.87557 17.4576 4.78357 20.2176C5.71957 21.5616 6.82357 23.0736 8.28757 23.0256C9.69157 22.9656 10.2196 22.1136 11.9236 22.1136C13.6156 22.1136 14.0956 23.0256 15.5836 22.9896C17.0956 22.9656 18.0556 21.6216 18.9796 20.2656C20.0476 18.7056 20.4916 17.1936 20.5156 17.1096C20.4796 17.0976 17.5756 15.9816 17.5396 12.6216C17.5156 9.81361 19.8316 8.46961 19.9396 8.40961C18.6196 6.47761 16.5916 6.26161 15.8836 6.21361C14.0356 6.06961 12.4876 7.22161 11.6236 7.22161ZM14.7436 4.38961C15.5236 3.45361 16.0396 2.14561 15.8956 0.849609C14.7796 0.897609 13.4356 1.59361 12.6316 2.52961C11.9116 3.35761 11.2876 4.68961 11.4556 5.96161C12.6916 6.05761 13.9636 5.32561 14.7436 4.38961Z" fill="#02020D"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_189_5234">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo __('App Store', 'proacto') ?>
                </a>
                <?php $playmarket_link = $general['link_to_play_market'] ? $general['link_to_play_market'] : 'javascript:void(0)'; ?>
                <?php $playmarket_class = $general['link_to_play_market'] ? '' : 'playmarket_trigger'; ?>
                <a href="<?php echo $playmarket_link ?>" class="icon-button white <?php echo $playmarket_class ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <g clip-path="url(#clip0_189_5239)">
                            <path d="M3.609 2.31445L13.792 12.5005L3.61 22.6865C3.42894 22.6103 3.27443 22.4824 3.16589 22.3187C3.05736 22.155 2.99964 21.9629 3 21.7665V3.23445C3.00008 3.03827 3.05786 2.84645 3.16614 2.68287C3.27443 2.51928 3.42844 2.39116 3.609 2.31445ZM14.499 13.2075L16.801 15.5095L5.864 21.8425L14.499 13.2075ZM17.698 10.0095L20.505 11.6355C20.6565 11.7234 20.7823 11.8495 20.8698 12.0013C20.9572 12.1531 21.0032 12.3253 21.0032 12.5005C21.0032 12.6756 20.9572 12.8478 20.8698 12.9996C20.7823 13.1514 20.6565 13.2775 20.505 13.3655L17.697 14.9915L15.206 12.5005L17.698 10.0095ZM5.864 3.15845L16.802 9.49045L14.499 11.7935L5.864 3.15845Z" fill="#02020D"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_189_5239">
                                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo __('Google Play', 'proacto') ?>
                </a>
            </div>
			<img src="<?php echo esc_url($cta['image']['url']) ?>" alt="<?php echo esc_attr($cta['image']['alt']) ?>" class="cta__image">
		</div>
	</div>
</section>