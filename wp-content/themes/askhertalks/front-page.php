<?php get_header(); ?>

    <div class="jumbotron">
      <div class="container">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header.png" class="img-responsive">

      </div>
    </div>

    <div class="container main-content">

      <div class="row" id="front-page-dates">
        <div class="col-sm-4 city-widget">
          <div class="city-widget-inner">
            <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
          </div>
        </div>
        <div class="col-sm-4 city-widget">
          <div class="city-widget-inner">
            <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
          </div>
       </div>
        <div class="col-sm-4 city-widget">
          <div class="city-widget-inner">
            <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
          </div>
        </div>
      </div>

      <div class="container" id="intro-container">
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php endwhile; endif; ?>
        </div>
      </div>
    
<?php get_footer(); ?>