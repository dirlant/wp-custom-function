jQuery(function($) {
    $('#login h1, #login form').wrapAll('<div class="grupo"></div>');

    $("body").vegas({
      slides: [
        { src: login_imagenes.ruta_plantilla + "/login/img/fondo1.jpg" },
        { src: login_imagenes.ruta_plantilla + "/login/img/fondo2.jpg" },
        { src: login_imagenes.ruta_plantilla + "/login/img/fondo3.jpg" },
        { src: login_imagenes.ruta_plantilla + "/login/img/fondo4.jpg" },
        { src: login_imagenes.ruta_plantilla + "/login/img/fondo5.jpg" }
      ],
      overlay: login_imagenes.ruta_plantilla + "/login/img/overlays/09.png",
      transition: ['fade', 'zoomOut', 'swirlLeft']
    });
});
