<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="head-nav">
    <span class="menu"></span>
    <ul class="cl-effect-1">
        <?php foreach($arResult as $item): ?>
            <li
                <?php if($item['SELECTED']) echo ' class="active"' ?>
            >
                <a href="<?= $item['LINK']?>"><?= $item['TEXT'] ?></a>
            </li>
        <?php endforeach ?>
        <?php if ($USER->IsAuthorized()): ?>
            <li>
                <a
                    href="<?= $APPLICATION->GetCurPageParam(
                                                "logout=yes", 
                                                [
                                                    "login",
                                                    "logout",
                                                    "register",
                                                    "forgot_password",
                                                    "change_password"
                                                ]);?>"
                >Выход</a>
            </li>
        <?php else: ?>
            <li><a href="/auth/">Вход</a></li>
            <li>
                <a
                    href="<?= $APPLICATION->GetCurPageParam(
                                                "register=yes", 
                                                [
                                                    "login",
                                                    "logout",
                                                    "register",
                                                    "forgot_password",
                                                    "change_password"
                                                ]);?>"
                >Регистрация</a>
            </li>
        <?php endif ?>
        <div class="clearfix"></div>
    </ul>
</div>
