<div class="banner">		
    <div class="header-slider">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <?php foreach ($arResult['ITEMS'] as $item): ?>
                        <li>
                            <img 
                                src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                                title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                                alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                                class="img-responsive"
                                style="margin-bottom: 10px"
                            >
                            <div class="caption">
                                <h3><?= $item['NAME'] ?></h3>
                                <p><?= $item['PREVIEW_TEXT'] ?></p>
                            </div>
                        </li>	
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>
