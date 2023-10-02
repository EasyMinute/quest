<?php $image_with_details = get_sub_field('image_with_details') ?>
<?php $general = get_field('general', 'option') ?>

<section class="image_with_details <?php echo $image_with_details['mode'] ?>">
	<div class="container">
		<div class="image_with_details__wrap">
			<img src="<?php echo esc_url($image_with_details['image']['url']) ?>" alt="<?php echo esc_attr($image_with_details['image']['alt']) ?>" class="image_with_details__col image">
			<div class="image_with_details__col texts">
				<h3 class="title-32">
					<?php echo $image_with_details['title'] ?>
				</h3>
				<h4 class="title-24">
					<?php echo $image_with_details['text'] ?>
				</h4>
				<img src="<?php echo esc_url($image_with_details['image']['url']) ?>" alt="<?php echo esc_attr($image_with_details['image']['alt']) ?>" class="image mobile">
				<ul class="image_with_details__list">
					<?php foreach ($image_with_details['button_rows'] as $row): ?>
						<li>
							<p class="text-20"><?php echo $row['text'] ?></p>
							<div class="image_with_details__buttons">
								<?php foreach ($row['choose_buttons'] as $item): ?>
									<?php if ($item == 'apple'): ?>
                                        <?php $appstore_link = $general['link_to_appstore'] ? $general['link_to_appstore'] : 'javascript:void(0)'; ?>
                                        <?php $appstore_class = $general['link_to_appstore'] ? '' : 'appstore_trigger'; ?>
                                        <a href="<?php echo $appstore_link ?>" class="icon-button blue <?php echo $appstore_class ?>" target="_blank">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_553_3480)">
                                                    <path d="M11.6236 7.22161C10.7476 7.22161 9.39157 6.22561 7.96357 6.26161C6.07957 6.28561 4.35157 7.35361 3.37957 9.04561C1.42357 12.4416 2.87557 17.4576 4.78357 20.2176C5.71957 21.5616 6.82357 23.0736 8.28757 23.0256C9.69157 22.9656 10.2196 22.1136 11.9236 22.1136C13.6156 22.1136 14.0956 23.0256 15.5836 22.9896C17.0956 22.9656 18.0556 21.6216 18.9796 20.2656C20.0476 18.7056 20.4916 17.1936 20.5156 17.1096C20.4796 17.0976 17.5756 15.9816 17.5396 12.6216C17.5156 9.81361 19.8316 8.46961 19.9396 8.40961C18.6196 6.47761 16.5916 6.26161 15.8836 6.21361C14.0356 6.06961 12.4876 7.22161 11.6236 7.22161ZM14.7436 4.38961C15.5236 3.45361 16.0396 2.14561 15.8956 0.849609C14.7796 0.897609 13.4356 1.59361 12.6316 2.52961C11.9116 3.35761 11.2876 4.68961 11.4556 5.96161C12.6916 6.05761 13.9636 5.32561 14.7436 4.38961Z" fill="white"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_553_3480">
                                                        <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <?php echo __('App Store', 'proacto') ?>
                                        </a>
                                    <?php elseif($item == 'google'): ?>
                                        <?php $playmarket_link = $general['link_to_play_market'] ? $general['link_to_appstore'] : 'javascript:void(0)'; ?>
                                        <?php $playmarket_class = $general['link_to_play_market'] ? '' : 'playmarket_trigger'; ?>
                                        <a href="<?php echo $playmarket_link ?>" class="icon-button blue <?php echo $playmarket_class ?>" target="_blank">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_553_3485)">
                                                    <path d="M3.609 2.31445L13.792 12.5005L3.61 22.6865C3.42894 22.6103 3.27443 22.4824 3.16589 22.3187C3.05736 22.155 2.99964 21.9629 3 21.7665V3.23445C3.00008 3.03827 3.05786 2.84645 3.16614 2.68287C3.27443 2.51928 3.42844 2.39116 3.609 2.31445ZM14.499 13.2075L16.801 15.5095L5.864 21.8425L14.499 13.2075ZM17.698 10.0095L20.505 11.6355C20.6565 11.7234 20.7823 11.8495 20.8698 12.0013C20.9572 12.1531 21.0032 12.3253 21.0032 12.5005C21.0032 12.6756 20.9572 12.8478 20.8698 12.9996C20.7823 13.1514 20.6565 13.2775 20.505 13.3655L17.697 14.9915L15.206 12.5005L17.698 10.0095ZM5.864 3.15845L16.802 9.49045L14.499 11.7935L5.864 3.15845Z" fill="white"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_553_3485">
                                                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <?php echo __('Google Play', 'proacto') ?>
                                        </a>
									<?php elseif($item == 'web-builder'): ?>
										<a href="<?php echo $general['link_to_web_builder'] ?>" class="icon-button blue" target="_blank">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M16.3298 13.4963C17.9557 12.2145 18.9995 10.2272 18.9995 7.99609H20.9995C20.9995 10.9681 19.559 13.6036 17.338 15.2426L19.8656 19.6204C20.4179 20.577 20.0901 21.8002 19.1335 22.3525L15.6068 16.244C14.5025 16.7277 13.2823 16.9961 11.9995 16.9961C10.7167 16.9961 9.49663 16.7277 8.39229 16.244L4.86557 22.3525C3.90898 21.8002 3.58123 20.577 4.13352 19.6204L9.19702 10.8502C8.45796 10.1244 7.99954 9.11378 7.99954 7.99609C7.99954 6.13225 9.27432 4.56615 10.9995 4.12211V1.99609H12.9995V4.12211C14.7248 4.56615 15.9995 6.13225 15.9995 7.99609C15.9995 9.11378 15.5411 10.1244 14.8021 10.8502L16.3298 13.4963ZM14.5986 14.4977L13.0705 11.8511C12.7297 11.9456 12.3705 11.9961 11.9995 11.9961C11.6286 11.9961 11.2694 11.9456 10.9286 11.8511L9.40053 14.4977C10.2041 14.8192 11.0812 14.9961 11.9995 14.9961C12.9179 14.9961 13.795 14.8192 14.5986 14.4977ZM11.9995 9.99609C13.1041 9.99609 13.9995 9.10066 13.9995 7.99609C13.9995 6.89152 13.1041 5.99609 11.9995 5.99609C10.895 5.99609 9.99954 6.89152 9.99954 7.99609C9.99954 9.10066 10.895 9.99609 11.9995 9.99609Z" fill="white"/>
											</svg>
											<?php echo __('Web builder', 'proacto') ?>
										</a>
									<?php endif ?>
								<?php endforeach ?>
							</div>
						</li>			
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
</section>