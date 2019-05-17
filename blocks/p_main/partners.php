<div class="p_main__partners">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9">
				<div class="topline">
					<div class="topline-inner"></div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-11">
				<div class="animate-puk-mask">
					<div class="p_main__partners-title">
						<div class="animate-puk" data-effect="fade-up" data-delay="0.6s">
							<?php
		            if ( function_exists( 'pll_the_languages' ) ) {
		              pll_e('Наши партнеры'); 
		            }
		          ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="swiper-container p_main__partners-grid">
					<div class="swiper-wrapper">
						<?php 
	          $args_partners = [
	              'post_type' => 'page',
	              'fields' => 'ids',
	              'nopaging' => true,
	              'meta_key' => '_wp_page_template',
	              'meta_value' => 'tpl_main.php'
	          ];
	          $pages_partners = get_posts( $args_partners );
	          foreach ( $pages_partners as $pages_partner ): ?>
	          	<?php $i=0; ?>
	          	<?php 
							$partners = carbon_get_post_meta($pages_partner, 'crb_partners');
							foreach ( $partners as $partner ): ?>
							<?php $i++; $i=$i/2 ?>
							<div class="swiper-slide">
								<div class="animate-puk-mask">
									<div class="animate-puk" data-effect="fade-up" data-delay="<?php echo $i ?>s">
				          	<div class="p_main__partners-item">
											<div class="p_main__partners-img">
												<img src="<?php echo $partner['crb_partners_photo'] ?>" alt="">
											</div>
											<div class="p_main__partners-name">
												<?php echo $partner['crb_partners_text'] ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
	          <?php endforeach; ?>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</div>