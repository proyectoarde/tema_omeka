//if(location.pathname == "/") {
if (document.location.pathname.split(/\/(?=.)/).length == 2) {
  $("#wrap").css("display", "none");
}   
else {
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".logodos").css("display", "none");
  $(".nombre").css("display", "none");
  $(".logouno img").attr('src', '/omeka/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/omeka/themes/arde/images/fondo-arde-v2-interior.jpg')").css({"maxHeight":"400px"}).css({"minHeight":"400px"});


};







$(".etiquetas-home").load("http://localhost/omeka/items/tags ul.popularity");
$(".exposiciones").load("http://localhost/omeka/exposiciones-destacadas div.exhibit");
//$(".colecciones").load("http://localhost/omeka/colecciones-destacadas .collection");
$(".colecciones").load("http://proyectoarde.org .listado-editorial");
