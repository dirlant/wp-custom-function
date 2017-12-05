<?php 

add_action( 'admin_menu', 'menu_page_option' );
add_action( 'admin_menu', 'sub_menu_page_option', 999 );

function menu_page_option() {
  //remove_menu_page('index.php'); // Reueve la opcion de escritorio
  //remove_menu_page('upload.php'); // Remueve la opcion de multimedia
  //remove_menu_page('edit.php'); // Remueve la opcion de entradas
  //remove_menu_page('edit.php?post_type=page.php'); // Remueve la opcion de paginas
  //remove_menu_page('edit-comments.php'); // Remueve la opcion de comentarios
  //remove_menu_page('themes.php'); // Remueve la opcion de temas
 	//remove_menu_page('plugins.php'); // Remueve la opcion de plugins
  //remove_menu_page('users.php'); // Remueve la opcion de usuarios
  //remove_menu_page('tools.php'); // Remueve la opcion herramientas
  //remove_menu_page('options-general.php'); // Remueve la opcion de ajustes
}

function sub_menu_page_option() {
  //remove_submenu_page( 'index.php', 'update-core.php' );
}
