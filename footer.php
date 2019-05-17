  </section>
  <footer id="footer" class="footer">
  	<div class="container">
  		<div class="row footer__row">
  			<div class="col-md-4 footer__col order-md-1 order-sm-2">
  				<div class="footer__title">
            <?php
              if ( function_exists( 'pll_the_languages' ) ) {
                pll_e('Контактная информация'); 
              }
            ?>: 
  				</div>
  				<div class="footer__text">
            <?php 
            $args_contact = [
                'post_type' => 'page',
                'fields' => 'ids',
                'nopaging' => true,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'tpl_contact.php'
            ];
            $pages_contact = get_posts( $args_contact );
            foreach ( $pages_contact as $page ): ?> 
                <?php echo carbon_get_post_meta($page, 'crb_contact_address') ?>
            <?php endforeach; ?>
  				</div>
  				<div class="footer__contacts">
  					<div class="footer__contacts-icon">
  						<img src="<?php bloginfo('template_url') ?>/img/phone-receiver.svg" alt="">
  					</div>
  					|
  					<div class="footer__contacts-text">
              <?php 
              foreach ( $pages_contact as $page_contact ): ?>
                <?php 
                $phones = carbon_get_post_meta($page_contact, 'crb_contact_phones');
                foreach ( $phones as $phone ): ?>
                  <div>
                    <?php echo $phone['crb_contact_phones_text'] ?>   
                  </div>
                <?php endforeach; ?>
              <?php endforeach; ?>
  					</div>
  				</div>
  				<div class="footer__contacts">
  					<div class="footer__contacts-icon">
  						<img src="<?php bloginfo('template_url') ?>/img/envelope-shape.svg" alt="">
  					</div>
  					|
  					<div class="footer__contacts-text">
              <?php 
              foreach ( $pages_contact as $page_contact ): ?>
                <?php 
                $emails = carbon_get_post_meta($page_contact, 'crb_contact_emails');
                foreach ( $emails as $email ): ?>
                  <div>
                    <a href="mailto:<?php echo $email['crb_contact_emails_text'] ?>"><?php echo $email['crb_contact_emails_text'] ?></a> 
                  </div>
                <?php endforeach; ?>
              <?php endforeach; ?>
  					</div>
  				</div>
  			</div>
  			<div class="col-md-3 footer__col order-md-2 order-sm-3">
  				<div class="footer__title">
            <?php
              if ( function_exists( 'pll_the_languages' ) ) {
                pll_e('Свяжитесь с нами'); 
              }
            ?>:
  				</div>
  				<div class="footer__form">
  					<?php echo do_shortcode('[contact-form-7 id="11" title="Форма в подвале"]') ?>
  				</div>
  			</div>
  			<div class="col-md-4 offset-md-1 footer__col order-first order-md-3">
  				<div class="footer__title">
            <?php
              if ( function_exists( 'pll_the_languages' ) ) {
                pll_e('Навигация по сайту'); 
              }
            ?>:
  				</div>
  				<div class="footer__menu">
  					<?php wp_nav_menu([
              'theme_location' => 'head_menu',
              'container' => 'nav',
              'container_class' => 'head_menu',
              'menu_id' => 'head_menu',
              'menu_class' => ''
            ]); ?>
  				</div>
  			</div>
  		</div>
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              <div class="mb-4">
                <?php
                  if ( function_exists( 'pll_the_languages' ) ) {
                    pll_e('© Copyright 1996-2019. Научно-производственное предприятие «СТЕЛС».'); 
                  }
                ?>
              </div>
              <div>
                <?php
                  if ( function_exists( 'pll_the_languages' ) ) {
                    pll_e('Разработано '); 
                  }
                ?> <a href="http://webkitchen.kiev.ua/" target="_blank">Webkitchen</a>
              </div>
            </div>
          </div>
        </div>
  	</div>
  </footer>
  <?php if( is_page_template( 'tpl_main.php' )): ?>
  <div class="callback__modal">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="callback__box">
            <div class="callback__close">
              <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="25px">
            </div>
            <div class="callback__title">
              <?php
                if ( function_exists( 'pll_the_languages' ) ) {
                  pll_e('Напишите нам'); 
                }
              ?>
            </div>
            <div class="callback__line"></div>
            <div class="callback__form">
              <?php echo do_shortcode('[contact-form-7 id="11" title="Форма в подвале"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal__bg"></div>
  <?php endif ?>
  <?php wp_footer(); ?>
</body>
</html>