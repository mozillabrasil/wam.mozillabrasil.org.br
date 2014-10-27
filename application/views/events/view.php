<div class="pm-sub-header-container pm-parallax-panel events" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0"></div>
<div class="container pm-containerPadding80">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <?php
            $date = get_date_by_parse($event->local_start);
            $image = get_event_header($event->objectId);
            ?>
            <div class="pm-single-post-img-container" style="background-image:url(<?php echo $image; ?>);">
                <div class="pm-single-post-title">
                    <p><?php echo $event->name; ?></p>
                </div>
            </div>
            <div class="pm-single-post-meta-container">
                <div class="pm-news-post-date">
                    <p class="day"><?php echo $date->format('d'); ?></p>
                    <p class="month-year"><?php echo $date->format('m'); ?><br /><?php echo $date->format('Y'); ?></p>
                </div>
                <ul class="pm-single-meta-options-list">
                    <li><i data-l10n-id="" class="fa fa-user"></i> by admin</li>
                    <li><i data-l10n-id="" class="fa fa-comment"></i> 0 Comments</li>
                    <li><i data-l10n-id="" class="fa fa-heart"></i> <a href="#">Like this</a></li>
                    <li><i data-l10n-id="" class="fa fa-twitter"></i> <a href="#">Tweet this</a></li>
                </ul>
                <div class="pm-single-meta-divider top"></div>
                <div class="pm-single-tags-container top">
                    <p data-l10n-id="" class="pm-tags-title">Tags</p>
                    <ul class="pm-tags-list">
                        <li><a data-l10n-id="" href="#">travel</a>,</li>
                        <li><a data-l10n-id="" href="#">cuisine</a>,</li>
                        <li><a data-l10n-id="" href="#">art</a></li>
                    </ul>
                    <p data-l10n-id="" class="pm-tags-title">Category</p>
                    <ul class="pm-tags-list">
                        <li><a data-l10n-id="" href="#">Cuisine</a></li>
                    </ul>
                </div>
                <div class="pm-single-meta-divider"></div>
                <p data-l10n-id="" class="pm-likes-title top"><span>153</span> Likes</p>
            </div>
            <div class="pm-single-post-desc-container half-width">
                <p><?php echo $event->description; ?></p>
            </div>
            <div class="pm-single-meta-divider bottom"></div>
            <div class="pm-single-tags-container bottom">
                <p data-l10n-id="" class="pm-tags-title">Tags</p>
                <ul class="pm-tags-list">
                    <li><a data-l10n-id="" href="#">travel</a>,</li>
                    <li><a data-l10n-id="" href="#">cuisine</a>,</li>
                    <li><a data-l10n-id="" href="#">art</a></li>
                </ul>
                <p data-l10n-id="" class="pm-tags-title">Category</p>
                <ul class="pm-tags-list">
                    <li><a data-l10n-id="" href="#">Cuisine</a></li>
                </ul>
            </div>
            <div class="pm-single-meta-divider bottom"></div>
            <p data-l10n-id="" class="pm-likes-title bottom"><span>256</span> Likes</p>
            <div class="pm-single-post-share-container">
                <p data-l10n-id="">Compartilhe com seus amigos</p>
                <ul class="pm-single-post-share-list">
                    <li class="pm_tip_static_top" title="Compartilhar no Facebook"><a href="#" class="fa fa-facebook"></a></li>
                    <li class="pm_tip_static_top" title="Compartilhar no Twitter"><a href="#" class="fa fa-twitter"></a></li>
                    <li class="pm_tip_static_top" title="Compartilhar no Google Plus"><a href="#" class="fa fa-google-plus"></a></li>
                    <li class="pm_tip_static_top" title="Compartilhar por email"><a href="#" class="fa fa-envelope"></a></li>
                </ul>
            </div>
        </div>
        <aside>
            <div class="col-lg-4 col-md-4 col-sm-12 pm-sidebar">
                <div class="pm-widget">
                    <h6 data-l10n-id="">Você sabia?</h6>
                    <h5 class="text-justify"><?php echo $list_did_you_know['description']; ?></h5>
                    <p>
                        <a data-l10n-id="" target="_new" class="pm-rounded-btn small pm-primary tag" href="<?php echo $list_did_you_know['link']; ?>">Quero saber mais</a>
                    </p>
                </div>
            </div>
        </aside>
    </div>
</div>