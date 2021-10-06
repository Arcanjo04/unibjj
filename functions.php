<?php
	
	//IMAGEN DESTACADA
	add_theme_support( 'post-thumbnails' );


	//PEGAR ARQUIVO MARCA HEADER
	require get_template_directory().'/inc/marca.php';

		//PEGAR ARQUIVO metabox
	require get_template_directory().'/inc/metabox.php';

	// Registo Personalizado Navigation Walker 
    require_once ( 'inc/wp_bootstrap_navwalker.php' );

    register_nav_menus( array(
    'primary' => __( 'Menu principal', 'SiteBJJ' ),
						) );

    register_sidebar(array(
        'name' => __( 'Sidebar'),
        'id' => 'sidebar-internas',
        'description' => __( 'Elementos da sidebar single e page'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );    

 


?>