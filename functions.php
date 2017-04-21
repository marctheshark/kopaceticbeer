<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
/**----------------------------------------------------Load All scripts and styles------------------------------------------*/
function themify_custom_enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/styles/slick/slick.css');

    wp_enqueue_style( 'slicktheme', get_stylesheet_directory_uri() . '/styles/slick-modified.css');

    wp_enqueue_style( 'menu', get_stylesheet_directory_uri() . '/styles/menu.css');

    wp_enqueue_script( 'buttons-control',get_stylesheet_directory_uri() . '/scripts/buttoncontrols.js', array(jquery), '', true); 

    wp_enqueue_script( 'slickslider', get_stylesheet_directory_uri() . '/styles/slick/slick.js', array(jquery), '', true );

    wp_enqueue_script( 'carousel', get_stylesheet_directory_uri() . '/scripts/mycarousel.js', array(slickslider),'', true ); 

        /**wp_enqueue_style( 'footers',
        get_stylesheet_directory_uri() . '/footer-bar.css',
        array( 'parent-theme-css' )
    );*/

    wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles', 11 );
remove_filter( 'themify_theme_config_setup', array( $GLOBALS['themify_hooks'], 'config_setup' ), 12 );
 
/**-----------------------------------------------------------Load Custom Functions--------------------------------------------*/
/**-----------------------------------------------------------Load and Setup The Slider--------------------------------------------*/

function wpb_lastupdated_posts() {
// Query Arguments
$lastupdated_args = array(
    'posts_per_page'   => 5,
    'offset'           => 0,
    'category_name'         => 'events, news',
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'suppress_filters' => true 
);

//Loop to display 5 recently updated posts
    $lastupdated_loop = new WP_Query( $lastupdated_args );
    $counter = 1;
    $string .= '<div class="featured-carousel">';
    while( $lastupdated_loop->have_posts() && $counter < 6 ) : $lastupdated_loop->the_post();

    $string .= '<div class="carousel-slide"> <img class="featured-image" href="' . get_the_post_thumbnail($lastupdated_loop->post->ID) . '"> <div class="title-div"> </div><a class="featured-link" href="' . get_permalink( $lastupdated_loop->post->ID ) . ' "> ' .get_the_title( $lastupdated_loop->post->ID ) . '</a> <a href="'. get_permalink( $lastupdated_loop->post->ID ) .'" ><button class="featured-button">Learn More</button></a> </div>';

    $counter++;
    endwhile;
    $string .= '</div>';
    return $string;
    wp_reset_postdata();
}
 
//add a shortcode
add_shortcode('lastupdated-posts', 'wpb_lastupdated_posts');
?>