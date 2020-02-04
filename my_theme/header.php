<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<title></title>

	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Scope Student Services</title>

    <?php wp_head();?>
</head>
	
<body>

	 <header class="main_header">
    <!-- TOP BAR HTML OPEN -->
    <section class="topbar_wrap">
      <div class="container-fluid">
        <div class="topbar_content">
          <div class="left_top_content">
            <ul>
              <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Regd No:38542/062/063</li>
              <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i>4241699 / 4242616 / 4246110</a></li>
              <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> info@scopeservices.com</a></li>
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="right_top_social_content">
            <select name="" id="">
              <option value="">Nepal</option>
              <option value="">Australia</option>
              <option value="">UK</option>
            </select>
          </div>
        </div>
      </div>
    </section>
    <!-- TOP BAR HTML CLOSE -->
    <div class="clearfix"></div>
    <!-- LOGO & MENU BAR HTML OPEN -->
    <div class="top_header logo_navigation">
      <div class="container-fluid">
        <div class="navigation_bar">
            <aside class="logo">
                <h1>
                  <a href="index.html">
                    <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="">
                  </a>
                </h1>
            </aside>
            <nav>
              
                
                    
                    <?php
                        wp_nav_menu( array( 
         'menu'            => 'primary-menu',
         'container'       => 'div',
        'container_class' => 'clear-fix',
        'container_id'    => 'cssmenu',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => 'primary-menu' 
                            ) ); 
                    ?>
                             	
                   
              
            </nav>
        </div>
      </div>
    </div>
    <!-- LOGO & MENU BAR HTML CLOSE -->
  </header>
<!-- MAIN HEADER HTML CLOSE -->
<div class="clearifx"></div>
<!-- MAIN BANNER SLIDER HTML OPEN -->
<section class="banner_slider">
    <?php
echo do_shortcode('[smartslider3 slider=2]');
?>
</section>
<!-- MAIN BANNER SLIDER HTML CLOSE -->


