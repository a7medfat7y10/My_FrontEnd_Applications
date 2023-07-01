<?php 

//to add boostrap classes into navigation bar
include_once ('wp-bootstrap-navwalker.php');

//Function to Add my own styles
function ahmed_add_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
}

//Function to Add my own styles
//the last paraneter is the footer and true means to put the script before closing body tag
//the third and forth parameter are the default
//the array parameter put the dependences as bootstrap based on jquery and jquery is regisered in wordpress
function ahmed_add_scripts() {
    //un register the old jquery
    wp_deregister_script('jquery');
    //register new jquery to add it to the before body close
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    //enqueue the new jquery
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true );


    wp_enqueue_script('html5shiv-js', get_template_directory_uri() . '/js/html5shiv.min.js', array(), false, true );
    wp_script_add_data('html5shiv-js', 'conditional', 'lt IE 9');

    wp_enqueue_script('respond-js', get_template_directory_uri() . '/js/respond.min.js', array(), false, true );
    wp_script_add_data('respond-js', 'conditional', 'lt IE 9');
}
//add actions and hook the styles and scripts
add_action('wp_enqueue_scripts', 'ahmed_add_styles');
add_action('wp_enqueue_scripts', 'ahmed_add_scripts');





//add custom menu
function add_custom_menu() {
    // register_nav_menu('bootstrap-menu', __('Navigation Bar'));
    register_nav_menus(array(
        'bootstrap-menu' => 'Navigation Bar',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action('init', 'add_custom_menu');
//add bootstrap navbar
function add_bootstrap_menu() {
    wp_nav_menu(array(
        'theme_location' => 'bootstrap-menu',
        'menu_class' => 'nav navbar-nav navbar-right',
        'container' => false, //to delete the deiv containing the ul
        'depth' => 2,
        'walker' => new wp_bootstrap_navwalker() //to add the bootstrap classes to the navbar 
    ));
}




//Add feateured image to our theme
add_theme_support( 'post-thumbnails' );



//customize the excerpt(read more)
function extend_excerpt_length() {
    if(is_author() ) { //check if in the author page
        return 40;
    } else {
        return 80;
    }
}
add_filter('excerpt_length', 'extend_excerpt_length');
function customize_excerpt_more() {
    return '...';    
}
add_filter('excerpt_more', 'customize_excerpt_more');




//numbered pagination
function numbering_pagination () {
    global $wp_query;
    $all_pages = $wp_query->max_num_pages; //get all posts pages
    $current_page = max(1, get_query_var('paged')); //get the currebt page
    if($all_pages > 1) { // check if total pages > 1
        return paginate_links(array(
            'base' => get_pagenum_link() . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'pages' => $all_pages
        ));
    }
}


//add sidebar feature
function add_main_sidebar() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'description' => 'Main Sidebar of our site',
        'class' => 'main-sidebar',
        'before_widget' => '<div class="widget-content">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'add_main_sidebar');