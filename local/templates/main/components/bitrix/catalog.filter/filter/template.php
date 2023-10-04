<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>




<form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>" method="get">
    <? foreach ($arResult["ITEMS"] as $arItem):
        if (array_key_exists("HIDDEN", $arItem)):
            echo $arItem["INPUT"];
        endif;
    endforeach; ?>
    <div class="selection__filter">
        <div class="selection__only">
            <div class="selection__only-title">Показать только</div>
            <select name="arrFilter_pf[position]" class="selection__select" id="role">
                <option value="">Все профессии</option>
                <option value="Няня">Няня</option>
                <option value="Конюх">Конюх</option>
                <option value="Повар">Повар</option>
                <option value="Уборщица">Уборщица</option>
                <option value="Садовник">Садовник</option>
                <option value="Гувернантка">Гувернантка</option>
            </select>
        </div>
        <div class="selection__age">
            <div class="selection__option selection__option2">
                <label class="selection__label" for="experience">Стаж</label>
                <label class="selection__label" for="experience">от</label>
                <label class="selection__label selection__label2" for="experience">
                <? foreach ($arResult["ITEMS"] as $arItem):
                    if ($arItem["NAME"] == 'Стаж работы'):
                        print_r($arItem["INPUT"]);
                    endif;
                    endforeach;
                ?>
                </label>
                <label class="selection__label" for="experience">лет</label>
            </div>
            <div class="selection__option">
                <label class="selection__label" for="experience">Возраст</label>
                <label class="selection__label" for="experience">от</label>
                <label class="selection__label selection__label2" for="experience">
                    <? foreach ($arResult["ITEMS"] as $arItem):
                        if ($arItem["NAME"] == 'Возраст'):
                            print_r($arItem["INPUT"]);
                        endif;
                    endforeach;
                    ?>
                </label>

                <label class="selection__label" for="experience">лет</label>
            </div>
        </div>
        <div class="selection__button">
            <div class="selection__but">
                <a href="#">
                    <button class="selection__button-but">
                        <input type="submit" name="set_filter" value="Подобрать" />
                    </button>
                </a>
            </div>
        </div>
    </div>
</form>