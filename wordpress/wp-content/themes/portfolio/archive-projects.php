<?php
/*
Template Name: Archives
*/

get_header(); ?>

<section class="portfolio">
  <h2 class="heading-secondary">
    <span class="heading-secondary--main">portfolio</span>
    <span class="heading-secondary--sub">If you do it right, it will last forever.</span>
  </h2>

  <div class="container">
    <?php
      $args = array(
        'post_type' => 'projects'
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
  </div>

</section>




?>
