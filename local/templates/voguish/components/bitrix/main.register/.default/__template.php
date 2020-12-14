<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
	die();
}

if($arResult["SHOW_SMS_FIELD"] == true) {
	CJSCore::Init('phone_auth');
}
?>

<div class="main-1">
	<?php if($USER->IsAuthorized()):?>
		<p><?= GetMessage("MAIN_REGISTER_AUTH")?></p>
	<?php else:?>
		<?php if (count($arResult["ERRORS"]) > 0):
			foreach ($arResult["ERRORS"] as $key => $error)
				if (intval($key) == 0 && $key !== 0) 
					$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

			ShowError(implode("<br />", $arResult["ERRORS"]));

		elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
		?>

		<p><?= GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
	<?php endif?>

<?php if($arResult["SHOW_SMS_FIELD"] == true):?>
	<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform">
		<?php if($arResult["BACKURL"] <> ''): ?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?php endif ?>

		<input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />

		<div class="custom-form-group">
            <label for="SMS_CODE"><?=GetMessage("main_register_sms")?></label>
            <input name="SMS_CODE" type="text" class="custom-form-control" id="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>">
        </div>

		<div class="custom-form-group">
			<button type="submit" class="custom-btn"><?=GetMessage("main_register_sms_send")?></button>
			<input type="submit" class="custom-btn" name="code_submit_button" value="<?= GetMessage("main_register_sms_send")?>" />
        </div>
	</form>

	<script>
		new BX.PhoneAuth({
			containerId: 'bx_register_resend',
			errorContainerId: 'bx_register_error',
			interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
			data:
				<?=CUtil::PhpToJSObject([
					'signedData' => $arResult["SIGNED_DATA"],
				])?>,
			onError:
				function(response)
				{
					var errorDiv = BX('bx_register_error');
					var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
					errorNode.innerHTML = '';
					for(var i = 0; i < response.errors.length; i++)
					{
						errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
					}
					errorDiv.style.display = '';
				}
		});
	</script>

	<div id="bx_register_error" style="display:none"><?ShowError("error")?></div>

	<div id="bx_register_resend"></div>

<?php else:?>
	<h3><?=GetMessage("AUTH_REGISTER")?></h3>

	<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
		<?php if($arResult["BACKURL"] <> ''): ?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?php endif ?>

		<?php foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
			<?php if ($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true):?>
				<?= GetMessage("main_profile_time_zones_auto")?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?>
				<select name="REGISTER[AUTO_TIME_ZONE]" onchange="this.form.elements['REGISTER[TIME_ZONE]'].disabled=(this.value != 'N')">
					<option value=""><?echo GetMessage("main_profile_time_zones_auto_def")?></option>
					<option value="Y"<?=$arResult["VALUES"][$FIELD] == "Y" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_yes")?></option>
					<option value="N"<?=$arResult["VALUES"][$FIELD] == "N" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_no")?></option>
				</select>
				
				<?= GetMessage("main_profile_time_zones_zones")?>
				<select name="REGISTER[TIME_ZONE]"<?if(!isset($_REQUEST["REGISTER"]["TIME_ZONE"])) echo 'disabled="disabled"'?>>
					<?php foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
						<option value="<?=htmlspecialcharsbx($tz)?>"<?=$arResult["VALUES"]["TIME_ZONE"] == $tz ? " selected=\"selected\"" : ""?>><?=htmlspecialcharsbx($tz_name)?></option>
					<?php endforeach?>
				</select>
			
			<?php else:?>
				<div class="custom-form-group">
					<label for="<?= 'field_'.$FIELD?>"><?=GetMessage("REGISTER_FIELD_".$FIELD)?></label>	
					<?php if ($FIELD == "PASSWORD"): ?>
						<input
							id="<?= 'field_'.$FIELD?>" 
							class="custom-form-control" 
							type="password" 
							name="REGISTER[<?=$FIELD?>]" 
							value="<?=$arResult["VALUES"][$FIELD]?>"
						>

						<?php if($arResult["SECURE_AUTH"]):?>
							<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
								<div class="bx-auth-secure-icon"></div>
							</span>
							<noscript>
							<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
								<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
							</span>
							</noscript>
							<script type="text/javascript">
								document.getElementById('bx_auth_secure').style.display = 'inline-block';
							</script>
						<?php endif?>

					<?php elseif ($FIELD == "CONFIRM_PASSWORD"): ?>
						<input
							id="<?= 'field_'.$FIELD?>" 
							class="custom-form-control" 
							type="password" 
							name="REGISTER[<?=$FIELD?>]" 
							value="<?=$arResult["VALUES"][$FIELD]?>"
						>
					<?php elseif ($FIELD == "PERSONAL_GENDER"): ?>
						<select name="REGISTER[<?=$FIELD?>]">
							<option value=""><?=GetMessage("USER_DONT_KNOW")?></option>
							<option value="M"<?=$arResult["VALUES"][$FIELD] == "M" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_MALE")?></option>
							<option value="F"<?=$arResult["VALUES"][$FIELD] == "F" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_FEMALE")?></option>
						</select>
					<?php elseif ($FIELD == "PERSONAL_COUNTRY" || $FIELD == "WORK_COUNTRY"): ?>
						<select name="REGISTER[<?=$FIELD?>]">
							<?php foreach ($arResult["COUNTRIES"]["reference_id"] as $key => $value): ?>
								<option
									value="<?=$value?>"
									<?php if ($value == $arResult["VALUES"][$FIELD]):?> selected="selected"<?php endif ?>
								>
									<?=$arResult["COUNTRIES"]["reference"][$key]?>
								</option>
							<?php endforeach ?>
						</select>
					<?php elseif ($FIELD == "PERSONAL_PHOTO" || $FIELD == "WORK_LOGO"): ?>
						<input size="30" type="file" name="REGISTER_FILES_<?=$FIELD?>" />
					<?php elseif ($FIELD == "PERSONAL_NOTES" || $FIELD == "WORK_NOTES"): ?>
						<textarea cols="30" rows="5" name="REGISTER[<?=$FIELD?>]"><?=$arResult["VALUES"][$FIELD]?></textarea>
					<?php else: ?>
						<?php if ($FIELD == "PERSONAL_BIRTHDAY"):?>
							<small><?=$arResult["DATE_FORMAT"]?></small><br />
						<?php endif;?>
						<input size="30" type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" />
							<?php if ($FIELD == "PERSONAL_BIRTHDAY")
								$APPLICATION->IncludeComponent(
									'bitrix:main.calendar',
									'',
									array(
										'SHOW_INPUT' => 'N',
										'FORM_NAME' => 'regform',
										'INPUT_NAME' => 'REGISTER[PERSONAL_BIRTHDAY]',
										'SHOW_TIME' => 'N'
									),
									null,
									array("HIDE_ICONS"=>"Y")
								);
							?>
					<?php endif ?>
				</div>
			<?php endif ?>
		<?php endforeach ?>
<?// ********************* User properties ***************************************************?>
<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<tr><td colspan="2"><?=trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></td></tr>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
	<tr><td><?=$arUserField["EDIT_FORM_LABEL"]?>:<?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;?></td><td>
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.field.edit",
				$arUserField["USER_TYPE"]["USER_TYPE_ID"],
				array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "regform"), null, array("HIDE_ICONS"=>"Y"));?></td></tr>
	<?endforeach;?>
<?endif;?>
<?php // ******************** /User properties ***************************************************?>
	<!-- /* CAPTCHA */ -->
	<?php if ($arResult["USE_CAPTCHA"] == "Y"): ?>
		<label><b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b></label>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
		
		<label><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></label>
		<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
	<?php endif ?>

	<div class="custom-form-group">
		<button type="submit" class="custom-btn"><?=GetMessage("AUTH_REGISTER")?></button>
		<input type="submit" class="custom-btn" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" />
	</div>
</form>

<p><?= $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>

<?php endif //$arResult["SHOW_SMS_FIELD"] == true ?>

<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>

<?php endif?>
</div>
