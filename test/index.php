<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.comments", 
	".default", 
	array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMMENTS_COUNT" => "5",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $arResult["ID"],
		"FB_USE" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"SHOW_DEACTIVATED" => "N",
		"TEMPLATE_THEME" => "blue",
		"URL_TO_COMMENT" => "",
		"BLOG_USE" => "Y",
		"WIDTH" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"VK_USE" => "N"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>