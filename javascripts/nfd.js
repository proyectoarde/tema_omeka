if(location.pathname == "/") {
// if (document.location.pathname.split(/\/(?=.)/).length == 2) {
  $("#wrap").css("display", "none");
  $(".nombre h2").css("display","block");
  //$(".nombre h1 a").append("<h2>Memoria de prácticas y procesos</h2>");

}
else if (
  (document.location.pathname.indexOf("/search") > -1) 
  || (document.location.pathname.indexOf("/find") > -1) 
  || (document.location.pathname.indexOf("items/browse") > -1)
  || (document.location.pathname.indexOf("items/tags") > -1)
  || (document.location.pathname.indexOf("/creators") > -1)
  || (document.location.pathname.indexOf("/subjects") > -1)
  || (document.location.pathname.indexOf("/formats") > -1)
  || (document.location.pathname.indexOf("/languages") > -1)
  || (document.location.pathname.indexOf("/dates") > -1)
  )
{
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".logodos").css("display", "none");
  $(".nombre").css("display", "none");
  $(".logouno img").attr('src', '/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/themes/arde/images/fondo-arde-v2-interior.jpg')").css({"maxHeight":"400px"}).css({"minHeight":"400px"});
  $("#editorial").css("display", "none");
}
else if ((document.location.pathname.indexOf("/collections/browse") > -1)) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".buscador").css("display", "none");
  $(".nombre h1 a").css("border-bottom","3px solid white").css("padding-bottom","5px").text("Colecciones");
  $(".logouno img").attr('src', '/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('/themes/arde/images/fondo-colecciones.jpg')").css({"maxHeight":"400px"}).css({"minHeight":"400px"});
  $("#editorial").css("display", "none");
}
else if (document.location.pathname.indexOf("/exhibits") > -1) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".buscador").css("display", "none");
  $(".nombre h1 a").css("border-bottom","3px solid white").css("padding-bottom","5px").text("Exposiciones");
  $(".logouno img").attr('src', '/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('/themes/arde/images/fondo-colecciones.jpg')").css({"maxHeight":"400px"}).css({"minHeight":"400px"});
  $("#editorial").css("display", "none");
}
else if (document.location.pathname.indexOf("/collections/show") > -1) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $("#editorial").css("display", "none");
}
else if (document.location.pathname.indexOf("/items/show") > -1) {
  $(".logodos").css("display", "none");
  $("#etiquetas").css("display", "none");
  $("#destacado").css("display", "none");
  $("#exposiciones").css("display", "none");
  $("#colecciones").css("display", "none");
  $(".mensaje-footer").css("display", "none");
  $(".banner-center").css("display", "none");
  $(".logouno img").attr('src', '/themes/arde/images/arde-logo-color.png');
  $("header[role='banner']").css("height", "10px").css("background", "#3f3f3f").css({"maxHeight":"130px"}).css({"minHeight":"130px"});
  $("#editorial").css("display", "none");
}
else {
  $("#editorial").css("display", "none");
};

$(".borrar").remove();


//$("#colecciones-lista .collection h2 a").text($(this).text().substr(0, 75)+'...');

if($("#dublin-core-source > h3:contains('Fuente')").length) {
  $(".element-set #dublin-core-source").css("width","30%");
} else {
  $(".element-set #dublin-core-source").css("display","none");
  $(".element-set #dublin-core-description").css("width","100%");
};

$(".etiquetas-home").load("/items/tags ul.popularity");
$(".exposiciones").load("/exposiciones-destacadas div.exhibit");
$(".colecciones").load("/colecciones-destacadas .collection");
$(".editorial-home").load("https://proyectoarde.org div.listado-editorial.container.pb-5");

$("#destacado .item.record").append("<div class='ir-a-seccion text-right'><a href='http://archivo.proyectoarde.org/exhibits'>Ver documento &gt;</a></div>");

$('#destacado > div > div > a > img[src*="fallback-video"]').attr("src", "/themes/arde/images/video-arde.svg");
$('#destacado > div > div > a > img[src*="fallback-audio"]').attr("src", "/themes/arde/images/audio-arde.svg");
$('#destacado > div > div > a > img[src*="fallback-file"]').attr("src", "/themes/arde/images/pdf-arde.svg");

$('#content > div > div > div.item-img > a > img[src*="fallback-video"]').attr("src", "/themes/arde/images/video-arde-lista.svg");
$('#content > div > div > div.item-img > a > img[src*="fallback-audio"]').attr("src", "/themes/arde/images/audio-arde-lista.svg");
$('#content > div > div > div.item-img > a > img[src*="fallback-file"]').attr("src", "/themes/arde/images/pdf-arde-lista.svg");


$('#destacado > div > div > div > a').attr("href",$('#destacado h3 > a').attr("href"));

$('.menuu-mobile').click(function() {
  $('.menu-mobile').toggle('slow', function() {
    // Animation complete.
  });
});


