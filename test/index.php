<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый");

echo '<main class="container">';

$APPLICATION->IncludeComponent("bitrix:main.feedback", '', [
    'USE_CAPTCHA'      => 'N',
    'OK_TEXT'          => 'Спасибо, Ваше сообщение принято.',
    'EMAIL_TO'         => 'lecoliv405@sdysofa.com',
    'EVENT_MESSAGE_ID' => ['7'],
]);

echo '</main>';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>