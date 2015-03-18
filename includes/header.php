
<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top navbar-upper">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-upper">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php /* <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> */ ?>
    </div>
    <div class="collapse navbar-collapse" id="navbar-upper">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-upper-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <?php get_template_part('includes/navbar-search'); ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-upper-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>

<div class="container">
    <nav class="navbar navbar-default navbar-static navbar-lower" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-lower">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php /* <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> */ ?>
      </div><!-- /.navbar-header -->
      <div class="collapse navbar-collapse" id="navbar-lower">    
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-lower-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?><?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-lower-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      </div><!-- /.navbar-collapse -->
    </nav>
</div>
