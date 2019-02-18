add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );
function child_theme_enqueue_scripts() 
{
    wp_enqueue_script( 'parent-theme-script', get_stylesheet_directory_uri() . '/js/script.js' );
}