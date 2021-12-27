<?php
require get_template_directory() . '\inc\wp_bootstrap_navwalker.php';
require get_template_directory() . '\inc\custom_fields.php';
require get_template_directory() . '\inc\options-framework\options-framework.php';
require get_template_directory() . '\inc\accesspress-options.php';
define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri(). '\inc\options-framework');
function add_theme(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'html5' );
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( 'cat', 100, 70 , true);
    add_image_size( 'cat_slider', 1600 , 652 );
}
add_action( 'after_setup_theme', 'add_theme' );
//add styles
function load_style() {
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
  
    wp_enqueue_style( 'bootstrap-rtl.min', get_template_directory_uri() . '/css/bootstrap-rtl.min.css' );
  
    wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/font-awesome.min.css');
  
  }
  
  add_action( 'wp_enqueue_scripts', 'load_style',);
//  for count post viwe
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 بازدید";
    }
    return $count.' بازدید';
    }
 function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
    }
    }
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// for register SIDEBAR
function sidebar_() {
    register_sidebar( array(
        'name'          => __( 'type sidebar'),
        'id'            => 'type_side',
        'description'   => __( 'type sidebar' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'sidebar_' );

// for PAGINATION 
function paginations(){
    global $wp_query;
 
    $big = 999999999;
 
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'prev_next' => TRUE,
        'prev_text' => ('قبلی'),
        'next_text' => ('بعدی'),
        'total' => $wp_query->max_num_pages
    ) );
}

// POST TYPE DOWNLOAD
function amozeshi_post_type() {

    $labels = array(
	    'name'			=> _x( 'مطالب آموزشی', 'Post type general name'),
		'singular_name'	=> _x( 'مطالب آموزشی', 'Post type singular name'),
		'menu_name'		=> __( ' مطالب درسی' ),
		'add_new'		=> __( 'افزودن' ),
		'add_new_item'	=> __( 'افزودن مطلب جدید' ),
		'new_item'		=> __( 'مطالب جدید' ),
		'all_items'		=> __( 'همه مطالب' )
	);
	
	$args = array(
	    'labels'		=> $labels,
		'label'			=> __( 'مطالب' ),
		'description'	=> __( 'مطالب آموزشی نوین' ),
        
        'supports'		=> array('title', 'editor', 'thumbnail', 'comment'),

        'taxonomies'  => array( 'amozesh_category' ),

        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
	);
	
    register_post_type( 'amozesh', $args );
}
add_action( 'init', 'amozeshi_post_type' );

// NAV 

function nav_bar(){
    register_nav_menus( array(
        'head_nav' => 'منو بالایی (head menu)',
    ) );
}
add_action( 'after_setup_theme', 'nav_bar');
