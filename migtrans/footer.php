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
                        <div class="footer__item__title">Наши контакты</div>
                        <div class="footer__item__text footer__item__text__phone">+(374) 99 666 179 <br> +(374) 93 179 666</div>
                        <div class="footer__item__text footer__item__text__wpviber">+(374) 99 666 179</div>
                        <div class="footer__item__text footer__item__text__mail">migtrans.transportation@mail.ru</div>
                    
                    </div>
                    
                    <div class="footer__item">
                        <div class="footer__item__title">Наш адресс</div>
                        <div class="footer__item__text footer__item__text__location">РА, г.Ереван, ул. Ленинградян 4/4</div>
                    </div>
                    
                </div>
            </div>
        </footer>     
     </div>
        

        
		<?php wp_footer(); ?>
    </body>
</html>
