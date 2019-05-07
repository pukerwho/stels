<?php
/*
Template Name: Сервис
*/
?>

<?php get_header(); ?>

<div class="p_service">
	<div class="welcome" style="background: url('<?php echo carbon_get_the_post_meta('crb_service_photo') ?>');">
		<div class="welcome__bottom">
			<div class="welcome__title">
				<div class="welcome__title-inner">
					<?php echo carbon_get_the_post_meta('crb_service_title') ?>
				</div>
			</div>
			<div class="welcome__description">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="welcome__description-inner">
								<?php echo carbon_get_the_post_meta('crb_service_description') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grey-cut-left"></div>
		<div class="grey-cut-right"></div>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="p_service__content">
					<?php the_content(); ?>	
				</div>
			</div>
		</div>
	</div>
	<div class="p_service__text">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="p_service__text-box">
						<?php echo carbon_get_the_post_meta('crb_service_text') ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e('Ничего не найдено'); ?></p>
	<?php endif; ?>
</div>

<section id="partners">
	<?php get_template_part('blocks/p_main/partners') ?>
</section>
<section id="map">
	<?php get_template_part('blocks/p_main/map') ?>
</section>

<?php get_footer(); ?>