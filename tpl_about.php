<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>

<div class="p_about">
	<div class="welcome" style="background: url('<?php echo carbon_get_the_post_meta('crb_about_photo') ?>');">
		<div class="welcome__bottom">
			<div class="animate-puk-mask">
				<div class="welcome__title">
					<div class="welcome__title-inner">
						<?php echo carbon_get_the_post_meta('crb_about_title') ?>
					</div>
				</div>
			</div>
			<div class="welcome__description">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="welcome__description-inner">
								<?php echo carbon_get_the_post_meta('crb_about_description') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grey-cut-left"></div>
		<div class="grey-cut-right"></div>
	</div>
	<section id="about">
		<?php get_template_part('blocks/p_main/about') ?>
	</section>
	<div class="p_about__has">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="animate-puk-mask">
						<div class="p_about__has-title animate-puk" data-effect="fade-up" data-delay="0.8s">
							<?php
								if ( function_exists( 'pll_the_languages' ) ) {
							 		pll_e('Компания располагает'); 
							 	}
							?>:
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				$company_has = carbon_get_the_post_meta( 'crb_about_has' );
				$i = 0;
				$t = 0;
				foreach ( $company_has as $has ): ?>
					<?php $i++; $t++; $t=$t/1.3 ?>
					<div class="col-md-6">
						<div class="p_about__has-content animate-puk" data-effect="fade" data-delay="<?php echo $t ?>s">
							<div class="p_about__has-number">0<?php echo $i ?></div>
							<div class="p_about__has-text">
								— <?php echo $has['crb_about_has_text'] ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="grey-cut-left"></div>
		<div class="grey-cut-right"></div>
	</div>
	<div class="p_about__standarts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="animate-puk-mask">
						<div class="p_about__standarts-title animate-puk" data-effect="fade-up" data-delay="0.8s">
							<?php
								if ( function_exists( 'pll_the_languages' ) ) {
							 		pll_e('Стандарты'); 
							 	}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="animate-puk-mask">
						<div class="p_about__standarts-description animate-puk" data-effect="fade-left" data-delay="1.2s">
							<?php echo carbon_get_the_post_meta('crb_about_standart') ?>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="animate-puk-mask">
						<div class="p_about__standarts-line animate-puk" data-effect="scale-left" data-delay="1.6s"></div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="p_about__standarts-grid">
						<div class="p_about__standarts-item animate-puk" data-effect="fade" data-delay="0.8s">
							<div class="p_about__standarts-box">
								<div class="p_about__standarts-number">
									130
								</div>
							</div>
							<div class="p_about__standarts-text">
								<?php
									if ( function_exists( 'pll_the_languages' ) ) {
								 		pll_e('квалифицированных специалистов'); 
								 	}
								?>
							</div>
						</div>
						<div class="p_about__standarts-item animate-puk" data-effect="fade" data-delay="1.2s">
							<div class="p_about__standarts-box">
								<div class="p_about__standarts-number">
									400
								</div>
							</div>
							<div class="p_about__standarts-text">
								<?php
									if ( function_exists( 'pll_the_languages' ) ) {
								 		pll_e('комплексных проектов'); 
								 	}
								?>
							</div>
						</div>
						<div class="p_about__standarts-item animate-puk" data-effect="fade" data-delay="1.6s">
							<div class="p_about__standarts-box">
								<div class="p_about__standarts-number">
									15
								</div>
							</div>
							<div class="p_about__standarts-text">
								<?php
									if ( function_exists( 'pll_the_languages' ) ) {
								 		pll_e('лет на рынке'); 
								 	}
								?>
							</div>
						</div>
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