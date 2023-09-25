<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="swiper-slide"><img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>"></div>
        <? endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
