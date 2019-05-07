<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="p_single">
		<div class="welcome" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">
			<div class="welcome__bottom">
				<div class="welcome__title">
					<?php the_title(); ?>
				</div>
				<div class="welcome__description">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<?php echo carbon_get_the_post_meta('crb_post_description') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grey-cut-left"></div>
			<div class="grey-cut-right"></div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="p_single__content">
						<?php the_content(); ?>	
					</div>
				</div>
			</div>
		</div>
		<div class="p_single__block">
			<div class="container">
				<?php if(carbon_get_the_post_meta('crb_post_top_text')): ?>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="p_single__text">
							<?php echo carbon_get_the_post_meta('crb_post_top_text') ?>
						</div>
					</div>
				</div>
				<?php endif ?>
				<?php if(carbon_get_the_post_meta('crb_post_gallery')): ?>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="p_single__gallery">
							<?php 
							$post_photos = carbon_get_the_post_meta('crb_post_gallery');
							foreach ( $post_photos as $post_photo ): ?>
								<?php $photo_src = wp_get_attachment_image_src($post_photo, 'large'); ?>
								<div class="p_single__gallery-img">
									<a href="<?php echo $photo_src[0]; ?>" data-lightbox="blogs" data-title="<?php the_title(); ?>">
								    <img src="<?php echo $photo_src[0]; ?>"/>
								  </a>
							  </div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endif ?>
				<?php if(carbon_get_the_post_meta('crb_post_bottom_text')): ?>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="p_single__text">
							<?php echo carbon_get_the_post_meta('crb_post_bottom_text') ?>
						</div>
					</div>
				</div>
				<?php endif ?>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<section id="partners">
	<?php get_template_part('blocks/p_main/partners') ?>
</section>
<section id="map">
	<?php get_template_part('blocks/p_main/map') ?>
</section>

<?php get_footer(); ?>