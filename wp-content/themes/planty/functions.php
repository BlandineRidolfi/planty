<?php
/** ACTIVATION DU THEME **/
    add_action('wp_enqueue_scripts', 'theme_enqueue_style');
    function theme_enqueue_style()
    {
        /** CHARGEMENT DU STYLE DU THEME PARENT **/
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        /** CHARGEMENT DU STYLE PERSONNALISE POUR LE THEME **/
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }

   // Fonction pour ajouter le lien admin à la liste des items de menu
   function add_admin_link_to_menu($items, $args) {
    if (is_user_logged_in() && current_user_can('administrator')) {
        $admin_link = '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-admin"><a href="' . admin_url() . '" class="admin-link">Admin</a></li>';
        $items .= $admin_link;
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

    
    
    
    
    
    
