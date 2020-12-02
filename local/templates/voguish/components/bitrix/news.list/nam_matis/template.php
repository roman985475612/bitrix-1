<div class="nam-matis">
    <?php $flag = true; ?>
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        
        <?php if ($flag): ?>
            <div class="nam-matis-top">
        <?php endif ?>

                <div class="col-md-6 nam-matis-1">
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                        <img 
                            src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                            title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                            alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                            class="img-responsive"
                            style="margin-bottom: 10px"
                        >
                    </a>
                    <h3><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></h3>
                    <p><?= $item['PREVIEW_TEXT'] ?></p>
                </div>

        <?php if (!$flag): ?>
                <div class="clearfix"></div>
            </div>
        <?php endif ?>

        <?php $flag = !$flag ?>

    <?php endforeach ?>
</div><!-- /.nam-matis -->
