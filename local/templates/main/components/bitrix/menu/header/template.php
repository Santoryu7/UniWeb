
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="header__menu">

    <?
    $previousLevel = 0;
    foreach($arResult as $arItem):?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>

    <?if ($arItem["IS_PARENT"]):?>

    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
    <li class="header__li"><a class="header__a" href="<?=$arItem["LINK"]?>"><button class="header__li-button"><?= $arItem["TEXT"] ?></button></a>
        <ul>
            <?else:?>
            <li><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
                <ul>
                    <?endif?>

                    <?else:?>

                        <?if ($arItem["PERMISSION"] > "D"):?>

                            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                <li class="header__li"><a class="header__a" href="<?=$arItem["LINK"]?>"><button class="header__li-button"><?= $arItem["TEXT"] ?></button></a></li>
                            <?else:?>
                                <li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><button class="header__button-ul"><?= $arItem["TEXT"] ?></button></a></li>
                            <?endif?>

                        <?else:?>

                            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                <li class="header__li"><a class="header__a" href=""><button class="header__li-button"><?= $arItem["TEXT"] ?></button></a></li>
                            <?else:?>
                                <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                            <?endif?>

                        <?endif?>

                    <?endif?>

                    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                    <?endforeach?>

                    <?if ($previousLevel > 1)://close last item tags?>
                        <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                    <?endif?>

                </ul>
                <div class="menu-clear-left"></div>
                <?endif?>
