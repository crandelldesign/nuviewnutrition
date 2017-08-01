<?php
$uri = $_SERVER["REQUEST_URI"]; // get the URL
$uri_array = explode('/',$uri); // split the URL at each slash to get an array
$ancestors = array_reverse(get_ancestors($post->ID, 'page'));
$eventsIdObj = get_category_by_slug('event');
$eventsId = $eventsIdObj->term_id;
$classesIdObj = get_category_by_slug('class');
$classesId = $classesIdObj->term_id;
?>
<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo get_site_url(null,'/') ?>"><span itemprop="name">Home</span></a>
    </li>
<?php
foreach ($ancestors as $ancestor) {
?>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?php echo get_permalink( $ancestor ); ?>" >
            <?php echo get_the_title( $ancestor ); ?>
        </a>
    </li>
<?php
}
if (is_single()) {
    ?>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo get_site_url(null,'/blog-events/') ?>"><span itemprop="name">Blog &amp; Events</span></a>
    </li>
    <?php
    if (in_category( $classesId))
    {
        ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo get_site_url(null,'/blog-events/classes/') ?>"><span itemprop="name">Classes</span></a>
        </li>
        <?php
    }
    if (in_category( $eventsId))
    {
        ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo get_site_url(null,'/blog-events/events/') ?>"><span itemprop="name">Events</span></a>
        </li>
        <?php
    }
    if (!in_category(array($eventsId, $classesId)))
    {
        ?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo get_site_url(null,'/blog-events/blog/') ?>"><span itemprop="name">Blog</span></a>
        </li>
        <?php
    }
}
?>
    <li class="active"><?php the_title(); ?></li>
</ol>
