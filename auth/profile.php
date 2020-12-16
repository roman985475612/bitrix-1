<?php 
    define('NEED_AUTH', true);
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); 
    $APPLICATION->SetTitle('Профиль пользователя');
?>

<main class="container">
    <div class="login-page">
        <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.profile',
                '',
                []
            );
        ?>
    </div>
</main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
