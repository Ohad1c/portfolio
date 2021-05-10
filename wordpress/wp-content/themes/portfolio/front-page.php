
<!-- Showcase section -->
<section class="showcase" style="background-image: url(<?php echo the_field('showcase_image');?>);">
  <?php get_header();?>
  <h1 class="showcase__title"><?php the_field('page_title');?></h1>
  <p class="showcase__subtitle"><?php the_field('page_subtitle');?></p>
</section>

<!-- Process section -->
<section class="process">
  <div class="card">
    <div class="card__icon">
      <?php the_field('card-1_icon');?>
    </div>
    <div class="card__title">
      <?php the_field('card-1_title');?>
    </div>
    <div class="card__description">
      <?php the_field('card-1_description');?>
    </div>
  </div>

  <div class="card">
    <div class="card__icon">
      <?php the_field('card-2_icon');?>
    </div>
    <div class="card__title">
      <?php the_field('card-2_title');?>
    </div>
    <div class="card__description">
      <?php the_field('card-2_description');?>
    </div>
  </div>

  <div class="card">
    <div class="card__icon">
      <?php the_field('card-3_icon');?>
    </div>
    <div class="card__title">
      <?php the_field('card-3_title');?>
    </div>
    <div class="card__description">
      <?php the_field('card-3_description');?>
    </div>
  </div>
</section>

<!-- Services section -->
<section class="services">
  <h2 class="heading-secondary">
    <span class="heading-secondary--main"><?php the_field('services_title');?></span>
    <span class="heading-secondary--sub"><?php the_field('services_subtitle');?></span>
  </h2>
  <div class="container-sm">
    <div class="cards">
      <div class="card">
        <div class="card__icon">
          <?php the_field('service-1_icon');?>
        </div>
        <div class="card__textbox">
          <div class="card__title">
            <?php the_field('service-1_title');?>
          </div>
          <div class="card__description">
            <?php the_field('service-1_description');?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card__icon">
          <?php the_field('service-2_icon');?>
        </div>
        <div class="card__textbox">
          <div class="card__title">
            <?php the_field('service-2_title');?>
          </div>
          <div class="card__description">
            <?php the_field('service-2_description');?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card__icon">
          <?php the_field('service-3_icon');?>
        </div>
        <div class="card__textbox">
          <div class="card__title">
            <?php the_field('service-3_title');?>
          </div>
          <div class="card__description">
            <?php the_field('service-3_description');?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card__icon">
          <?php the_field('service-4_icon');?>
        </div>
        <div class="card__textbox">
          <div class="card__title">
            <?php the_field('service-4_title');?>
          </div>
          <div class="card__description">
            <?php the_field('service-4_description');?>
          </div>
        </div>
      </div>
    </div>

    <div class="services__shapes">
      <div class="services-picture-box" style="background-image: url(<?php echo the_field('services_picture');?>);">
      </div>
      <div class="blue-rectangle"></div>
    </div>

  </div>
</section>



<!-- Portfolio section -->
<section class="portfolio">
  <h2 class="heading-secondary">
    <span class="heading-secondary--main">portfolio</span>
    <span class="heading-secondary--sub">If you do it right, it will last forever.</span>
  </h2>

  <div class="container">
    <?php
      $args = array(
        'post_type' => 'projects',
        'posts_per_page' => 3
      );
    
      $the_query = new WP_Query($args);
    ?>

    <?php if($the_query->have_posts() ): while ($the_query->have_posts() ) : $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="project__link">
      <div class="card">
        <div class="card__image-box" style="background-image: url(<?php echo the_field('project_image');?>);">
        </div>
        <div class="card__title">
          <?php the_field('project_title');?>
        </div>
        <div class="card__description">
          <?php the_field('project_description');?>
        </div>
      </div>
    </a>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata() ?>
  </div>

  <div class="portfolio__button-box">
    <a href="./projects" class="portfolio__button"><?php the_field('portfolio_button');?></a>
  </div>
</section>


<!-- About section -->
<section class="about">
  <h2 class="heading-secondary">
    <span class="heading-secondary--main"><?php the_field('about_title');?></span>
    <span class="heading-secondary--sub"><?php the_field('about_subtitle');?></span>
  </h2>

  <div class="container-sm">
    <div class="about__picture-box">
      <div class="about__white-rectangle"></div>
      <div class="about__green-rectangle"></div>
      <div class="about__image-box" style="background-image: url(<?php echo the_field('about_image');?>);"></div>
    </div>
    <div class="about__text-box">
      <p><?php the_field('about_first_paragraph');?></p>
      <p><?php the_field('about_second_paragraph');?></p>
    </div>
  </div>
</section>

<!-- About section -->
<section class="contact">
  <h2 class="heading-secondary">
    <span class="heading-secondary--main"><?php the_field('contact_title');?></span>
    <span class="heading-secondary--sub"><?php the_field('contact_subtitle');?></span>
  </h2>
  <div class="container">
    <div class="contact__text-box">
      <p>Feel free to drop us a line at:</p>
      <p>leonagency@mail.com</p>
      <p>Find us on social networks:</p>
    </div>
  </div>

</section>





<?php get_footer();?>
