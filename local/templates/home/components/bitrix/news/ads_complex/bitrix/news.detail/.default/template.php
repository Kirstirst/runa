<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
echo '<pre>';print_r($arResult['DISPLAY_PROPERTIES']);echo '</pre>';
?>


<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE']?> Р</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">
                        <?foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['VALUE'] as $value):?>
                            <div><img src="<?=CFile::GetPath($value);?>" alt="Image" class="img-fluid"></div>
                        <?endforeach;?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3"><?=$arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE']?> Р</strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs">Floors</span>
                                    <span class="property-specs-number"><?=$arResult['DISPLAY_PROPERTIES']['FLOORS']['VALUE']?><sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Area</span>
                                    <span class="property-specs-number"><?=$arResult['DISPLAY_PROPERTIES']['AREA']['VALUE']?></span>

                                </li>
                                <li>
                                    <span class="property-specs">Date update</span>
                                    <span class="property-specs-number"><?=$arResult['TIMESTAMP_X']?></span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Bathrooms</span>
                            <strong class="d-block"><?=$arResult['DISPLAY_PROPERTIES']['BATHROOM']['VALUE']?></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Garage</span>
                            <strong class="d-block"><?if ($arItem['DISPLAY_PROPERTIES']['GARAGE']['VALUE_ENUM_ID'] == 6) echo 'Yes'; else echo 'No';?></strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black">More Info</h2>
                    <?=$arResult['DETAIL_TEXT']?>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Property Gallery</h2>
                        </div>
                        <?foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['VALUE'] as $value):?>
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=CFile::GetPath($value);?>" class="image-popup gal-item"><img src="<?=CFile::GetPath($value);?>" alt="Image" class="img-fluid"></a>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>

                <h2 class="h4 text-black">Ссылки:</h2>
                <?if (is_array($arResult['DISPLAY_PROPERTIES']['LINKS']['VALUE'])):?>
                    <?foreach ($arResult['DISPLAY_PROPERTIES']['LINKS']['VALUE'] as $value):?>
                    <p><a href="$value"><?=$value?></a></p>
                    <?endforeach;?>
                <?else:?>
                    <p><a href="$value"><?=$arResult['DISPLAY_PROPERTIES']['LINKS']['VALUE']?></a></p>
                <?endif;?>

                <h2 class="h4 text-black">Дополнительные материалы:</h2>
                <?if (is_array($arResult['DISPLAY_PROPERTIES']['ADDITIONS']['FILE_VALUE'][0])):?>
                    <?foreach ($arResult['DISPLAY_PROPERTIES']['ADDITIONS']['FILE_VALUE'] as $index => $value):?>
                    <p><?=$value['ORIGINAL_NAME'] . ' ' . $arResult['DISPLAY_PROPERTIES']['ADDITIONS']['DISPLAY_VALUE'][$index]?></p>
                    <?endforeach;?>
                <?else:?>
                    <p><?=$arResult['DISPLAY_PROPERTIES']['ADDITIONS']['FILE_VALUE']['ORIGINAL_NAME'] . ' ' . $arResult['DISPLAY_PROPERTIES']['ADDITIONS']['DISPLAY_VALUE']?></p>
                <?endif;?>
            </div>
            <div class="col-lg-4 pl-md-5">
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>

                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                </div>

            </div>

        </div>
    </div>
</div>

</div>