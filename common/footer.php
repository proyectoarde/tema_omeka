        </div><!-- end content -->

    </div><!-- end wrap -->






<div class="naranjo-claro-arde-bg naranjo-arde mensaje-footer">
        <div class="row">
            <div class="footer-text">
                <p><?php echo get_theme_option('Footer Text'); ?></p>
            </div>
        </div>
</div>



<div class="wrapper footer-arde" id="wrapper-footer">


    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a class="navbar-brand" href="https://proyectoarde.org">
                    <img class="logo-minisitio" src="https://proyectoarde.org/wp-content/themes/arde_wp/img/arde-logo-sin-frase.png" alt="arde">
                </a>
            </div><!--col end -->
        </div><!-- row end -->


        <div class="subfooter">
            <div>
                <div class="row my-3 py-3">
                    <div class="col-md-10 text-center text-md-left">
                        <!-- Suscríbete-->
                        <div>
                            <p class="text-uppercase text-light small">MANTENTE INFORMADO INSCRIBIÉNDOTE <br>A NUESTRA LISTA DE MAILS</p>
                        </div>
                        <form action="https://proyectoarde.us8.list-manage.com/subscribe/post?u=c0b79383e974802da4ae0ca34&amp;id=dfd24c9de3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                            <div id="mc_embed_signup_scroll">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Tu e-mail acá" required="">
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <input type="text" style="position: absolute; left: -5000px;" name="b_3ed0024a25f32863e0dacbf27_b6d928c419" tabindex="-1" value="">
                                <input type="submit" value="Suscribirse" name="Suscribirse" id="mc-embedded-subscribe" class="button">
                            </div>
                        </form>
                    </div><!--col end -->
                </div><!-- row end -->
                <div class="row my-3">
                    <div class="col-md-10 text-light small text-center text-md-left escritorio">
                        <!-- Info Sitio-->
                        <div class="credito"><img class="mr-2 arde-chico" src="https://proyectoarde.org/wp-content/themes/arde_wp/img/icono-footer-arde.png"> ©2021_proyecto_arde</div>
                    </div><!--col end -->


                </div>



            </div>
            <div>
               <?php echo public_nav_main(array('role' => 'navigation')); ?>
               <div class="redes">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/archivoarde/">
                                <i class="nav-link fab fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/proyectoarde/">
                                <i class="nav-link fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCY41bjhyICItR_XSAeP1Ilg">
                                <i class="nav-link fab fa-youtube-square" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 text-light small text-center text-md-left movil">
                        <!-- Info Sitio-->
                        <div class="credito"><img class="mr-2 arde-chico" src="https://proyectoarde.org/wp-content/themes/arde_wp/img/icono-footer-arde.png"> ©2021_proyecto_arde</div>
                    </div><!--col end -->
            </div>
        </div>





    </div><!-- container end -->

</div>






  <!--   <footer role="contentinfo">
        <div id="footer-text">
            
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
            <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        </div>
    </footer> --><!-- end footer -->
        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('.no-touchevents #primary-nav');
        ThanksRoy.mobileMenu();
    });
    </script>
    <script type="text/javascript" src="<?php echo html_escape(public_url('themes/arde/')) ?>javascripts/nfd.js"></script>








<ul class="oculto navigation nav-menu"  aria-label="Navegar por:">
    <li class="nav-item">
        <a href="/creators/list" class="">Autores</a>
    </li>
    <li class="nav-item">
        <a href="/subjects/list" class="">Palabras Clave</a>
    </li>
    <li class="nav-item">
        <a href="/formats/list" class="">Formato</a>
    </li>
    <li class="nav-item">
        <a href="/languages/list" class="">Idioma</a>
    </li>
    <li class="nav-item">
        <a href="/dates/list" class="">Fechas</a>
    </li>
    <li class="nav-item">
        <a href="/items/tags" class="">Etiquetas</a>
    </li>
</ul>
<div id="search-container" role="search" class="with-advanced">
        <form id="search-form" name="search-form" action="/search" method="get">    <input type="text" name="query" id="query" value="" title="Buscar">        <a href="#" class="advanced-toggle" aria-label=""></a>
            <a href="#" class="show-advanced button">Advanced Search</a><div id="advanced-form" class="closed">
                <fieldset id="query-types">
                    <legend>Buscar utilizando este tipo de consulta:</legend>
                    <label><input type="radio" name="query_type" id="query_type-keyword" value="keyword" checked="checked">Palabra clave</label><br>
                    <label><input type="radio" name="query_type" id="query_type-boolean" value="boolean">Booleano</label><br>
                    <label><input type="radio" name="query_type" id="query_type-exact_match" value="exact_match">Coincidencia exacta</label>        </fieldset>
                    <fieldset id="record-types">
                        <legend>Buscar solo este tipo de registros:</legend>
                        <input type="checkbox" name="record_types[]" id="record_types-Item" value="Item" checked="checked"> <label for="record_types-Item">Elemento</label><br>
                        <input type="checkbox" name="record_types[]" id="record_types-File" value="File" checked="checked"> <label for="record_types-File">Archivo</label><br>
                        <input type="checkbox" name="record_types[]" id="record_types-Collection" value="Collection" checked="checked"> <label for="record_types-Collection">Colección</label><br>
                    </fieldset>
                    <p><a href="/items/search">Búsqueda avanzada (sólo elementos)</a></p>
                </div>
                <button name="submit_search" id="submit_search" type="submit" value="Buscar">Buscar</button></form>
            </div>

<script>
    $("#primary-nav").empty();
    $("#primary-nav").append($(".oculto.navigation.nav-menu"));
    $("#primary-nav").append($("#search-container"));
</script>

</body>
</html>
