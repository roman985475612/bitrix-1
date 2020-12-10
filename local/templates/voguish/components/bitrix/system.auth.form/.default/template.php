<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<div class="panel panel-default">
    <div class="panel-heading"><?=GetMessage("AUTH_GREETING")?>, <?=$arResult["USER_NAME"]?> [<?=$arResult["USER_LOGIN"]?>]</div>
    <div class="panel-body">
            <a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />                
    </div>
</div>
