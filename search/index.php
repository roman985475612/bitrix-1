<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты поиска | Voguish");
?>
<main class="container">
	<div class="col-md-9 bann-right">
        <?php
            $APPLICATION->IncludeComponent("bitrix:search.page", 'clear', [
                'USE_LANGUAGE_GUESS' => 'Y',
                'PAGE_RESULT_COUNT'  => 2,
                'DISPLAY_TOP_PAGER'  => 'N',
            ]);
        ?>
    </div>
	<div class="col-md-3 bann-left">
        <?php
			$APPLICATION->IncludeComponent("bitrix:search.form", '.default', [
				'USE_SUGGEST' => 'Y',
				'PAGE'		  => '#SITE_DIR#search/index.php',
			]);
			$APPLICATION->IncludeComponent("bitrix:main.include", "", [
                "AREA_FILE_SHOW" => "file",
                "PATH"           => "/include/newsletter_widget.php",
            ]);
			$APPLICATION->IncludeComponent("bitrix:catalog.section.list", ".default", [
					"IBLOCK_TYPE" 			=> "content",
					"IBLOCK_ID" 			=> "1",
					"SECTION_ID" 			=> $_REQUEST["SECTION_CODE_PATH"],
					"COMPONENT_TEMPLATE" 	=> "",
					"SECTION_CODE" 			=> "",
					"COUNT_ELEMENTS" 		=> "Y",
					"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
					"TOP_DEPTH" 			=> "2",
					"FILTER_NAME" 			=> "sectionsFilter",
					"VIEW_MODE" 			=> "LINE",
					"SHOW_PARENT_NAME" 		=> "Y",
					"SECTION_URL" 			=> "",
					"CACHE_TYPE" 			=> "A",
					"CACHE_TIME" 			=> "36000000",
					"CACHE_GROUPS" 			=> "Y",
					"CACHE_FILTER" 			=> "N",
					"ADD_SECTIONS_CHAIN"	=> "Y"
			]);
			$APPLICATION->IncludeComponent('bitrix:news.list', 'recent_posts', [
				'IBLOCK_TYPE'       => 'content',
				'IBLOCK_ID'         => 'blog',
				'NEWS_COUNT'        => '3',
				'SORT_BY1'          => 'TIMESTAMP_X',
				'SORT_ORDER1'       => 'DESC',
				'PROPERTY_CODE'     => ['DESCRIPTION'],
				'SEF_MODE'          => 'Y',
				'SEF_FOLDER'        => '/blog/',
				'SEF_URL_TEMPLATES' => [
					'section' => '#SECTION_CODE_PATH#/',
					'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
				],
			]);
        ?>
	</div>
	<div class="clearfix"></div>
	<?php
		$APPLICATION->IncludeComponent('bitrix:news.list', 'fle_xsel', [
			'IBLOCK_TYPE'       => 'content',
			'IBLOCK_ID'         => 'blog',
			'NEWS_COUNT'        => '10',
			'SORT_BY1'          => 'TIMESTAMP_X',
			'SORT_ORDER1'       => 'DESC',
			'SEF_MODE'          => 'Y',
			'SEF_FOLDER'        => '/blog/',
			'SEF_URL_TEMPLATES' => [
				'section' => '#SECTION_CODE_PATH#/',
				'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
			],
		]);
	?>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
