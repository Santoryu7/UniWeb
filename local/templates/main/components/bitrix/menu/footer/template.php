<div class="footer__menu">
    <? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

    <? if (!empty($arResult)): ?>
    <ul class="footer__list">

        <?
        $previousLevel = 0;
        foreach ($arResult

        as $arItem): ?>

        <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
            <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
        <? endif ?>

        <? if ($arItem["IS_PARENT"]): ?>

        <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
        <li class="footer__li"><a href="#" class="footer__a"><?= $arItem["TEXT"] ?></a>
            <div class="footer__stick"></div>
            <ul>
                <? else: ?>
                <li<? if ($arItem["SELECTED"]): ?> class="item-selected"<? endif ?>><a href="<?= $arItem["LINK"] ?>"
                                                                                       class="parent"><?= $arItem["TEXT"] ?></a>
                    <ul>
                        <? endif ?>

                        <? else: ?>

                            <? if ($arItem["ITEM_INDEX"] == 0): ?>
                                <li class="footer__li"><a href="<?= $arItem["LINK"] ?>"
                                                          class="footer__a"><?= $arItem["TEXT"] ?></a></li>
                            <? else: ?>
                                <div class="footer__stick"></div>
                                <li class="footer__li"><a href="<?= $arItem["LINK"] ?>"
                                                          class="footer__a"><?= $arItem["TEXT"] ?></a></li>
                            <? endif ?>


                        <? endif ?>

                        <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                        <? endforeach ?>

                        <? if ($previousLevel > 1)://close last item tags?>
                            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                        <? endif ?>

                    </ul>
                    <div class="menu-clear-left"></div>
                    <? endif ?>

</div>
