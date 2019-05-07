<?php
/*
Template Name: Сертификаты
*/
?>

<?php get_header(); ?>

<div class="p_sertificates">
	<div class="welcome" style="background: url('<?php echo carbon_get_the_post_meta('crb_sertificates_photo') ?>');">
		<div class="welcome__bottom">
			<div class="welcome__title">
				<div class="welcome__title-inner">
					<?php echo carbon_get_the_post_meta('crb_sertificates_title') ?>
				</div>
			</div>
			<div class="welcome__description">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="welcome__description-inner">
								<?php echo carbon_get_the_post_meta('crb_sertificates_description') ?>
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
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="p_sertificates__buttons">
					<div class="p_sertificates__button p_sertificates__button-active" onclick="showSert(event, 'Lic')">
						<?php
							if ( function_exists( 'pll_the_languages' ) ) {
						 		pll_e('Лицензии'); 
						 	}
						?>
					</div>
					<div class="p_sertificates__button" onclick="showSert(event, 'Sert')">
						<?php
							if ( function_exists( 'pll_the_languages' ) ) {
						 		pll_e('Сертификаты'); 
						 	}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="p_sertificates__content">
		<div class="container">
			<div id="Lic" class="row tabcontent">
				<div class="col-md-12">
					<div class="p_sertificates__grid">
						<?php 
						$lic_photos = carbon_get_the_post_meta('crb_sertificates_licenses');
						foreach ( $lic_photos as $lic_photo ): ?>
							<?php $photo_src = wp_get_attachment_image_src($lic_photo, 'large'); ?>
							<div class="p_sertificates__item">
								<a href="<?php echo $photo_src[0] ?>" data-lightbox="licenses" data-title="<?php if ( function_exists( 'pll_the_languages' ) ) { pll_e('Лицензии'); } ?>">
									<img src="<?php echo $photo_src[0]; ?>"/>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div id="Sert" class="row tabcontent">
				<div class="col-md-12">
					<div class="p_sertificates__grid">
						<?php 
						$sert_photos = carbon_get_the_post_meta('crb_sertificates_sertificates');
						foreach ( $sert_photos as $sert_photo ): ?>
							<?php $sert_photo_src = wp_get_attachment_image_src($sert_photo, 'large'); ?>
							<div class="p_sertificates__item">
								<a href="<?php echo $sert_photo_src[0] ?>" data-lightbox="sertificates" data-title="<?php if ( function_exists( 'pll_the_languages' ) ) { pll_e('Сертификаты'); } ?>">
									<img src="<?php echo $sert_photo_src[0]; ?>"/>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
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