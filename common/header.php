<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($author = option('author')): ?>
    <meta name="author" content="<?php echo $author; ?>" />
    <?php endif; ?>
    <?php if ($copyright = option('copyright')): ?>
    <meta name="copyright" content="<?php echo $copyright; ?>" />
    <?php endif; ?>
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts','style'));
    queue_css_url('//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    queue_css_file(array('iconfonts', 'skeleton', 'slick', 'slick-theme', 'nfd'));
    echo head_css();

    echo theme_header_background();
    ?>

    <?php
    ($backgroundColor = get_theme_option('background_color')) || ($backgroundColor = "#FFFFFF");
    ($textColor = get_theme_option('text_color')) || ($textColor = "#444444");
    ($linkColor = get_theme_option('link_color')) || ($linkColor = "#888888");
    ($buttonColor = get_theme_option('button_color')) || ($buttonColor = "#000000");
    ($buttonTextColor = get_theme_option('button_text_color')) || ($buttonTextColor = "#FFFFFF");
    ($titleColor = get_theme_option('header_title_color')) || ($titleColor = "#000000");
    ?>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }
        #site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: <?php echo $titleColor; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
        a:link {
            color: <?php echo $linkColor; ?>;
        }
        a:visited {
            color: <?php echo thanksroy_brighten($linkColor, 40); ?>;
        }
        a:hover, a:active, a:focus {
            color: <?php echo thanksroy_brighten($linkColor, -40); ?>;
        }

        .button, button,
        input[type="reset"],
        input[type="submit"],
        input[type="button"],
        .pagination_next a,
        .pagination_previous a {
          background-color: <?php echo $buttonColor; ?>;
          color: <?php echo $buttonTextColor; ?> !important;
        }

        #search-form input[type="text"] {
            border-color: <?php echo $buttonColor; ?>
        }

        @media (max-width:768px) {
            #primary-nav li {
                background-color: <?php echo thanksroy_brighten($buttonColor, 40); ?>;
            }

            #primary-nav li ul li {
                background-color: <?php echo thanksroy_brighten($buttonColor, 20); ?>;
            }

            #primary-nav li li li {
                background-color: <?php echo thanksroy_brighten($buttonColor, -20); ?>;
            }
        }
    </style>
    <!-- JavaScripts -->
    <?php
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('vendor/jquery-accessibleMegaMenu');
    queue_js_file('globals');
    queue_js_file('default');
    queue_js_file('jquery');
    queue_js_file('slick.min');
    echo head_js();
    ?>
    <script src="https://kit.fontawesome.com/508691ae36.js" crossorigin="anonymous"></script>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

        <header role="banner">
            <div class="banner-top">
                <div class="logouno">
                    <a href="https://proyectoarde.org/">
                        <img src="<?php echo html_escape(public_url('themes/arde/')) ?>images/logo-arde-blanco.png" alt="">
                    </a>
                </div>

                <div class="navegacion">
                    <?php echo public_nav_main(array('role' => 'navigation')); ?>
                </div>
                <div class="movil">
                    <ul class="movil menu-mobile navbar-nav mr-auto navbar-collapse collapse show" id="menu-navbar" style="">
                      <li class="nav-item">
                        <a class="nav-link navbar-arde" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-arde" href="/collections/browse">Colecciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-arde" href="https://editorial.proyectoarde.org/">Lecturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-arde" href="https://editorial.proyectoarde.org/los-archivos-laten/">Latidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-arde" href="https://editorial.proyectoarde.org/materiales/">Materiales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-arde" href="https://proyectoarde.org/quienes-somos/">Quienes Somos</a>
                    </li>
                  </ul>
                </div>
                 <button class="navbar-toggler collapsed movil menuu-mobile" type="button" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="redes">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/archivoarde/">
                                <i class="nav-link fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/proyectoarde/">
                                <i class="nav-link fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCY41bjhyICItR_XSAeP1Ilg">
                                <i class="nav-link fab fa-youtube-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="banner-center">
                <div class="logodos">
                    <img src="<?php echo html_escape(public_url('themes/arde/')) ?>images/icono-comilla-arde.png" alt="">
                </div>
                <div class="nombre">
                    <h1><a href=""><?php echo implode(' <span class="borrar"> &middot; ', $titleParts); ?></a></h1>
                    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
                        <h2><?php echo $homepageText; ?></h2>
                    <?php endif; ?>
                </div>
                <div class="buscador">
                    <div class="input">
                        <form action="<?php echo html_escape(public_url('search')) ?>">
                        <input type="text" name="query" placeholder="Escribe tu búsqueda aquí...">
                        <input type="hidden" name="query_type" value="keyword">
                        <input type="hidden" name="record_types%5B%5D" value="Item">
                        <input type="hidden" name="record_types%5B%5D" value="File">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                        </form>
                    </div>
                    <div>
                        <p>ej. nombre documento, autoras, temática, tipo.</p>
                    </div>
                </div>
            </div>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
        </header>

        <section id="etiquetas">
            <h2 class="titulo">Etiquetas</h2>
            <div class="etiquetas-home"></div>
        </section>

        <section id="editorial">
              <div class="editorial-home"></div>
        </section>

        <section  id="destacado">
            <div class="documento-destacado">
                <!-- <h2 class="titulo"><?php echo __('Featured Item'); ?></h2> -->
                <h2 class="titulo">Documento Destacado</h2>
                <?php echo random_featured_items(1); ?>
            </div>
        </section>

        <!-- <section id="exposiciones">
            <div class="exposiciones-home">
                <h2 class="titulo">Exposiciones</h2>
                <p class="bajada-titulos-inicio mx-auto gt-america text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit officia maxime, eaque molestias dolorum, nemo laborum nisi.</p>
                <div class="exposiciones"></div>
                <div class="ir-a-seccion text-right">
                    <a href="<?php echo absolute_url(); ?>/exhibits">Ir a exposiciones &gt;</a>
                </div>
            </div>
        </section> -->

        <section id="colecciones">
            <div class="colecciones-home">
                <h2 class="titulo">Colecciones</h2>
                <!-- <p class="bajada-titulos-inicio mx-auto gt-america text-center">Exposición digital de las colecciones.</p> -->
                <div class="colecciones"></div>
                <div class="ir-a-seccion text-right">
                    <a href="<?php echo absolute_url(); ?>/collections/browse">Ir a todas las colecciones &gt;</a>
                </div>
            </div>
        </section>

        <div id="wrap">
            <div class="menu-button button">Menu</div>
            <nav id="primary-nav" role="navigation">
                <?php echo public_nav_main(array('role' => 'navigation')); ?>
                <div id="search-container" role="search">
                    <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                    <?php echo search_form(array('show_advanced' => true)); ?>
                    <?php else: ?>
                    <?php echo search_form(); ?>
                    <?php endif; ?>
                </div>
            </nav>

            <div id="content" role="main" tabindex="-1">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
