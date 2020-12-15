<h3><?= GetMessage('RECENT_POSTS') ?></h3>
<div class="blo-top">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <div class="blog-grids">
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                <img 
                    src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                    title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                    alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                    class="img-responsive"
                    style="margin-bottom: 10px"
                >
            </a>
            <h4><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></h4>
            <?= $item['PREVIEW_TEXT'] ?>
        </div>
    <?php endforeach ?>
</div>
