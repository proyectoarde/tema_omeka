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
</style>


<section id="archivos-presentacion">
    <div>
        <ul id="simple-pages-breadcrumbs" class="breadcrumb">
            <li class="breadcrumb-link"><?php echo link_to_home_page(__('Home')); ?> </li>
            <li class="breadcrumb-link"><?php echo link_to_collection_for_item(); ?> </li>
            <li class="breadcrumb-link"><?php echo link_to_item(); ?></li>
        </ul>
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


<?php echo all_element_texts('item'); ?>


<!-- If the item belongs to a collection, the following creates a link to that collection. -->
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <h3><?php echo __('Collection'); ?></h3>
    <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
</div>
<?php endif; ?>

<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')): ?>
<div id="item-tags" class="element">
    <h3><?php echo __('Tags'); ?></h3>
    <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif;?>

<!-- The following prints a citation for this item. -->
<div id="item-citation" class="element">
    <h3><?php echo __('Citation'); ?></h3>
    <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div>

<!-- Available output formats --> 
<div id="item-output-formats" class="element">
    <h2><?php echo __('Output Formats'); ?></h2>
    <div class="element-text"><?php echo output_format_list(); ?></div>
</div>

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
</script>
<?php echo foot(); ?>
<iframe src="https://docs.google.com/gview?url=https://infodi.cl/untitled.doc&embedded=true"></iframe>
<embed src= "http://localhost/omeka/files/original/41675fd6860e0355105cbd32bf343a7f.pdf" width= "500" height= "375">