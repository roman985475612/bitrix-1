<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="head-nav">
    <span class="menu"></span>
    <ul class="cl-effect-1">
        <?php foreach($arResult as $item): ?>
            <li
                <?php if($item['SELECTED']) echo ' class="active"' ?>
            >
                <a href="<?= $item['LINK']?>"><?= $item['TEXT'] ?></a>
            </li>
        <?php endforeach ?>
        <div class="clearfix"></div>
    </ul>
</div>
