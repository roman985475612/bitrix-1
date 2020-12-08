<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="b-tag-weight">
    <h3>Tags Weight</h3>
    <ul>
        <?php foreach($arResult['SEARCH'] as $item): ?>
            <li><a href="<?= $item['URL'] ?>"><?= $item['NAME'] ?></a></li>
        <?php endforeach ?>
    </ul>
</div>
