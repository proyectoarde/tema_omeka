<style>
#presentacion-coleccion{
    background: rgb(247, 247, 247);
    width: 100%;
}
.element-set {
    width: 100%;
    max-width: 1100px;
    display: flex;
    margin: auto;
    flex-flow: row-reverse;
}
.element-set h2,
.element-set .element,
.element-set #dublin-core-description h3,
.element-set #dublin-core-source h3,
.buscador {
    display: none;
}
.element-text {
    margin-bottom: 0 !important;
}
.collections .element {
    margin-bottom: 0 !important;
}
.element-set #dublin-core-description,
.element-set #dublin-core-source {
    display: block;
}
.element-set #dublin-core-description { width: 70%; }
.element-set #dublin-core-source { width: 30%; }
header[role="banner"] {
    height: 10px !important;
    max-height: 400px !important;
    min-height: 400px !important;
    background-position: center !important;
}
</style>
<?php
$collectionTitle = metadata('collection', 'display_title');
$totalItems = metadata('collection', 'total_items');
?>

<?php echo head(array('title' => $collectionTitle, 'bodyclass' => 'collections show')); ?>
<section id="presentacion-coleccion">
<?php echo all_element_texts('collection'); ?>
</section>
<div id="collection-items">
    <h2><?php echo __('Collection Items'); ?></h2>
    <?php if ($totalItems > 0): ?>
        <?php foreach (loop('items') as $item): ?>
            <?php $itemTitle = metadata('item', 'display_title'); ?>
            <div class="item hentry">

<!--                 <?php //if (metadata('item', 'has thumbnail')): ?>
                    <div class="item-img">
                        <?php //echo link_to_item(item_image(null, array('alt' => $itemTitle))); ?>
                    </div>
                <?php //endif; ?> -->
                    <?php if (metadata('item', 'has files')): ?>
    <div class="item-img">
        <?php echo link_to_item(item_image()); ?>
    </div>
    <?php endif; ?>

                <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet' => 250))): ?>
                <div class="item-description">
                <h2><?php echo link_to_item($itemTitle, array('class' => 'permalink')); ?></h2>
                    
                    <?php echo $description; ?>
                </div>
            <?php endif; ?>
            <?php if (metadata('item', 'has tags')): ?>
    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items'); ?></p>
    </div>
    <?php endif; ?>

        </div>
    <?php endforeach; ?>
    <?php echo link_to_items_browse(__(plural('View item', 'View all %s items', $totalItems), $totalItems), array('collection' => metadata('collection', 'id')), array('class' => 'view-items-link')); ?>
<?php else: ?>
    <p><?php echo __("There are currently no items within this collection."); ?></p>
<?php endif; ?>
</div><!-- end collection-items -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>

<script>
    var fondo = $('#collection-items > div:nth-child(2) > div > a > img').attr('src');
    $('header').css("background", "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(" + fondo + ")");
    $("section#presentacion-coleccion").insertBefore("#wrap");
</script>
