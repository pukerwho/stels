<?php
/*
Template Name: Проекты
*/
?>

<?php get_header(); ?>

<div class="p_projects">
	<div class="welcome" style="background: url('<?php echo carbon_get_the_post_meta('crb_projects_photo') ?>');">
		<div class="welcome__bottom">
			<div class="welcome__title">
				<div class="welcome__title-inner">
					<?php echo carbon_get_the_post_meta('crb_projects_title') ?>
				</div>
			</div>
			<div class="welcome__description">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="welcome__description-inner">
								<?php echo carbon_get_the_post_meta('crb_projects_description') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grey-cut-left"></div>
		<div class="grey-cut-right"></div>
	</div>
	<div class="container">
		<div class="row mb-60">
			<?php 
			  $custom_query_solutions = new WP_Query( array( 
			  	'post_type' => 'projects', 
			  ) );
			  if ($custom_query_solutions->have_posts()) : while ($custom_query_solutions->have_posts()) : $custom_query_solutions->the_post(); ?>
			  	<div class="col-md-6">
			  		<?php get_template_part('blocks/solutions-item') ?>
			  	</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<section id="partners">
	<?php get_template_part('blocks/p_main/partners') ?>
</section>
<section id="map">
	<?php get_template_part('blocks/p_main/map') ?>
</section>

<?php get_footer(); ?>