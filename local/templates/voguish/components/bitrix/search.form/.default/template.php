<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="b-search">
    <form  action="<?=$arResult['FORM_ACTION']?>">
        <input 
            name="q" 
            type="text" 
            value="Search" 
            onfocus="this.value = '';" 
            onblur="if (this.value == '') {this.value = 'Search...'}">
        <input 
            name="s" 
            type="submit" 
            value="">
    </form>
</div>
