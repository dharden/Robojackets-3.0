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
                <ul class="nav">
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
                </ul>
                <form class="navbar-search pull-right">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
              </div>
            </div>
          </div>
        </nav> <!-- /sitenav -->

      </header> <!-- /siteheader -->

      <!-- Carousel for featured news items -->
      <section id="carousel" class="carousel slide" style="border: 1px solid #ccc;">
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo THEME_IMAGES; ?>/2010FTCBanner.jpg" alt="">
            <div class="carousel-caption">
              <h4>First Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo THEME_IMAGES; ?>/2010FTCBanner.jpg" alt="">
            <div class="carousel-caption">
              <h4>Second Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo THEME_IMAGES; ?>/2010FTCBanner.jpg" alt="">
            <div class="carousel-caption">
              <h4>Third Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#carousel" data-slide="next">&rsaquo;</a>
      </section> <!-- /carousel -->


      <!-- Main content (posts, info, etc) -->
      <section id="content" class="row">

      <?php get_sidebar(clubinfo); ?>

        <!-- News items -->
        <section id="posts" class="span7">

          <article class="post">
            <header class="row">
              <div class="span1" style="margin: 0 -20px 0 20px;">
                <img src="<?php echo THEME_IMAGES; ?>/BB_48x48.png" alt="FIRST" />
              </div>
              <div class="span6">
                <h3><a href="#">2012 BattleBots Competition</a></h3>
                <p>March 27th, 2012 2:33 am | By Joseph Hickey</p>
              </div>
            </header>
            <p>The 2012 RoboGames will be held April 19-22, 2011 in San Mateo, California. More info can be found at <a href="www.robogames.net">www.robogames.net</a>.</p>
            <p>We will be traveling on April 18 and 22.</p>
            <p><i class="icon-tag"></i> <a href="#">BattleBots</a>, <a href="#">Events</a></p>
          </article>
          <hr />

        <?php include("posts.php"); ?>

        </section> <!-- /posts -->

        <!-- Media items (photo gallery, social media, etc.) -->
        <?php get_sidebar(media); ?>
        
      </section> <!-- /content -->

      <hr>
<?php get_footer(); ?>
