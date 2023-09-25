<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//echo '<pre>';print_r($arResult['ITEMS']);echo '</pre>';
?>
<div class="slide-one-item home-slider owl-carousel">


<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="site-blocks-cover" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);"
         data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="text">
            <h2><?=$arItem['NAME']?></h2>
            <p class="location">
                <span class="property-icon icon-room"></span> Los Angeles, CA 90005
            </p>
            <p class="mb-2">
                <strong><?=$arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE'] . ' руб'?></strong>
            </p>
            <p class="mb-0">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
            </p>
        </div>
    </div>
    </div>
<?endforeach;?>
</div>