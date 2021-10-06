<?php get_header(); ?>

      <div class="container single">
        <div class='row'>

              <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="col-md-8 conteudo-single">
            <h1><?php the_title(); ?><h1>
            <h2><?php the_content(); ?><h2>
            
          </div>
              <?php endwhile; else: ?>
              <?php endif?>

 <?php get_sidebar(); ?>
 
        </div>
      </div>
             
<?php get_footer(); ?>


