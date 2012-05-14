<?php get_header(); ?>

        <nav id="sitenav" class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="nav-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'navigation', 'container' => false ) ); ?>

                <?php get_search_form( $echo ); ?>
              </div>
            </div>
          </div>
        </nav> <!-- /sitenav -->

      </header> <!-- /siteheader -->
      <!-- Carousel for featured news items -->

        <?php if ( is_front_page() ) { include("carousel.php"); } ?>

      <!-- Main content (posts, info, etc) -->
      <section id="content" class="row">

      <!-- Info about joining the club -->
      <?php get_sidebar(clubinfo); ?>

        <!-- News items -->
        <section id="posts" class="span7">

        <?php include("posts.php"); ?>

        </section> <!-- /posts -->

        <!-- Media items (photo gallery, social media, etc.) -->
        <?php get_sidebar(media); ?>
        
      </section> <!-- /content -->

      <hr>
<?php get_footer(); ?>
