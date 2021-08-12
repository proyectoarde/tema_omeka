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
        <div class="row my-3 py-3">

            <div class="col-md-10 text-center text-md-left">

                <!-- Suscríbete-->
                <div>
                    <p class="text-uppercase text-light small">MANTENTE INFORMADO INSCRIBIÉNDOTE
A NUESTRA LISTA DE MAILS
</p>
                </div>
        
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                  #mc_embed_signup{clear:left; width:100%;}
                  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div style="text-align: left;" id="mc_embed_signup">
                <form action="https://proyectoarde.us8.list-manage.com/subscribe/post?u=c0b79383e974802da4ae0ca34&amp;id=dfd24c9de3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                    <div id="mc_embed_signup_scroll">
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Tu e-mail acá" required="">
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3ed0024a25f32863e0dacbf27_b6d928c419" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Suscribirse" name="Suscribirse" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>

            </div><!--col end -->
          <?php echo public_nav_main(array('role' => 'navigation')); ?>

        </div><!-- row end -->

        <div class="row my-3">

            <div class="col-md-10 text-light small text-center text-md-left">
                <!-- Info Sitio-->
                <div><img class="mr-2 arde-chico" src="https://proyectoarde.org/wp-content/themes/arde_wp/img/icono-footer-arde.png">©2021_proyecto_arde</div>
            </div><!--col end -->

            <div class="col-md-2">
                <!-- RRSS
                <ul class="navbar-nav ml-auto d-block">
                    <li class="nav-item d-md-inline d-block">
                        <a class="nav-link d-md-inline d-block text-center text-md-left" href="https://www.facebook.com/archivoarde/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="nav-item d-md-inline d-block">
                        <a class="nav-link d-md-inline d-block text-center text-md-left" href="https://www.instagram.com/proyectoarde/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>-->
                <!-- Menú RRSS -->
                <nav class="ta-center ta-md-left d-md-block pt-5 pt-md-0">
                <div class="menu-main-menu-container"><ul class="menu navbar-nav ml-auto d-block"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2752"><a title="nav-link" target="_blank" rel="nav-link" href="https://www.facebook.com/archivoarde/"><i class="nav-link fab fa-facebook-square"></i></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2753"><a title="nav-link" target="_blank" rel="nav-link" href="https://www.instagram.com/proyectoarde/"><i class="nav-link fab fa-instagram"></i></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2754"><a title="nav-link" target="_blank" rel="nav-link" href="https://www.youtube.com/channel/UCY41bjhyICItR_XSAeP1Ilg"><i class="nav-link fab fa-youtube-square"></i></a></li>
</ul></div>                </nav>
            </div><!--col end -->

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
    <script type="text/javascript" src="/omeka/themes/arde/javascripts/nfd.js"></script>

</body>
</html>
