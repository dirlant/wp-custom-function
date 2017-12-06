<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

/**
* Grab latest post title by an author!
*
* @param array $data Options for the function.
* @return string|null Post title for the latest,  * or null if none.
*/


include ('random-post.php'); //post random
include ('general-options.php'); //opciones generales de la pagina ACF
include ('option-menu.php'); //opciones del menu
include ('wp-bootstrap-navwalker.php'); //menu wordpress walker

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


add_action('init', 'custom_scripts'); // scripts
add_action('wp_enqueue_scripts', 'custom_styles'); // estilos css
add_action('login_enqueue_scripts', 'login_style', 10 ); // login

/*------------------------------------*\
	Cargando los scripts
\*------------------------------------*/
function custom_scripts()
{
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_register_script('conditionizr', plugin_dir_url( __FILE__ ) . 'vendor/conditionizr/conditionizr-4.3.0.min.js', array(), '4.3.0', false); // Conditionizr
    wp_enqueue_script('conditionizr'); // Enqueue it!

    wp_register_script('jquerycustom', plugin_dir_url( __FILE__ ) . 'vendor/jquery/jquery.min.js', array(), '3.2.1', true); // jQuery
    wp_enqueue_script('jquerycustom'); // Enqueue it!

    wp_register_script('popper', plugin_dir_url( __FILE__ ) . 'vendor/popper/popper.min.js', array(), '1.11.1', true); // Popper
    wp_enqueue_script('popper'); // Enqueue it!

    wp_register_script('bootstrap', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/js/bootstrap.min.js', array(), '4.0.0-beta', true); // Bootstrap
    wp_enqueue_script('bootstrap'); // Enqueue it!

    wp_register_script('modernizr', plugin_dir_url( __FILE__ ) . 'vendor/modernizr/modernizr-2.7.1.min.js', array(), '2.7.1', true); // Modernizr
    wp_enqueue_script('modernizr'); // Enqueue it!

  }
}


/*------------------------------------*\
	Cargando los estilos
\*------------------------------------*/
function custom_styles()
{
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
	  wp_register_style('normalize', plugin_dir_url( __FILE__ ) . 'vendor/normalize.min.css', array(), '1.0', 'all');
	  wp_enqueue_style('normalize'); // Enqueue it!

	  wp_register_style('fontawesome', plugin_dir_url( __FILE__ ) . 'vendor/font-awesome/css/font-awesome.min.css', array(), '4.7.0', 'all');
	  wp_enqueue_style('fontawesome'); // Enqueue it!

    wp_register_style('bootstrap', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/css/bootstrap.min.css', array(), '3.7.0', 'all');
	  wp_enqueue_style('bootstrap'); // Enqueue it!

  }
}


/*------------------------------------*\
	Personalizando el LOGIN
\*------------------------------------*/

function login_style() {
  wp_enqueue_style( 'vegasCSS', get_template_directory_uri() . '/login/css/vegas.min.css', false );
  wp_enqueue_style( 'loginCSS', get_template_directory_uri() . '/login/css/loginStyles.css', false );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'vegasJS', get_template_directory_uri() . '/login/js/vegas.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'loginjs', get_template_directory_uri() . '/login/js/login.js', array('jquery'), '1.0.0', true);


  wp_localize_script(
    'loginjs',
    'login_imagenes',
    array(
      "ruta_plantilla" => get_template_directory_uri()
    )
  );
}
