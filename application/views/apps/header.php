<?php
    $imagem = get_apps_header($objectId);
?>
<div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing" data="<?php echo $objectId;?>">
    <div class="pm-gallery-item-container">
        <div class="pm-gallery-item-img-container" style="background-image:url(<?php echo $imagem;?>);">
        </div>
        <div class="pm-gallery-item-desc">
            <p class="pm-gallery-item-name"><?php echo $name;?></p>
            <div class="pm-divider"></div>
            <ul class="pm-gallery-social-icons">
                <li>
                    <a data-l10n-id="APPS_BUTTON" href="<?php echo $url;?>" target="_new" class="pm-rounded-btn pm-primary small"></a>
                </li>
            </ul>
        </div>
    </div>
</div>