<div class="p_main__about">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="p_main__about-block">
					<div class="p_main__about-title">
						<?php 
            $args_about_block = [
                'post_type' => 'page',
                'fields' => 'ids',
                'nopaging' => true,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'tpl_about.php'
            ];
            $pages_about_block = get_posts( $args_about_block );
            foreach ( $pages_about_block as $page ): ?> 
              <?php echo carbon_get_post_meta($page, 'crb_about_block_title') ?>
            <?php endforeach; ?>
					</div>
					<div class="p_main__about-subtitle">
						<?php 
						foreach ( $pages_about_block as $page ): ?> 
              <?php echo carbon_get_post_meta($page, 'crb_about_block_subtitle') ?>
            <?php endforeach; ?>
					</div>
					<div class="p_main__about-text">
						<?php 
						foreach ( $pages_about_block as $page ): ?> 
              <?php echo carbon_get_post_meta($page, 'crb_about_block_text') ?>
            <?php endforeach; ?>
					</div>
					<a href="<?php echo get_page_url('tpl_about') ?>">
		  			<div class="more-button">
		  				<div class="more-button__text">
			  				<?php
	                if ( function_exists( 'pll_the_languages' ) ) {
	                  pll_e('Подробнее'); 
	                }
	              ?>
			  			</div>
		  				<div class="more-button__icon">
		  					<img src="<?php bloginfo('template_url') ?>/img/arrow.svg" alt="">
		  				</div>
		  			</div>
	  			</a>
				</div>
			</div>
		</div>
	</div>
</div>