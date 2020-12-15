<?php 
    // define('NEED_AUTH', true);
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); 
    $APPLICATION->SetTitle('Восстановление пароля');
?>

<main class="container">
    <div class="login-page">
        <?php
            $APPLICATION->IncludeComponent(
                'bitrix:system.auth.forgotpasswd',
                '',
                [
                    'SHOW_ERRORS' => 'Y',
                ]
            );
        ?>
    </div>
</main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>


