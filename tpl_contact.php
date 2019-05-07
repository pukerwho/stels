<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<div class="p_contact">
	<div class="welcome">
		<div class="welcome__map">
			<?php echo carbon_get_the_post_meta('crb_contact_map') ?>
		</div>
		<div class="welcome__bottom">
			<div class="welcome__description">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="welcome__description-inner">
								<?php echo carbon_get_the_post_meta('crb_contact_title') ?>
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
		<div class="row">
			<div class="col-md-4 p_contact__col">
				<div class="animate-puk-mask">
					<div class="animate-puk" data-effect="fade-up" data-delay="0.4s">
						<div class="p_contact__subtitle">
							<?php
								if ( function_exists( 'pll_the_languages' ) ) {
							 		pll_e('Адрес'); 
							 	}
							?>
						</div>
						<div class="p_contact__text">
							<?php echo carbon_get_the_post_meta('crb_contact_address') ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 p_contact__col">
				<div class="animate-puk-mask">
					<div class="animate-puk" data-effect="fade-up" data-delay="0.6s">
						<div class="p_contact__subtitle">
							<?php
								if ( function_exists( 'pll_the_languages' ) ) {
							 		pll_e('Телефоны'); 
							 	}
							?>
						</div>
						<?php 
						$contact_phones = carbon_get_the_post_meta( 'crb_contact_phones' );
						foreach ( $contact_phones as $contact_phone ): ?>
							<div class="p_contact__text">
								<?php echo $contact_phone['crb_contact_phones_text'] ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-md-4 p_contact__col">
				<div class="animate-puk-mask">
					<div class="animate-puk" data-effect="fade-up" data-delay="0.8s">
						<div class="p_contact__subtitle">
							E-mail
						</div>
						<?php 
						$contact_emails = carbon_get_the_post_meta( 'crb_contact_emails' );
						foreach ( $contact_emails as $contact_email ): ?>
							<div class="p_contact__text">
								<?php echo $contact_email['crb_contact_emails_text'] ?>
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