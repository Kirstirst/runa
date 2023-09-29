<?php
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
<?php if(!empty($arResult["ERROR_MESSAGE"]))
{
    foreach($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
    ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?php
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8 mb-5">
            <form action="<?=POST_FORM_ACTION_URI?>" class="p-5 bg-white border" method="POST">
                <?=bitrix_sessid_post()?>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Ваше имя<?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?></label>
                    </div>
                        <input type="text" name="user_name" class="form-control" value="<?=$arResult["AUTHOR_NAME"]?>">
                </div>
              <div class="row form-group">
                    <div class="col-md-12">
                        <label class="font-weight-bold" for="email">Email<?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?></label>
                    </div>
                        <input type="email" name="user_email" class="form-control" value="<?=$arResult["AUTHOR_EMAIL"]?>">
              </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="font-weight-bold" for="message">Сообщение<?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?php endif?></label>
                    </div>
                        <textarea name="MESSAGE" cols="30" rows="5" class="form-control"><?=$arResult["MESSAGE"]?></textarea>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                        <input type="submit" name="submit" value="Отправить" class="btn btn-primary  py-2 px-4 rounded-0">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


