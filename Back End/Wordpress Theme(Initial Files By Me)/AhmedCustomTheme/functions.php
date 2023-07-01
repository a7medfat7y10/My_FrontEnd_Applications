<?php 
//Function to Add my own styles
function ahmed_add_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/ccs/font-awesome.min.css');
    wp_enqueue_style('normalize-css', get_template_directory_uri() . '/css/normalize.css');
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
