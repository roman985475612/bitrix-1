<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
        use Bitrix\Main\Page\Asset;
        
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>");
        Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/bootstrap.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/style.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/plugins/fancybox/source/jquery.fancybox.css?v=2.1.7");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/custom.css");
        
        CJSCore::Init(['jquery']);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/jquery.flexisel.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/responsiveslides.min.js");
        // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/bootstrap.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.7");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/script.js");
        
        $APPLICATION->ShowHead();
    ?>
</head>
<body>
    <div id="panel"><?php $APPLICATION->ShowPanel() ?></div>
    <!-- header -->
	<div class="header">
            <div class="container">
                <div class="logo">
                    <a href="/">
                        <?php
                            $APPLICATION->IncludeComponent("bitrix:main.include","",[
                                "AREA_FILE_SHOW" => "file",
                                "PATH"           => "/include/logo.php",
                            ]);
                        ?>
                    </a>
                </div>
                <?php
                    $APPLICATION->IncludeComponent("bitrix:menu","top_menu", [
                        "ROOT_MENU_TYPE"        => "top", 
                        "MAX_LEVEL"             => "1", 
                        "CHILD_MENU_TYPE"       => "top", 
                        "USE_EXT"               => "Y",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "Y",
                        "MENU_CACHE_TYPE"       => "N", 
                        "MENU_CACHE_TIME"       => "3600", 
                        "MENU_CACHE_USE_GROUPS" => "Y", 
                        "MENU_CACHE_GET_VARS"   => "" 
                    ]);
                ?>
                <div class="clearfix"></div>
            </div>
	</div>
    <!-- header -->
