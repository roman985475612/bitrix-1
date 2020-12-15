<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<main class="container">

    <?php
        $APPLICATION->IncludeComponent("bitrix:main.register","", [
            'AUTH'         => 'Y',
            'SET_TITLE'    => 'Y',
            'SUCCESS_PAGE' => '/',
        ]);
    ?>

</main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
