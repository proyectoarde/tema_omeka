<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<style>
    #archivos-item > div {
    width: 100%;
    max-width: 1100px;
    margin: auto;
}
#primary-nav {
    display: none;
}
#content {
    max-width: 1100px;
    width: 100%;
    margin: auto;
    padding: 40px 0;
    float: none;
}
</style>


<section id="archivos-presentacion">
    <div class="cuerpo">
        <ul id="simple-pages-breadcrumbs" class="breadcrumb">
            <li class="breadcrumb-link"><?php echo link_to_home_page(__('Home')); ?> </li>
            <li class="breadcrumb-link"><?php echo link_to_collection_for_item(); ?> </li>
            <li class="breadcrumb-link"><?php echo link_to_item(); ?></li>
        </ul>
        <br>
        <!-- The following prints a citation for this item. -->
        <?php echo metadata('item', array('Dublin Core', 'Type')); ?>
        <h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>
        </div>
</section>
<section id="archivos-item">
    <div>
        <!-- The following returns all of the files associated with an item. -->
        <?php if (metadata('item', 'has files') && (get_theme_option('Item FileGallery') == 1)): ?>
        <div id="itemfiles" class="element">
            <div class="element-text"><?php echo item_image_gallery(); ?></div>
        </div>
    <?php endif; ?>
</div>
</section>


<?php echo item_search_filters(); ?>

<?php echo get_specific_plugin_hook_output('Facets', 'public_facets', array('view' => $this)); ?>

<?php echo pagination_links(); ?>




    <?php if (get_theme_option('Item FileGallery') == 0 && metadata('item', 'has files')): ?>
    <div class="element-text"><?php echo files_for_item(array('imageSize' => 'fullsize')); ?></div>
    <?php endif; ?>






    <div class="datos" style="overflow:auto;">
        <div class="datos izquierda" style="float:left; width:70%;padding-right:2%;">
            <h2 style="border-bottom: 2px solid;padding-bottom: 10px;letter-spacing: 2px;">DOCUMENTO</h2>

            <!-- Descripción -->
            <?php if (metadata('item', array('Dublin Core', 'Description'))): ?>
                <p class="dato"><b>Descripción</b></p>
                <p style=""><?php echo metadata('item', array('Dublin Core', 'Description')); ?></p>
            <?php endif; ?>
            <!-- Fin Descripción -->

            <!-- Autor -->
            <?php if (metadata('item', array('Dublin Core', 'Creator'))): ?>
                <p class="dato"><b>Autor</b></p>
                <p style=""><?php echo metadata('item', array('Dublin Core', 'Creator')); ?></p>
            <?php endif; ?>
            <!-- Fin Autor -->

            <!-- Fecha -->
            <?php if (metadata('item', array('Dublin Core', 'Date'))): ?>
                <p class="dato"><b>Fecha</b></p>
                <p style=""><?php echo metadata('item', array('Dublin Core', 'Date')); ?></p>
            <?php endif; ?>
            <!-- Fin Fecha -->

            <br>
            <h2 style="border-bottom: 2px solid;padding-bottom: 10px;letter-spacing: 2px;">ADICIONAL</h2>

            <table>
                <!-- Colección -->
                <?php if (metadata('item', 'Collection Name')): ?>
                    <tr>
                        <td><b><?php echo __('Collection'); ?></b></td>
                        <td><?php echo link_to_collection_for_item(); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Colección -->

                <!-- Tipo -->
                <?php if (metadata('item', array('Dublin Core', 'Type'))): ?>
                    <tr>
                        <td><b>Tipo</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Type')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Tipo -->

                <!-- Editor -->
                <?php if (metadata('item', array('Dublin Core', 'Publisher'))): ?>
                    <tr>
                        <td><b>Editor</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Publisher')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Editor -->

                <!-- Identificación -->
                <?php if (metadata('item', array('Dublin Core', 'Identifier'))): ?>
                    <tr>
                        <td><b>Identificación</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Identifier')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Identificación -->

                <!-- Fuente -->
                <?php if (metadata('item', array('Dublin Core', 'Source'))): ?>
                    <tr>
                        <td><b>Fuente</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Source')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Fuente -->

                <!-- Idioma -->
                <?php if (metadata('item', array('Dublin Core', 'Language'))): ?>
                    <tr>
                        <td><b>Idioma</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Language')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Idioma -->

                <!-- Relación -->
                <?php if (metadata('item', array('Dublin Core', 'Relation'))): ?>
                    <tr>
                        <td><b>Relación</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Relation')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Relación -->

                <!-- Cobertura -->
                <?php if (metadata('item', array('Dublin Core', 'Coverage'))): ?>
                    <tr>
                        <td><b>Cobertura</b></td>
                        <td><?php echo metadata('item', array('Dublin Core', 'Coverage')); ?></td>
                    </tr>
                <?php endif; ?>
                <!-- Fin Cobertura -->
            </table>
        </div>

        <div class="datos derecha" style="float: right;padding-left:2%;width: 30%;" >
               <!-- Derechos -->
            <?php if (metadata('item', array('Dublin Core', 'Rights'))): ?>
                <p class="dato"><b>Derechos</b></p>
                <p style=""><?php echo metadata('item', array('Dublin Core', 'Rights')); ?></p>
            <?php endif; ?>
            <!-- Fin Derechos -->

            <!-- Materias -->
            <?php if (metadata('item', array('Dublin Core', 'Subject'))): ?>
                <p class="dato"><b>Materias</b></p>
                <p style=""><?php echo metadata('item', array('Dublin Core', 'Subject'), array('delimiter' => ', ')); ?></p>
            <?php endif; ?>
            <!-- Fin Materias -->

            <!-- The following prints a list of all tags associated with the item -->
            <?php if (metadata('item', 'has tags')): ?>
                <p class="dato"><b><?php echo __('Tags'); ?></b></p>
                <p class="datotag"><?php echo tag_string('item'); ?></p>
            <?php endif;?>

            <!-- The following prints a citation for this item. -->
                <!--<p class="dato"><b><?php //echo __('Citation'); ?></b></p>-->
                <p class="dato"><b>Referencia bibliográfica</b></p>
                <p><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></p>

            <!-- Available output formats --> 
            <p class="dato"><b><?php echo __('Output Formats'); ?></b></p>
            <div class="element-text"><?php echo output_format_list(); ?></div>
            <!-- Fin Available output formats --> 
</div>

        </div>
    </div>



<!-- mostrar todo el dc -->
<?php // echo all_element_texts('item'); ?>


<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<nav>
<ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>
</nav>
<script>
    $("section#archivos-presentacion").insertBefore("#wrap");
    $("section#archivos-item").insertAfter("section#archivos-presentacion");
    $('#item-images').slick({
      dots: true,
      infinite: true,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true
  });


    $("#item-images a").each(function() {
        var urldoc = $('#item-images a').attr('href');
        if (this.href.indexOf('.pdf') != -1) {
            $(this).css("display","none");
            $("#item-images").append('<embed src="' + urldoc + ' " width="100%" height="575" />');
        } 
        else if (this.href.indexOf('.doc') != -1) {
            $(this).css("display","none");
            $("#item-images").append('<iframe src="https://docs.google.com/gview?url=' + urldoc + '&embedded=true" width="100%" height="575" />');
        } 
        else if (this.href.indexOf('.ogg') != -1) {
           $(this).css("display","none");
           $("#item-images").append('<div class="audio"><audio controls><source src="' + urldoc + '" type="audio/ogg" /></audio></div>');
       } 
       else if (this.href.indexOf('.mp3') != -1) {
        $(this).css("display","none");
        $("#item-images").append('<div class="audio"><audio controls><source src="' + urldoc + '" type="audio/mpeg" /></audio></div>');
    } 
    else if (this.href.indexOf('.m4a') != -1) {
        $(this).css("display","none");
        $("#item-images").append('<div class="audio"><audio controls><source src="' + urldoc + '" type="audio/mp4" /></audio></div>');
    } 
    else if (this.href.indexOf('.mp4') != -1) {
     $(this).css("display","none");
     $("#item-images").append('<div class="video"><video controls><source src="' + urldoc + '" type="video/mp4" /></video></div>');
 } 
});
</script>
<?php echo foot(); ?>

