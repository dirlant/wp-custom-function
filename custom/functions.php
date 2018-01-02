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


include ('random-post.php'); // post random
include ('general-options.php'); // opciones generales de la pagina ACF
include ('option-menu.php'); // opciones del menu
include ('libraries.php'); // librerias utilizadas
include ('wp-bootstrap-navwalker.php'); // clase del menu nav

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


add_action('init', 'custom_scripts'); // scripts
add_action('wp_enqueue_scripts', 'custom_styles'); // estilos css
add_action('login_enqueue_scripts', 'login_style', 10 ); // login


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

/*------------------------------------*\
	Archivos HTTP
\*------------------------------------*/
function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

add_filter( 'wp_image_editors', 'change_graphic_lib' );
