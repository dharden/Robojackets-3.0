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

<!--                <ul class="nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#contact">Sponsors</a></li>
                  <li class="dropdown" id="teams">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#teams">
                      Teams <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">FIRST</a></li>
                      <li><a href="#">IGVC</a></li>
                      <li><a href="#">BattleBots</a></li>
                      <li><a href="#">RoboCup</a></li>
                    </ul>
                  </li>
                  <li class="dropdown" id="projects">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#projects">
                      Projects <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Downhill Car</a></li>
                      <li><a href="#">IK Arm</a></li>
                      <li><a href="#">Hexapod</a></li>
                    </ul>
                  </li>
                  <li><a href="#contact">Get Involved!</a></li>
                  <li><a href="#contact">Outreach</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                  <li class="dropdown" id="resources">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#resources">
                      Resources <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Downhill Car</a></li>
                      <li><a href="#">IK Arm</a></li>
                      <li><a href="#">Hexapod</a></li>
                    </ul>
                  </li>
                </ul> -->
                <form class="navbar-search pull-right">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
              </div>
            </div>
          </div>
        </nav> <!-- /sitenav -->

      </header> <!-- /siteheader -->
      <!-- Carousel for featured news items -->

        <?php if ( is_front_page() ) { include("carousel.php"); } ?>

      <!-- Main content (posts, info, etc) -->
      <section id="content" class="row">

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
