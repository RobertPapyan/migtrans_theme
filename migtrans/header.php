<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Migtrans
 */

?>
	<!DOCTYPE html>
<html>
    <head>
        <title>Migtrans</title>
        
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <?php wp_head();?>
    </head>
    <body>
      <div class="wrapper">
        <header class="header">
                  <div class="container">
                        <div class="header__body">
                           
                                <?php
                                    if(function_exists('the_custom_logo')){
                                        the_custom_logo();
                                    }
                                ?>
                            
                        <div class="free__space"></div>
                        <div class="header__burger">
                            <span></span>
                        </div>
                        <nav class="header__menu">
                            <div class="header__list">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class' => 'header__list1',
                                ));?>
                                
                                <ul class="header__list2">
                                    <li>
                                        <a href="<?php echo get_home_url();?>/contact-us" class="header__link contact_us_link ">контакты <i class="icon-chevrone_right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            

                            
                        </nav>
                    
                    </div>
                  </div>
        </header>
 