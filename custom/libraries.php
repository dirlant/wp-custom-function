<?php



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

    wp_register_style('slick', plugin_dir_url( __FILE__ ) . 'vendor/slick/slick.css', array(), false, 'all');
	  wp_enqueue_style('slick'); // Enqueue it!

    wp_register_style('slick-theme', plugin_dir_url( __FILE__ ) . 'vendor/slick/slick-theme.css', array(), false, 'all');
	  wp_enqueue_style('slick-theme'); // Enqueue it!

    //wp_register_style('magnific-popup', plugin_dir_url( __FILE__ ) . 'vendor/magnific-popup/magnific-popup.css', array(), false, 'all');
	  //wp_enqueue_style('magnific-popup'); // Enqueue it!

    //wp_register_style('jquery.galereya', plugin_dir_url( __FILE__ ) . 'vendor/maso/css/jquery.galereya.css', array(), false, 'all');
    //wp_enqueue_style('jquery.galereya'); // Enqueue it!


    //wp_register_style('creative', plugin_dir_url( __FILE__ ) . 'vendor/css/creative.min.css', array(), false , 'all');
	  //wp_enqueue_style('creative'); // Enqueue it!

  }
}



/*------------------------------------*\
	Cargando los scripts
\*------------------------------------*/
function custom_scripts()
{
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_register_script('conditionizr', plugin_dir_url( __FILE__ ) . 'vendor/conditionizr/conditionizr-4.3.0.min.js', array(), '4.3.0', false); // Conditionizr
    wp_enqueue_script('conditionizr'); // Enqueue it!

    wp_register_script('jquerycustom', plugin_dir_url( __FILE__ ) . 'vendor/jquery/jquery-v1.9.1.min.js', array(), '1.9.1', true); // jQuery
    wp_enqueue_script('jquerycustom'); // Enqueue it!

    wp_register_script('bootstrap.bundle', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true); // jQuery
    wp_enqueue_script('bootstrap.bundle'); // Enqueue it!

    wp_register_script('popper', plugin_dir_url( __FILE__ ) . 'vendor/popper/popper.min.js', array(), '1.11.1', true); // Popper
    wp_enqueue_script('popper'); // Enqueue it!

    wp_register_script('bootstrap', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/js/bootstrap.min.js', array(), '4.0.0-beta', true); // Bootstrap
    wp_enqueue_script('bootstrap'); // Enqueue it!

    wp_register_script('slick', plugin_dir_url( __FILE__ ) . 'vendor/slick/slick.js', array(), '1.8.1', true); // Bootstrap
    wp_enqueue_script('slick'); // Enqueue it!

    wp_register_script('modernizr', plugin_dir_url( __FILE__ ) . 'vendor/modernizr/modernizr-2.7.1.min.js', array(), '2.7.1', true); // Modernizr
    wp_enqueue_script('modernizr'); // Enqueue it!

    //wp_register_script('jquery-easing', plugin_dir_url( __FILE__ ) . 'vendor/jquery-easing/jquery.easing.min.js', array(), false, true); // Modernizr
    //wp_enqueue_script('jquery-easing'); // Enqueue it!

    //wp_register_script('scrollreveal', plugin_dir_url( __FILE__ ) . 'vendor/scrollreveal/scrollreveal.min.js', array(), '3.3.6', true); // Modernizr
    //wp_enqueue_script('scrollreveal'); // Enqueue it!

    //wp_register_script('magnific-popup', plugin_dir_url( __FILE__ ) . 'vendor/magnific-popup/jquery.magnific-popup.min.js', array(), 'v1.1.0', true); // Modernizr
    //wp_enqueue_script('magnific-popup'); // Enqueue it!

    //wp_register_script('creative', plugin_dir_url( __FILE__ ) . 'vendor/js/creative.min.js', array(), false, true); // Modernizr
    //wp_enqueue_script('creative'); // Enqueue it!

    //wp_register_script('jquery.galereya', plugin_dir_url( __FILE__ ) . 'vendor/maso/js/jquery.galereya.js', array(), false, true); // Modernizr
    //wp_enqueue_script('jquery.galereya'); // Enqueue it!

  }
}

?>
