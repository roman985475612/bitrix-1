<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый");

$APPLICATION->IncludeComponent("bitrix:search.page", 'clear', [
]);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>