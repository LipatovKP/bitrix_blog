<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (isset($arParams["ELEMENT_ID"]) && !empty($arParams["ELEMENT_ID"])) {
    // Логика для детальной страницы
    $arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ID" => $arParams["ELEMENT_ID"],
        "ACTIVE" => "Y"
    );
    $arSelect = array("ID", "NAME", "DETAIL_TEXT");

    $rsElement = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

    $arResult["ITEM"] = array();
    if ($ob = $rsElement->GetNextElement()) {
        $arResult["ITEM"] = $ob->GetFields();
    }

    $this->IncludeComponentTemplate("detail");
} else {
    // Логика для списка записей блога
    $arOrder = array("SORT" => $arParams["SORT_ORDER"]);
    $arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "SECTION_ID" => $arParams["SECTION_ID"],
        "ACTIVE" => "Y"
    );
    $arSelect = array("ID", "NAME", "PREVIEW_TEXT", "DETAIL_PAGE_URL");

    $arNavParams = array(
        "nPageSize" => 10,
        "bDescPageNumbering" => false,
        "bShowAll" => false
    );

    $rsElements = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavParams, $arSelect);

    $arResult["ITEMS"] = array();
    while ($ob = $rsElements->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arResult["ITEMS"][] = $arFields;
    }

    $this->IncludeComponentTemplate();
}
?>