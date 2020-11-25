<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="blog-articals">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <div class="blog-artical">
            <div class="blog-artical-info">
                <div class="blog-artical-info-img">
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                        <img 
                            src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" 
                            title="<?= $item['PREVIEW_PICTURE']['TITLE'] ?>"
                            alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                        >
                    </a>
                </div>
                <div class="blog-artical-info-head">
                    <h2><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></h2>
                    <h6>Posted on, <?= $item['TIMESTAMP_X'] ?> by <a href="#"><?= $item['PROPERTIES']['AUTHOR']['VALUE'] ?></a></h6>
                </div>
                <div class="blog-artical-info-text">
                    <?= $item['PREVIEW_TEXT'] ?><a href="<?= $item['DETAIL_PAGE_URL'] ?>">[...]</a></p>
                </div>
                <div class="artical-links">
                    <ul>
                        <li><small></small><span><?= $item['TIMESTAMP_X'] ?></span></li>
                        <li><a href="#"><small class="admin"> </small><span><?= $item['PROPERTIES']['AUTHOR']['VALUE'] ?></span></a></li>
                        <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                        <li><a href="#"><small class="posts"> </small><span>View posts <?= $item['SHOW_COUNTER'] ?></span></a></li>
                        <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
                    </ul>
                 </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php endforeach ?>
</div>
<?= $arResult['NAV_STRING'] ?>
<!--start-blog-pagenate-->
<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
      </a>
    </li>
  </ul>
</nav>
<!--//End-blog-pagenate-->

