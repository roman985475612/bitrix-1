<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="main-1">
    <h3><?=GetMessage("AUTH_REGISTER")?></h3>
    <form action="/auth/register.php" method="POST" name="regform" enctype="multipart/form-data"> 
        <div class="custom-form-group">
            <label for="login"><?=GetMessage("REGISTER_FIELD_LOGIN")?></label>
            <input name="REGISTER[LOGIN]" type="text" class="custom-form-control" id="login" required>
        </div>

        <div class="custom-form-group">
            <label for="email"><?=GetMessage("REGISTER_FIELD_EMAIL")?></label>
            <input name="REGISTER[EMAIL]" type="email" class="custom-form-control" id="email" required>
        </div>

        <div class="custom-form-group">
            <label for="password"><?=GetMessage("REGISTER_FIELD_PASSWORD")?></label>
            <input name="REGISTER[PASSWORD]" type="password" class="custom-form-control" id="password" required>
        </div>

        <div class="custom-form-group">
            <label for="confirm_password"><?=GetMessage("REGISTER_FIELD_CONFIRM_PASSWORD")?></label>
            <input name="REGISTER[CONFIRM_PASSWORD]" type="password" class="custom-form-control" id="confirm_password" required>
        </div>

        <div class="custom-form-group">
            <input type="submit" class="custom-btn" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>">
        </div>
    </form>
    <div class="clearfix"></div>
</div>
