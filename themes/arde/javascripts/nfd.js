//if(location.pathname == "/") {
if (document.location.pathname.split(/\/(?=.)/).length == 2) {
  $("#wrap").css("display", "none");
}
else if (document.location.pathname.indexOf("/search") > -1) {
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".logodos").css("display", "none");
  $(".nombre").css("display", "none");
  $(".logouno img").attr('src', '/omeka/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/omeka/themes/arde/images/fondo-arde-v2-interior.jpg')").css({"maxHeight":"400px"}).css({"minHeight":"400px"});
}
else if (document.location.pathname.indexOf("/collections/browse") > -1) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".buscador").css("display", "none");
  $(".nombre h1 a").css("border-bottom","3px solid white").css("padding-bottom","5px").text("Colecciones");
  $(".logouno img").attr('src', '/omeka/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('/omeka/themes/arde/images/fondo-colecciones.jpg')").css({"maxHeight":"400px"}).css({"minHeight":"400px"});
}
else if (document.location.pathname.indexOf("/collections/show") > -1) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
}
else if (document.location.pathname.indexOf("/items/show") > -1) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $("header[role='banner']").css("height", "10px").css("background", "#030303").css({"maxHeight":"150px"}).css({"minHeight":"150px"});
}
else {
};







$(".etiquetas-home").load("http://localhost/omeka/items/tags ul.popularity");
$(".exposiciones").load("http://localhost/omeka/exposiciones-destacadas div.exhibit");
$(".colecciones").load("http://localhost/omeka/colecciones-destacadas .collection");
