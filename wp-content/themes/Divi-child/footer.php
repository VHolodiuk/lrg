<?php

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif; ?>
<?php $front_page_id = get_option( 'page_on_front' ); ?>

			<footer id="main-footer">
			    <div class="container">
			        <div class="footer-logo-block">
			            <a href="<?=get_field('first_logo_link_footer',$front_page_id);?>" target="_blank"><img src="<?=get_field('first_logo_footer',$front_page_id)?>" /></a>
			            <a href="<?=get_field('second_logo_link_footer',$front_page_id);?>" target="_blank"><img src="<?=get_field('second_logo_footer',$front_page_id)?>" /></a>
			            <a href="<?=get_field('third_logo_link_footer',$front_page_id);?>" target="_blank"><img src="<?=get_field('third_logo_footer',$front_page_id)?>"/></a>
			        </div>
			    </div>
			    <div class="red-divider"></div>
			    <div class="footer-info-block">
			        <div class="container">
                        <div class="footer-menu-links-wrap">
                            <a class="text-link" href="#" id="open_popup"><?=get_field('popup_title_footer', $front_page_id)?></a>
                            <a class="text-link" href="<?=get_field('gift_card_page_footer', $front_page_id)?>"><?=get_field('gift_card_title_footer', $front_page_id)?></a>
                            <a class="text-link" href="<?=get_field('contact_page_footer', $front_page_id)?>"><?=get_field('contact_us_title_footer', $front_page_id)?></a>
                            <a class="text-link covid-popup" href="#" id="open_popup_covid">COVID-19</a>
                        </div>
                        <a href="<?=get_home_url();?>"><img class="footer-logo" src="<?=get_field('footer_logo_footer',$front_page_id)?>" /></a>
                        <div class="address-text"><?=get_field('address_line_footer',$front_page_id)?></div>
                        <div class="contact-info">
                            <a href="mailto:<?=get_field('email_footer',$front_page_id)?>">
                                <img src="<?=get_stylesheet_directory_uri().'/assets/img/message-footer.png'?>" alt="Email icon" />
                                <?=get_field('email_footer',$front_page_id)?>
                            </a>
                            <a href="tel:<?=str_replace(".", "", get_field('phone_footer',$front_page_id));?>">
                                <img src="<?=get_stylesheet_directory_uri().'/assets/img/phone-footer.png'?>" alt="Phone icon" />
                                <?=get_field('phone_footer',$front_page_id)?>
                            </a>
                        </div>
                        <div class="footer-copyright">
                             &copy <span id="dateYear"></span> <?=get_field('copyright_text_footer',$front_page_id)?>
                        </div>
			        </div>
			    </div>
                <div class="red-divider"></div>

			</footer> <!-- #main-footer -->

	</div> <!-- #page-container -->



            <div class="footer-contact-wrapper">
                <a href="mailto:<?=get_field('email_footer',$front_page_id)?>" class="footer-contact-item">
                    <img src="<?=get_stylesheet_directory_uri().'/assets/img/message-footer.svg'?>" alt="Email icon" />
                </a>

                <a href="tel:<?=str_replace(".", "", get_field('phone_footer',$front_page_id));?>" class="footer-contact-item">
                    <img src="<?=get_stylesheet_directory_uri().'/assets/img/phone-footer.svg'?>" alt="Phone icon" />
                </a>

                <a href="https://goo.gl/maps/nFNYfpjoRK7UDVux7" class="footer-contact-item">
                    <img src="<?=get_stylesheet_directory_uri().'/assets/img/location.svg'?>" alt="Location icon" />
                </a>
            </div>



	<?php wp_footer(); ?>
</body>
</html>
