<style>
    #primary-nav {
        display: none;
    }
    #content {
        width: 100% !important;
        max-width: 1140px;
        margin: auto;
        margin-right: auto !important;
        float: none !important;
}
</style>

<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>
<!-- <h1><?php echo $title; ?> <?php echo __('(%s total)', $total_results); ?></h1> -->
<?php if (count($exhibits) > 0): ?>

<!-- <nav class="navigation secondary-nav">
    <?php echo nav(array(
        array(
            'label' => __('Browse All'),
            'uri' => url('exhibits')
        ),
        array(
            'label' => __('Browse by Tag'),
            'uri' => url('exhibits/tags')
        )
    )); ?>
</nav> -->


<?php echo pagination_links(); ?>
<div class="exposicioness"></div>
<script>
    $(".exposicioness").load("http://localhost/omeka/exposiciones-destacadas .exhibit:lt(1)");
</script>

<?php $exhibitCount = 0; ?>
<?php foreach (loop('exhibit') as $exhibit): ?>
    <?php $exhibitCount++; ?>
    <div class="exhibit <?php if ($exhibitCount%2==1) echo ' even'; else echo ' odd'; ?>">
        <h2><?php echo link_to_exhibit(); ?></h2>
        <?php if ($exhibitImage = record_image($exhibit)): ?>
            <?php echo exhibit_builder_link_to_exhibit($exhibit, $exhibitImage, array('class' => 'image')); ?>
        <?php endif; ?>
        <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
        <div class="description"><?php echo $exhibitDescription; ?></div>
        <?php endif; ?>
        <?php if ($exhibitTags = tag_string('exhibit', 'exhibits')): ?>
        <p class="tags"><?php echo $exhibitTags; ?></p>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

<?php echo pagination_links(); ?>

<?php else: ?>
<p><?php echo __('There are no exhibits available yet.'); ?></p>
<?php endif; ?>

<?php echo foot(); ?>
