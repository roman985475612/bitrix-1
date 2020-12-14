<?php 
$rsUser = CUser::GetByID($arResult['PROPERTIES']['AUTHOR']['VALUE']);
$arUser = $rsUser->Fetch();
$author = !empty($arUser['NAME']) ? $arUser['NAME'] : $arUser['LOGIN'];
$arResult['AUTHOR'] = ucfirst($author); 
?>
