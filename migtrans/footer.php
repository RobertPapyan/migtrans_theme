<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Migtrans
 */

?>

<footer class="footer">
            <div class="container">
                <div class="footer__grid">
                    <div class="footer__item">
					<?php
                                    if(function_exists('the_custom_logo')){
                                        the_custom_logo();
                                    }
                                ?>
                        <p class="footer__logotext">
                            <?php echo get_theme_mod('footertext')?>
                        </p>
                    </div>
                    <div class="footer__item">
                        <div class="footer__item__title"><?php echo get_theme_mod('footercontacttitle')?></div>
                        <div class="footer__item__text footer__item__text__phone"><?php echo get_theme_mod('footerphonenumber1')?> <br> <?php echo get_theme_mod('footerphonenumber2')?></div>
                        <div class="footer__item__text footer__item__text__wpviber"><?php echo get_theme_mod('footervibernumber')?></div>
                        <div class="footer__item__text footer__item__text__mail"><?php echo get_theme_mod('footermail')?></div>
                    
                    </div>
                    
                    <div class="footer__item">
                        <div class="footer__item__title"><?php echo get_theme_mod('footerlocationtitle')?></div>
                        <div class="footer__item__text footer__item__text__location"><?php echo get_theme_mod('footerlocationaddress')?></div>
                    </div>
                    
                </div>
            </div>
        </footer>     
     </div>
        

        
		<?php wp_footer(); ?>
    </body>
</html>
