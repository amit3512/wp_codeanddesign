<?php

function load_stylesheets()

{ 

   

    wp_register_style('font1',get_template_directory_uri().'/css/dc.css',array(),false,'all');
    wp_enqueue_style('font1');

    wp_register_style('font',get_template_directory_uri().'/css/font-awesome.min.css',array(),false,'all');
    wp_enqueue_style('font');

	wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
    wp_enqueue_style('bootstrap');

	wp_register_style('theme',get_template_directory_uri().'/css/bootstrap-theme.min.css',array(),false,'all');
    wp_enqueue_style('theme');

	wp_register_style('menu',get_template_directory_uri().'/css/main-menu-styles.css',array(),false,'');
    wp_enqueue_style('menu');

    wp_register_style('slide',get_template_directory_uri().'/css/owl.carousel.min.css',array(),false,'all');
    wp_enqueue_style('slide');

	wp_register_style('carousel',get_template_directory_uri().'/css/owl.theme.default.min.css',array(),false,'all');
    wp_enqueue_style('carousel');

    wp_register_style('box','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css',array('jquery'),false,'all');
    wp_enqueue_style('box');

    wp_register_style('animate',get_template_directory_uri().'/css/animate.css',array(),false,'all');
    wp_enqueue_style('animate');

	wp_register_style('style',get_template_directory_uri().'/css/style.css',array(),false,'all');
	wp_enqueue_style('style');


}

add_action('wp_enqueue_scripts','load_stylesheets');



function loadjs()

{   
    wp_register_script('customjs1',get_template_directory_uri().'/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs1');

    wp_register_script('customjs2',get_template_directory_uri().'/js/vendor/jquery-1.11.2.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs2');

    wp_register_script('customjs3',get_template_directory_uri().'/js/vendor/bootstrap.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs3');
    wp_register_script('customjs4',get_template_directory_uri().'/js/main-menu.js',array('jquery'),1,true);
    wp_enqueue_script('customjs4');
    wp_register_script('customjs5',get_template_directory_uri().'/js/wow.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs5');
    wp_register_script('customjs6','https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-.minjs',array('jquery'),1,true);
    wp_enqueue_script('customjs6');
    wp_register_script('customjs7',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs7');
    wp_register_script('customjs8','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs8');
    wp_register_script('customjs9','https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs9');
    wp_register_script('customjs10','http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js',array('jquery'),1,true);
    wp_enqueue_script('customjs10');

    wp_register_script('customjs11',get_template_directory_uri().'/js/jquery.carouFredSel-6.1.0-packed.js',array('jquery'),1,true);
    wp_enqueue_script('customjs11');
    wp_register_script('customjs12',get_template_directory_uri().'/js/main.js',array('jquery'),1,true);
    wp_enqueue_script('customjs12');

    wp_register_script('customjs13',get_template_directory_uri().'/js/app.js',array('jquery'),1,true);
    wp_enqueue_script('customjs13');
   
	wp_register_script('customjs14',get_template_directory_uri().'/js/scripts.js',array('jquery'),1,true);
	wp_enqueue_script('customjs14');

    wp_register_script('customjs15',get_template_directory_uri().'/js/dc.js',array('jquery'),1,true);
    wp_enqueue_script('customjs15');

}

add_action('wp_enqueue_scripts','loadjs');




function wpb_custom_new_menu() 
{
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


// Add featured image support
function featured_image()
{
	register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail',180,120,true);
add_image_size('banner-thumbnail',920,210,true);
}
add_action('after_setup_theme', 'featured_image');
//stop



//widget
function widgets(){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar1', 
	));

	register_sidebar(array(
		'name' => 'Footer Area 1',
		'id' => 'footer1', 
	));
}
add_action('widgets_init','widgets');
//stop


//custom_page
function abroadstudy() {

// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'Abroad Study', 'Post Type General Name' ),
    'singular_name'       => _x( 'Abroad Study', 'Post Type Singular Name' ),
    'menu_name'           => __( 'Abroad Study' ),
    'parent_item_colon'   => __( 'Parent Abroad Study' ),
    'all_items'           => __( 'All Abroad Study' ),
    'view_item'           => __( 'View Abroad Study' ),
    'add_new_item'        => __( 'Add New Abroad Study' ),
    'add_new'             => __( 'Add New' ),
    'edit_item'           => __( 'Edit Abroad Study' ),
    'update_item'         => __( 'Update Abroad Study' ),
    'search_items'        => __( 'Search Abroad Study' ),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
);

$args = array(
    'label'               => __( 'abroad study' ),
    'description'         => __( 'Abroad Study List'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'author', 'revisions', 'author', 'thumbnail', 'body','excerpt', 'revisions', 'page-attributes'),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'menu_icon'           => 'dashicons-businessman',
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
);

// Registering your Custom Post Type
register_post_type( 'abroad study', $args );
}
add_action( 'init', 'abroadstudy', 0 );



function blogpost() {

// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'Blog Post', 'Post Type General Name' ),
    'singular_name'       => _x( 'Blog Post', 'Post Type Singular Name' ),
    'menu_name'           => __( 'Blog Post' ),
    'parent_item_colon'   => __( 'Parent Blog Post' ),
    'all_items'           => __( 'All Blog Post' ),
    'view_item'           => __( 'View Blog Post' ),
    'add_new_item'        => __( 'Add New Blog Post' ),
    'add_new'             => __( 'Add New' ),
    'edit_item'           => __( 'Edit Blog Post' ),
    'update_item'         => __( 'Update Blog Post' ),
    'search_items'        => __( 'Search Blog Post' ),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
);

$args = array(
    'label'               => __( 'blog post' ),
    'description'         => __( 'Blog Post List'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'author', 'revisions', 'author', 'thumbnail', 'body','excerpt', 'revisions', 'page-attributes'),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'menu_icon'           => 'dashicons-businessman',
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
);

// Registering your Custom Post Type
register_post_type( 'blog post', $args );
}
add_action( 'init', 'blogpost', 0 );
//stop


//stop




//stop

function newsandevents() {

// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'News and Events', 'Post Type General Name' ),
    'singular_name'       => _x( 'News and Event', 'Post Type Singular Name' ),
    'menu_name'           => __( 'News and Events' ),
    'parent_item_colon'   => __( 'Parent News and Events' ),
    'all_items'           => __( 'All News and Events' ),
    'view_item'           => __( 'View News and Events' ),
    'add_new_item'        => __( 'Add New News and Events' ),
    'add_new'             => __( 'Add New' ),
    'edit_item'           => __( 'Edit News and Events' ),
    'update_item'         => __( 'Update News and Events' ),
    'search_items'        => __( 'Search News and Events' ),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
);

$args = array(
    'label'               => __( 'news and events' ),
    'description'         => __( 'News and Events List'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'author', 'revisions', 'author', 'thumbnail', 'body','excerpt', 'revisions', 'page-attributes'),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'menu_icon'           => 'dashicons-businessman',
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
);

// Registering your Custom Post Type
register_post_type( 'News and Events', $args );
}
add_action( 'init', 'newsandevents', 0 );
//stop


function testimonial() {

// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'Testimonials', 'Post Type General Name' ),
    'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name' ),
    'menu_name'           => __( 'Testimonials' ),
    'parent_item_colon'   => __( 'Parent Testimonials' ),
    'all_items'           => __( 'All Testimonials' ),
    'view_item'           => __( 'View Testimonials' ),
    'add_new_item'        => __( 'Add New Testimonials' ),
    'add_new'             => __( 'Add New' ),
    'edit_item'           => __( 'Edit Testimonials' ),
    'update_item'         => __( 'Update Testimonials' ),
    'search_items'        => __( 'Search Testimonials' ),
    'not_found'           => __( 'Not Found' ),
    'not_found_in_trash'  => __( 'Not found in Trash' ),
);

$args = array(
    'label'               => __( 'testimonials' ),
    'description'         => __( 'Testimonials List'),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'author', 'revisions', 'author', 'thumbnail', 'body','excerpt', 'revisions', 'page-attributes'),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'menu_icon'           => 'dashicons-businessman',
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
);

// Registering your Custom Post Type
register_post_type( 'Testimonials', $args );
}
add_action( 'init', 'testimonial', 0 );
//stop


function order_posts_by_title( $query ) { 

   if ( $query-is_home() && $query-is_main_query() ) { 

     $query-set( 'orderby', 'title' ); 

     $query-set( 'order', 'ASC' ); 

   } 

} 

add_action( 'pre_get_posts', 'order_posts_by_title' );








?>

 