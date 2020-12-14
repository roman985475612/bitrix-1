<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

echo '<main class="container">';

$APPLICATION->IncludeComponent("bitrix:main.register","", [
    'AUTH'         => 'Y',
    'SET_TITLE'    => 'Y',
    'SUCCESS_PAGE' => '/',
]);

echo '</main>';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
