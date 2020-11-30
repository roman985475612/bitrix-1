<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php")?>
<div class="container">
    <div class="blog">
		<div class="blog-content">
            <div class="blog-content-left">
                <?php $APPLICATION->IncludeComponent('bitrix:news', '', [
                    'IBLOCK_TYPE'          => 'content',
                    'IBLOCK_ID'            => 'blog',
                    'SEF_MODE'             => 'Y',
                    'SEF_FOLDER'           => '/blog/',
                    'SEF_URL_TEMPLATES'    => [
                        'section' => '#SECTION_CODE_PATH#/',
                        'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
                    ],
                    'LIST_PROPERTY_CODE'   => ['AUTHOR'],
                    'NEWS_COUNT'           => 2,
                ]); ?>
            </div>
            <div class="blog-content-right">
                <?php
                    $APPLICATION->IncludeComponent("bitrix:main.include","",[
                        "AREA_FILE_SHOW" => "file",
                        "PATH"           => "/include/search_widget.php",
                    ]);
                    $APPLICATION->IncludeComponent("bitrix:main.include","",[
                        "AREA_FILE_SHOW" => "file",
                        "PATH"           => "/include/twitter_widget.php",
                    ]);
                    $APPLICATION->IncludeComponent("bitrix:main.include","",[
                        "AREA_FILE_SHOW" => "file",
                        "PATH"           => "/include/tags_widget.php",
                    ]);
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
