<?php 
define('NEED_AUTH', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->IncludeComponent("bitrix:system.auth.form", "", [
    "REGISTER_URL"        => "/auth/register.php",
    "FORGOT_PASSWORD_URL" => "/auth/",
    "PROFILE_URL"         => "/auth/profile.php",
    "SHOW_ERRORS"         => "Y" 
]);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
