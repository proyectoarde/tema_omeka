<section id="archivos-presentacion" class="oculto itembrowse" style="padding-bottom: 0;">
    <div class="cuerpo" >
        <ul id="simple-pages-breadcrumbs" class="breadcrumb">
            <li class="breadcrumb-link"><?php echo link_to_home_page(__('Home')); ?> </li>
            <li class="breadcrumb-link">Búsqueda </li>
        </ul>
    </div>
</section>
<?php
$pageTitle = __('Browse Items');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<style>
#wrap {
    max-width: 1100px;
    padding: 0;
}
</style>


<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php echo item_search_filters(); ?>

<?php echo pagination_links(); ?>

<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Creator')] = 'Dublin Core,Creator';
$sortLinks[__('Date Added')] = 'added';
?>
<div class="titbuscador">
    <h2 class="titbuscar"><?php echo __('%s documentos encontrados', $total_results); ?></h2>
    <div id="sort-links">
        <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
    </div>
</div>
<?php endif; ?>

<?php foreach (loop('items') as $item): ?>
<div class="item hentry">
    <div class="item-meta">

    <?php if (metadata('item', 'has files')): ?>
    <div class="item-img">
        <?php echo link_to_item(item_image()); ?>
    </div>
    <?php endif; ?>

    <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet' => 250))): ?>
    <div class="item-description">
        <h2><?php echo link_to_item(null, array('class' => 'permalink')); ?></h2>
        <?php echo $description; ?>
    </div>
    <?php endif; ?>

    <?php if (metadata('item', 'has tags')): ?>
    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items'); ?></p>
    </div>
    <?php endif; ?>

    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' => $item)); ?>

    </div><!-- end class="item-meta" -->
</div><!-- end class="item hentry" -->
<?php endforeach; ?>

<?php echo pagination_links(); ?>

<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
</div>

<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>

<script>
    $("header").after($(".oculto.itembrowse"));
    $(".oculto.itembrowse").css("display","block");
</script>