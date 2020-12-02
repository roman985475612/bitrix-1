<?php
foreach ($arResult['ITEMS'] as &$item) {
    $item['PREVIEW_TEXT'] = cutStr($item['PREVIEW_TEXT'], 50);
}
unset($item);