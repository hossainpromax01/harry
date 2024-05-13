<?php 

// harry theme support 
function harry_theme_support(){

    /**  thumbnail */
    add_theme_support( 'post-thumbnails' );

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );


    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** Remove widget block editor support **/
    remove_theme_support( 'widgets-block-editor' );

    /** refresh widget **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    // post formats
    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));
    //menu register
	register_nav_menus( array(
	    'primary_menu' => __( 'Primary Menu', 'harry' ),
	    'off_canvas_menu'  => __( 'Off Canvas Menu', 'harry' ),
	    'footer_menu' => __( 'Footer Menu', 'harry' )
	) );
}

add_action('after_setup_theme','harry_theme_support');

/**
 * Footer widget register
 */
function harry_widget() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget 01', 'harry' ),
		'id'            => 'footer-widget-01',
		'description'   => __( 'Footer widget are 01', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 02', 'harry' ),
		'id'            => 'footer-widget-02',
		'description'   => __( 'Footer widget are 02', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 03', 'harry' ),
		'id'            => 'footer-widget-03',
		'description'   => __( 'Footer widget are 03', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 04', 'harry' ),
		'id'            => 'footer-widget-04',
		'description'   => __( 'Footer widget are 04', 'harry' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'harry' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Blog Sidebar', 'harry' ),
		'before_widget' => '<div id="%1$s" class="sidebar__widget mb-40 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'harry_widget' );

//harry theme script includes
include_once('inc/common/scripts.php');
include_once('inc/common/comments-form-list.php');
//harry theme kirkiri includes
if ( class_exists( 'Kirki' ) ) {
	include_once('inc/kirki-customizer.php');
}
//harry theme template-parts includes
include_once('inc/template-function.php');
//harry theme nav walker menu includes
include_once('inc/nav-walker.php');
//harry theme breadcrumb
include_once('inc/breadcrumb.php');
//harry latest post widget
include_once('inc/sidebar-rc-post-widget.php');




