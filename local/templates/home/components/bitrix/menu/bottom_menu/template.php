<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>




<? if (!empty($arResult)): ?>
    <div class="row mb-5">
    <div class="col-md-12">
        <h3 class="footer-heading mb-4">Navigations</h3>
    </div>



    <? $counter = 0;
    $status = '';?>
    <? foreach ($arResult as $arItem):
        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue; ?>
        <? if ($counter == 0):?>
        <?$status = 'open'?>
        <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
    <?endif;?>
        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
        <? $counter++ ?>
        <?if ($counter == 4):?>
        </ul>
        </div>
        <?$counter = 0;
        $status = 'closed';?>
    <?endif;?>
    <? endforeach ?>
    <?if ($status == 'open'):?>
        </ul>
        </div>
    <?endif;?>


    </div>
<? endif ?>

