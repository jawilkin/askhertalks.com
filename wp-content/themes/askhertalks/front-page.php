<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header.png" class="img-responsive">

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row" id="front-page-dates">
        <div class="col-md-4">
        
          <?php if ( dynamic_sidebar( 'front-left' ) ); ?>

        </div>
        <div class="col-md-4">

          <?php if ( dynamic_sidebar( 'front-center' ) ); ?>

       </div>
        <div class="col-md-4">

          <?php if ( dynamic_sidebar( 'front-right' ) ); ?>

        </div>
      </div>

      <div class="container">
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; endif; ?>
        </div>
      </div>
    
<?php get_footer(); ?>