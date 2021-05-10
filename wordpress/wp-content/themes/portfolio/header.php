<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <?php wp_head();?>
</head>

<body <?php body_class();?>>


  <header class="header">
    <div class="container-sm">

      <img src="<?php the_field('logo');?>" alt="logo" class="header__logo">

      <button class="nav-btn">
        <span class="header__icon"></span>  
      </button>

      <input type="checkbox" class="header__checkbox" id="header-toggle">

      <label for="header-toggle" class="header__button"></label>

      <div class="header__background"></div>

      <div class="header__nav">
        <p class="header__menu-label">Menu</p>
        <?php 
      
        wp_nav_menu(

          array(

            'theme_location' => 'top-menu',

          ) 

        );
      
      ?>
      </div>
    </div>



  </header>
