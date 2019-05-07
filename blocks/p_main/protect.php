<div class="p_main__protect">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="animate-puk-mask">
					<div class="p_main__protect-block animate-puk" data-effect="fade-left" data-delay="0.8s">
						<div class="p_main__protect-title">
							<?php
		            if ( function_exists( 'pll_the_languages' ) ) {
		              pll_e('Техническая защита информации'); 
		            }
		          ?>
						</div>
						<div class="p_main__protect-subtitle">
							<?php echo carbon_get_the_post_meta('crb_main_protect_subtitle') ?>
						</div>
						<div class="p_main__protect-text">
							<?php echo carbon_get_the_post_meta('crb_main_protect_description') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>