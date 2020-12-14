<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="container">
    <div class="login-page">
        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h3><?= GetMessage('AUTH_NEW_USER') ?></h3>
                <p><?= GetMessage('AUTH_FIRST_ONE') ?></p>
                <a 
                    class="acount-btn" 
                    href="<?= $arResult['AUTH_REGISTER_URL'] ?>"><?= GetMessage('AUTH_REGISTER') ?></a>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3><?= GetMessage('AUTH_TITLE') ?></h3>
                <p><?= GetMessage('AUTH_PLEASE_AUTH') ?></p>
        	<form name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                    <input type="hidden" name="AUTH_FORM" value="Y" />
                    <input type="hidden" name="TYPE" value="AUTH" />
                    
                    <?if ($arResult["BACKURL"] <> ''):?>
                        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                    <?endif?>
                    
                    <?foreach ($arResult["POST"] as $key => $value):?>
                        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                    <?endforeach?>
                    
                    <div>
                        <span><?=GetMessage("AUTH_LOGIN")?><label>*</label></span>
                        <input type="text" name="USER_LOGIN" value="<?=$arResult["LAST_LOGIN"]?>"> 
                    </div>
                    <div>
                        <span><?=GetMessage("AUTH_PASSWORD")?><label>*</label></span>
                        <input type="password" name="USER_PASSWORD"> 
                    </div>
                    <a class="forgot" href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>"><?= GetMessage('AUTH_FORGOT_PASSWORD_2') ?></a>
                    <input type="submit" value="<?=GetMessage('AUTH_AUTHORIZE')?>">
                </form>
            </div>	
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
