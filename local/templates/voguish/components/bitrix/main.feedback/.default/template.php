<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
    <?php if (!empty($arResult['ERROR_MESSAGE'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach ($arResult["ERROR_MESSAGE"] as $error): ?>
                <strong>Ошибка!</strong> <?= $error ?><br>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <?php if (!empty($arResult['OK_MESSAGE'])): ?>
        <div class="alert alert-success" role="alert">
            <strong>Успешно!</strong> <?=$arResult["OK_MESSAGE"]?>
        </div>
    <?php endif ?>

    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <div class="form_details">
            <?=bitrix_sessid_post()?>
            <div class="mf-name">
                <input 
                    type="text" 
                    class="text" 
                    name="user_name" 
                    placeholder="<?=GetMessage("MFT_NAME")?>"
                    value="<?=$arResult["AUTHOR_NAME"]?>">
            </div>
            <div class="mf-email">
                <input 
                    type="text" 
                    class="text" 
                    name="user_email" 
                    placeholder="<?=GetMessage("MFT_EMAIL")?>"
                    value="<?=$arResult["AUTHOR_EMAIL"]?>">
            </div>

            <div class="mf-message">
                <div class="mf-text">
                    <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req"></span><?endif?>
                </div>
                <textarea 
                    name="MESSAGE" 
                    rows="5" 
                    cols="40"
                    placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
            </div>

            <div class="clearfix"></div>

            <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                <div class="mf-captcha">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                    <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                </div>
            <?endif;?>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <div class="sub-button">
                <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
            </div>
        </div>
    </form>
</div>