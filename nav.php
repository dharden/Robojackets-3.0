        <nav id="sitenav" class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="nav-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'navigation', 'container' => false, 'walker' => new Bootstrapifier(), 'items_wrap' => '<ul id="%1$s" class="%2$s nav">%3$s</ul>' ) ); ?>

                <?php get_search_form( $echo ); ?>
              </div>
            </div>
          </div>
        </nav> <!-- /sitenav -->