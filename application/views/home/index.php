<div class="pm-pulse-container" id="pm-pulse-container">
    <div id="pm-pulse-loader">
        <img src="<?php echo base_url(); ?>assets/images/ajax-loader.gif" alt="slider loading" />
    </div>
    <div id="pm-slider" class="pm-slider">
        <div id="pm-slider-progress-bar"></div>
        <ul class="pm-slides-container" id="pm_slides_container">
            <li data-thumb="<?php echo base_url(); ?>assets/images/headers/firefox_thumb.jpg" class="pmslide_0"><img src="<?php echo base_url(); ?>assets/images/headers/firefox.jpg" alt="img01" />
                <div class="pm-holder">
                    <div class="pm-caption">
                        <h1><span data-l10n-id="HOME_FIREFOX_TITLE"></span></h1>
                        <span data-l10n-id="HOME_FIREFOX_DESCRIPTION" class="pm-caption-decription"></span>
                        <a data-l10n-id="HOME_FIREFOX_BUTTON" href="<?php echo base_url(); ?>#products/firefox" class="pm-slide-btn animated"> <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </li>
            <li data-thumb="<?php echo base_url(); ?>assets/images/headers/me_and_dino_thumb.jpg" class="pmslide_1"><img src="<?php echo base_url(); ?>assets/images/headers/me_and_dino.jpg" alt="img02" />
                <div class="pm-holder">
                    <div class="pm-caption">
                        <h1><span data-l10n-id="HOME_EVENTS_TITLE"></span></h1>
                        <span data-l10n-id="HOME_EVENTS_DESCRIPTION" class="pm-caption-decription"></span>
                        <a data-l10n-id="HOME_EVENTS_BUTTON" href="<?php echo base_url(); ?>#events/" class="pm-slide-btn animated"> <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </li>
            <li data-thumb="<?php echo base_url(); ?>assets/images/headers/dino_thumb.jpg" class="pmslide_2"><img src="<?php echo base_url(); ?>assets/images/headers/dino.jpg" alt="img02" />
                <div class="pm-holder">
                    <div class="pm-caption">
                        <h1><span data-l10n-id="HOME_WEBMAKER_TITLE"></span></h1>
                        <span data-l10n-id="HOME_WEBMAKER_DESCRIPTION" class="pm-caption-decription"></span>
                        <a data-l10n-id="HOME_WEBMAKER_BUTTON" href="<?php echo base_url(); ?>#products/webmaker" class="pm-slide-btn animated"> <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="container pm-containerPadding-top-90">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">
            <div class="pm-image-container">
                <img src="<?php echo base_url(); ?>assets/images/mozilla/lightbeam.jpg" alt="image1">
            </div>
            <h6>Lightbeam</h6>
            <p data-l10n-id="HOME_LIGHTBEAM_DESCRIPTION"></p>
            <a data-l10n-id="HOME_LIGHTBEAM_BUTTON" href="<?php echo base_url(); ?>#products/lightbeam" class="pm-rounded-btn animated pm-primary"> <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">
            <div class="pm-image-container">
                <img src="<?php echo base_url(); ?>assets/images/mozilla/firefoxos.jpg" alt="image2">
            </div>
            <h6>FirefoxOS</h6>
            <p data-l10n-id="HOME_FIREFOXOS_DESCRIPTION"></p>
            <a data-l10n-id="HOME_FIREFOXOS_BUTTON" href="<?php echo base_url(); ?>#products/firefoxos" class="pm-rounded-btn animated pm-primary"> <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-column-spacing">
            <div class="pm-image-container">
                <img src="<?php echo base_url(); ?>assets/images/mozilla/marketplace.jpg" alt="image3">
            </div>
            <h6>Marketplace</h6>
            <p data-l10n-id="HOME_MARKETPLACE_DESCRIPTION"></p>
            <a data-l10n-id="HOME_MARKETPLACE_BUTTON" href="<?php echo base_url(); ?>#products/marketplace" class="pm-rounded-btn animated pm-primary"> <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="container pm-containerPadding-top-50 pm-containerPadding-bottom-30">
    <div class="row">
        <div class="col-lg-12 pm-containerPadding-bottom-40">
            <div class="pm-featured-header-container">
                <div class="pm-featured-header-title-container events">
                    <p class="pm-featured-header-title"></p>
                </div>
                <div class="pm-isotope-filter-container">
                    <ul class="pm-isotope-filter-system">
                        <li>
                            <a data-l10n-id="HOME_NEXT_EVENTS" href="#" class="current"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        if (isset($last_events)) {
            foreach ($last_events as $key => $event) {
                echo '<div class="col-lg-6 col-md-6 col-sm-12 pm-column-spacing">';
                $this->load->view('events/header', $event->serverData);
                echo '</div>';
            }
        }
        ?>
    </div>
</div>