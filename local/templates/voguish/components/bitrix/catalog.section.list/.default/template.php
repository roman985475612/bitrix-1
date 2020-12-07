<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h3>Категории</h3>
<ul class="blo-top">
    <?php foreach ($arResult['SECTIONS'] as $item): ?>
        <li><a href="<?= $item['SECTION_PAGE_URL'] ?>">||   <?= $item['NAME'] ?></a></li>
    <?php endforeach ?>
</ul>
