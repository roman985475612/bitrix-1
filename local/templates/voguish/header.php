<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
        use Bitrix\Main\Page\Asset;
        
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/bootstrap.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/style.css");
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>");
        Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>");
        
        CJSCore::Init(['jquery']);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/jquery.flexisel.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/responsiveslides.min.js");
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
				<a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" class="img-responsive" alt=""></a>
			</div>
            <div class="head-nav">
                <span class="menu"> </span>
                <ul class="cl-effect-1">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="404.html">Shortcodes</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"> </div>
		</div>
	</div>
    <!-- header -->
