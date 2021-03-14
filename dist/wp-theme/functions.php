<?php
add_theme_support( 'post-thumbnails' );

//SET CUSTOM EXCERPT LENGTH
// function custom_excerpt_length( $length ) {
//     return 20;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Register Custom Navigation Walker */
// function register_navwalker(){
// 	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );

// ACF OPTIONS PAGE
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page();	
// }
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page( array(
// 		'page_title'	=>	'Főoldal mezők',
// 		'menu_title'	=>	'Főoldal mezők',
// 		'menu-slug'		=>	'fooldal-mezok',
// 		'capability'	=> 	'edit_posts',
// 		'parent_slug'	=>	'',
// 		'position'		=> 	1,
// 		'icon_url'		=> 	false,
// 	));	
// }

//RENAME POSTS MENU
// Function to change "posts" to "news" in the admin side menu
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Termékek';
    $submenu['edit.php'][5][0] = 'Termékek';
    $submenu['edit.php'][10][0] = 'Termék hozzáadása';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Termékek';
    $labels->singular_name = 'Termék';
    $labels->add_new = 'Termék hozzáadása';
    $labels->add_new_item = 'Termék hozzáadása';
    $labels->edit_item = 'Termék szerkesztése';
    $labels->new_item = 'Termék';
    $labels->view_item = 'Termék megtekintése';
    $labels->search_items = 'Keresés a termékek közt';
    $labels->not_found = 'Nem található termék';
    $labels->not_found_in_trash = 'Nincs termék a Lomtárban';
}
add_action( 'init', 'change_post_object_label' );

// REGISTER MENU AREAS
function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu', 'szigetszerelveny' ));
}
add_action( 'init', 'register_header_menu' );
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu', 'szigetszerelveny' ));
}
add_action( 'init', 'register_footer_menu' );

// BREADCRUMBS
function get_breadcrumb() {
	echo '<a href="' . home_url() . '" rel="nofollow>Home</a>';
	if (is_category() || is_single()){
		echo '  »  ';
		the_category (' • ');
			if (is_single()) {
				echo '  »  ';
				the_title();
			}
} elseif (is_page()) {
		echo '  »  ';
		echo the_title();
	} elseif (is_search()) {
		echo '  »  ';
		echo '<em>';
		echo the_search_query();
		echo '</em>';
	}
}