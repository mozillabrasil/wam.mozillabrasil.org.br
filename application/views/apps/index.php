<div class="pm-sub-header-container pm-parallax-panel news" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
    <div class="pm-sub-header-title-container">
        <p class="pm-sub-header-title"><span data-l10n-id="APPS_TITLE"></span></p>
        <p data-l10n-id="APPS_DESCRIPTION" class="pm-sub-header-message"></p>
    </div>

</div>
<div class="container pm-containerPadding-top-80">
    <div class="row">
        <?php
        if (isset($apps)) {
            foreach ($apps as $key => $event) {
                $this->load->view('apps/header', $event->serverData);
            }
        }
        ?>
    </div>
</div>