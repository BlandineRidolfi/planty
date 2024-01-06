<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

            <!--TITRE SITE-->
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <?php
                if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
            ?>
            </div>
    </div>

    <!--Checkbox pour menu Hamburger en css sans JS -->
    <label for="ch" id="lab"></label>
    <input type="checkbox" id="ch" />
    
    <div class="nav-bar">
        
        <!-- Utilisation de la fonction wp_nav_menu pour générer le code HTML du menu de navigation dans WP-->
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        
            <!--Bouton commander version ordinateur-->
            <a href="http://localhost/commander/" class="link-button">
                <button id="nav-button" type="button">Commander</button>
            </a>

            <!--Lien commander version responsive-->
            <a href="http://localhost/commander/" class="link-command">Commander</a>
        </nav>
    </div>

</header>



<div id="container">
    <main id="content" role="main">

    </main>

    <?php get_sidebar(); ?>
</div>
