<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//echo '<pre>';print_r($arResult['ITEMS']);echo '</pre>';
?>
<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>New Properties for You</h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">

			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
						<figure>
							<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded"><?=$arItem['PROPERTY_PRICE_VALUE'] . ' руб'?></span>
								<h3 class="title"><?=$arItem['NAME']?></h3>
								<p class="location"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span>Площадь:</span>
										<strong><?=$arItem['PROPERTY_AREA_VALUE'].'м'?><sup>2</sup></strong>
									</div>
									<div class="col">
										<span>Санузел:</span>
										<strong><?=$arItem['PROPERTY_BATHROOMS_VALUE']?></strong>
									</div>
									<div class="col">
										<span>Этажи:</span>
										<strong><?=$arItem['PROPERTY_FLOORS_VALUE']?></strong>
									</div>
									<div class="col">
										<span>Гараж:</span>
										<strong><?if($arItem['PROPERTY_GARAGE_VALUE'] =='да') {
												echo $arItem['PROPERTY_GARAGE_VALUE'];
											}
											elseif($arItem['PROPERTY_GARAGE_VALUE'] !=='да') {
												echo 'нет';
											}
											?>
										</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>
