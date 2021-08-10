//if(location.pathname == "/") {
if (document.location.pathname.split(/\/(?=.)/).length == 2) {
}   
else {
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
};







$(".etiquetas-home").load("http://localhost/omeka/items/tags ul.popularity");
$(".exposiciones").load("http://localhost/omeka/exposiciones-destacadas div.exhibit");