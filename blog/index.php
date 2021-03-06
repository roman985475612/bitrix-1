<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php")?>
<div class="container">
    <div class="blog">
		<div class="blog-content">
            <div class="blog-content-left">
                <?php $APPLICATION->IncludeComponent('bitrix:news', '', [
                    'IBLOCK_TYPE'          => 'content',
                    'IBLOCK_ID'            => '1',
                    'SEF_MODE'             => 'Y',
                    'SEF_FOLDER'           => '/blog/',
                    'SEF_URL_TEMPLATES'    => [
                        'section' => '#SECTION_CODE_PATH#/',
                        'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
                    ],
                    'LIST_PROPERTY_CODE'   => ['AUTHOR', 'GALLERY'],
                    'DETAIL_PROPERTY_CODE' => ['AUTHOR', 'GALLERY'],
                    'NEWS_COUNT'           => 2,
                ]); ?>
            </div>
            <div class="blog-content-right">
                <?php
                    $APPLICATION->IncludeComponent("bitrix:search.form", '.default', [
                        'USE_SUGGEST' => 'Y',
                        'PAGE'		  => '#SITE_DIR#search/index.php',
                    ]);
                    $APPLICATION->IncludeComponent("bitrix:main.include","",[
                        "AREA_FILE_SHOW" => "file",
                        "PATH"           => "/include/twitter_widget.php",
                    ]);
                    $APPLICATION->IncludeComponent("bitrix:search.tags.cloud", "", [
                        'URL_SEARCH' => '/search/index.php',
                    ]);
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
