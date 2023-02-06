<?php
/*Registrera meny */
add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => 'top menu'
    ));
}

/*Aktivera stöd för dymanisk headerbild */
/*$args = array(
    'width' => 1920,
    'height' => 589,
    'default-image' => get_template_directory_uri() . 'images/header.jpg',
    'uploads' => true
);


add_theme_support('custom-header', $args);
add_theme_support('post-thumbnails');

Jag valde att inaktivera detta då jag har två olika headers beroende på 
skärmstorlek. Hade jag vetat att det var svårt att lösa hade jag
gjort min design annorlunda.*/


/*Storlekar för thumbnails*/
add_theme_support( 'post-thumbnails' );  
set_post_thumbnail_size( 381, 238, true);

/*Aktiverar javascript*/
function wpb_hook_javascript()
{
?>
    <script>
        function myFunction() {
            var x = document.getElementById("links-mobile");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
<?php
}
add_action('wp_head', 'wpb_hook_javascript');

/*Aktivera widget-area*/
add_action('widgets_init', 'widget_init');

function widget_init() {
    register_sidebar(array(
        'name' => 'widget_ett',
        'id' => 'widget_ett',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
