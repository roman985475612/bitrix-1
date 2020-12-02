<div class="fle-xsel">
    <ul id="flexiselDemo3">
        <?php foreach ($arResult['ITEMS'] as $item): ?>
            <li>
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <div class="banner-1">
                        <img 
                            src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                            title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                            alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                            class="img-responsive"
                        >
                    </div>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="clearfix"></div>
</div>
