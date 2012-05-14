
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <!-- styles -->
    <link href="<?php echo THEME_CSS; ?>/style.css" rel="stylesheet">
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <!-- fav and touch icons -->
      <link rel="shortcut icon" href="img/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo THEME_IMAGES; ?>/Buzz_114x114">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo THEME_IMAGES; ?>/Buzz_72x72">
      <link rel="apple-touch-icon-precomposed" href="<?php echo THEME_IMAGES; ?>/Buzz_57x57">
      <?php wp_head(); ?>
  </head>

  <body>

    <div class="container">

      <!-- Main site header (RJ banner) -->
      <header id="siteheader" class="row">
        
        <div class="span12" style="text-align: center;">
          <a href="<?php echo HOME_URI; ?>"><img src="<?php echo THEME_IMAGES; ?>/banner.png" alt="" /></a>
        </div>
 