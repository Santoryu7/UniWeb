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
?>

<?
if (empty($arResult["ITEMS"])) {
    ?>
<h1>Не подходит по условиям</h1>
    <?
} else {
        ?>
        <table>
    <tbody>
    <tr>
        <th>
            ФИО
        </th>
        <th>
            ДОЛЖНОСТЬ
        </th>
        <th>
            ВОЗРАСТ
        </th>
        <th>
            СТАЖ РАБОТЫ
        </th>
    </tr>

    <?
    foreach ($arResult["ITEMS"] as $arPeople):
        ?>
    <tr>
        <td>
        <?
        print_r($arPeople["NAME"]);
        ?>
        </td>
        <td>
            <?
            print_r($arPeople["PROPERTIES"]["position"]["VALUE"]);
            ?>
        </td>
        <td>
            <?
            print_r($arPeople["PROPERTIES"]["age"]["VALUE"]);
            ?>
        </td>
        <td>
            <?
            print_r($arPeople["PROPERTIES"]["experience"]["VALUE"] . " лет");
            ?>
        </td>
    </tr>
    <?
    endforeach;
    ?>
    </tbody>
</table>
<?php
}

?>


