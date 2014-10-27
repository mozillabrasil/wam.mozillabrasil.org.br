<?php
$date = get_date_by_parse($local_start);
$image = get_event_header($objectId);
?>
<div class="pm-news-post-container">
    <div class="pm-news-post-image" style="background-image:url('<?php echo $image; ?>');">
        <div class="pm-news-post-title">
            <p><?php echo $name; ?></p>
        </div>
    </div>
    <div class="pm-news-post-meta-container">
        <div class="pm-news-post-date">
            <p class="day"><?php echo $date->format('d'); ?></p>
            <p class="month-year"><?php echo $date->format('m'); ?><br /><?php echo $date->format('Y'); ?></p>
        </div>
        <ul class="pm-meta-options-list">
            <li data-l10n-id=""><i class="fa fa-comment"></i> &nbsp;0 Comments</li>
            <li data-l10n-id=""><i class="fa fa-heart"></i> &nbsp;<a href="#">Like this</a></li>
            <li data-l10n-id=""><i class="fa fa-twitter"></i> &nbsp;<a href="#">Tweet this</a></li>
            <li data-l10n-id=""><i class="fa fa-pencil"></i> &nbsp;<a href="#">Post a comment</a></li>
        </ul>
    </div>
    <div class="pm-news-post-desc-container">
        <p class="pm-news-post-excerpt text text-justify"><?php echo substr($description, 0, 200); ?> <a href="#">{...}</a></p>
        <p class="pm-news-post-continue text text-justify">
            <a data-l10n-id="" href="<?php echo base_url(); ?>#events/view/<?php echo $objectId; ?>">Continue lendo &rarr;</a>
        </p>
    </div>
</div>