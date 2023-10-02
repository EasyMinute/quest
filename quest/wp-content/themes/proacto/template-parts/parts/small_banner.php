<?php $small_banner = get_sub_field('small_banner'); ?>

<section class="small_banner">
	<div class="container">
		<div class="small_banner__wrap">
			<h1 class="title-40">
				<?php echo $small_banner['title'] ?>
			</h1>
			<p class="title-24">
				<?php echo $small_banner['subtitle'] ?>
			</p>
            <?php if(is_page_template('page-faq.php')){ ?>
                <div class="small_banner__search-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 4C7.13401 4 4 7.13401 4 11C4 14.866 7.13401 18 11 18C12.8859 18 14.5977 17.2542 15.8564 16.0414C15.8827 16.0072 15.9115 15.9742 15.9429 15.9429C15.9742 15.9115 16.0072 15.8827 16.0414 15.8564C17.2542 14.5977 18 12.8859 18 11C18 7.13401 14.866 4 11 4ZM18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177Z" fill="#4A5568"/>
                    </svg>
                    <input type="search" class="small_banner__search" id="faqSearch" placeholder="Search FAQs">
                </div>
            <?php } elseif(is_page_template('page-switch.php')) { ?>
                <div class="small_banner__switcher_wrap">
                    <div class="small_banner__switcher">
                        <button class="active" data-val="player">
                            <span><?php echo __('Player', 'proacto') ?></span>
                        </button>
                        <button data-val="creator">
                            <span><?php echo __('Creator', 'proacto') ?></span>
                        </button>
                    </div>
                </div>
            <?php } ?>
		</div>
	</div>
</section>