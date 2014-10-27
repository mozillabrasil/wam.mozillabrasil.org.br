<div class="pm-sub-header-container pm-parallax-panel events" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
    <div class="pm-sub-header-title-container">
        <p class="pm-sub-header-title">
            <span data-l10n-id="EVENTS_TITLE"></span>
        </p>
        <p data-l10n-id="EVENTS_DESCRIPTION" class="pm-sub-header-message"></p>
    </div>
</div>
<div class="container pm-containerPadding80">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <ul class="pm-pagination clearfix reset-pulse-sizing">
                <?php
                for ($page_number = 1; $page_number <= $pages_events; $page_number++) {
                    echo '<li class="inactive page_' . $page_number . '"><a href="' . base_url() . '#events/page/' . $page_number . '" class="inactive page_' . $page_number . '">' . $page_number . '</a></li>';
                }
                ?>
            </ul>
            <div id="list_events" class="row">

            </div>
            <ul class="pm-pagination clearfix reset-pulse-sizing">
                <?php
                for ($page_number = 1; $page_number <= $pages_events; $page_number++) {
                    echo '<li class="inactive page_' . $page_number . '"><a href="' . base_url() . '#events/page/' . $page_number . '" class="inactive page_' . $page_number . '">' . $page_number . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <aside>
            <div class="col-lg-4 col-md-4 col-sm-12 pm-sidebar">
                <div class="pm-widget">
                    <h6 data-l10n-id="EVENTS_DID_YOU_KNOW_TITLE"></h6>
                    <h5 class="text-justify"><?php echo $list_did_you_know['description']; ?></h5>
                    <p>
                        <a data-l10n-id="EVENTS_DID_YOU_KNOW_BUTTON" target="_new" class="pm-rounded-btn small pm-primary tag" href="<?php echo $list_did_you_know['link']; ?>"></a>
                    </p>
                </div>
            </div>
        </aside>
    </div>
</div>