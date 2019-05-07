<div class="p_main__solutions">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9">
				<div class="topline animate-puk" data-effect="scale-x" data-delay="0.8s">
					<div class="topline-inner animate-puk" data-effect="fade" data-delay="1.4s"></div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="animate-puk-mask">
					<div class="p_main__solutions-title">
						<div class="animate-puk" data-effect="fade-up" data-delay="0.8s">
							<?php
		            if ( function_exists( 'pll_the_languages' ) ) {
		              pll_e('Наши направления'); 
		            }
		          ?>	
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
			  $custom_query_solutions = new WP_Query( array( 
			  	'post_type' => 'solutions', 
			  	'posts_per_page' => 6,
			  ) );
			  if ($custom_query_solutions->have_posts()) : while ($custom_query_solutions->have_posts()) : $custom_query_solutions->the_post(); ?>
			  	<div class="col-md-6">
			  		<?php get_template_part('blocks/solutions-item') ?>
			  	</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>