<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<title><?php bloginfo( 'name'); ?></title>
<meta  charset="<?php bloginfo( 'charset'); ?>" />
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" type="text/css" media="screen"/> -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div id="container">
  <!-- <header class="site-header">
      <h1><?php bloginfo( 'name' ); ?></h1>
      <h4><?php bloginfo( 'description' ); ?></h4>
  </header> -->
  <div id="logo">
    <h1><a href="<?php echo get_home_url();?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h2 id="tagline"><?php bloginfo( 'description' ); ?></h2>
  </div>
  <div id="menu"> <a href="#" id="login">login</a> <a href="#" id="rss-entries">rss entries</a> <a href="#" id="rss-comments">rss comments</a> </div>
  <div class="clearing">&nbsp;</div>

  <?php wp_nav_menu(array( 
      'theme_location' => 'header-menu',
      'menu_id'        => 'nav'
      )); 
  ?>

 
  <div id="search">
    <form method="get" id="searchform" action="#">
      <div id="s-text">
        <input value="Search" name="s" id="s" type="text" />
        <label for="s">Search</label>
      </div>
      <div id="s-submit">
        <input id="searchsubmit" value="" type="submit" />
      </div>
    </form>
  </div>