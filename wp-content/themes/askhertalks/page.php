<?php get_header(); ?>

    <div class="jumbotron">
      <div class="container">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header.png" class="img-responsive">

      </div>
    </div>


  <div class="container page-container">

    <div class="row">

      <div class="col-md-12 page-main-content">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>

    </div>

<?php get_footer(); ?>