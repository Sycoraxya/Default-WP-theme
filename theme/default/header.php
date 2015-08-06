<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>
        <?php wp_title( ' | ', true, 'right' ); ?>
    </title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/global.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/home.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/menu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/slider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/projects.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/responsive-menu.css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
    <script src="http://use.edgefonts.net/open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all;source-sans-pro:n4,n9,n7,i7,i4,n3,i3,n6,i6,i9,n2,i2:all.js"></script>
    <?php 
        $theme_options = get_option ( 'iasd_theme_theme_options' ); 
        $advanced_setup = get_option ( 'iasd_theme_advanced_setup' );
        include 'iasd-menu-styles.php';
        include 'iasd-theme-styles.php';
    ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="mobile-menu"><span class="icon-menu"></span></div><!-- end mobile menu -->
            <section id="branding">
                <div id="branding-wrapper">
                    <a href="<?php echo site_url(); ?>/">
                        <div id="site-title">
                            <img src="<?php 
                            if($theme_options['logo_upload']){
                                echo $theme_options['logo_upload'];           
                            }else{
                                echo (bloginfo('template_directory').'/images/logo.png'); 
                            }
                            ?>" class="logo" />
                        </div>
                    </a>
                    
            
                    <div id="info">
                        <a href="<?php echo site_url(); ?>/contact"><span class="icon-doc-text info-block info-block-btn btn"><b>Lid worden</b>
                            </span></a>
                    </div>
                    <nav id="menu" role="navigation">
                        <div id="search" class="icon-search">
                            <?php get_search_form(); ?>
                        </div>
                        <div id="menu-wrapper">
                            <?php wp_nav_menu( array( 'theme_location'=> 'main-menu' ) ); ?>
                        </div>
                    </nav>
                </div>
            </section>
        </header>
        <div id="container">