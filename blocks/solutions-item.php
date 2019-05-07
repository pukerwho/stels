<a href="<?php echo get_permalink() ?>">
	<div class="p_main__solutions-item">
		<div class="p_main__solutions-item-img">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		</div>
		<div class="p_main__solutions-item-title">
			<?php the_title(); ?>
		</div>
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
	</div>
</a>