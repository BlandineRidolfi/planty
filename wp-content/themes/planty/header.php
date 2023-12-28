<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">

<header id="header" role="banner">

    <div id="branding">

     <!--LOGO-->
 
        <a href="http://localhost/" class="link-logo" title="Accueil du site Planty">
            <img id="logo" src="/wp-content/uploads/2023/12/Logo-2.svg" alt="logo du site Planty" />
        </a>
        
        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

            <?php
                if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
            ?>
        </div>
    </div>

    <div class="nav-bar">

        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        </nav>

        <?php if (is_user_logged_in() && current_user_can('administrator')) : ?>
    <a href="<?php echo admin_url(); ?>" class="admin-link">Admin</a>
<?php endif; ?>


    <!--BOUTON NAVIGATION-->
    
        <a href="http://localhost/commander/" class="link-button">
            <button id="nav-button" type="button">Commander</button>
        </a>
    
    </div>
</header>


<div id="container">
<main id="content" role="main">