<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "IBLOCK_TYPE" => array(
            "PARENT" => "BASE",
            "NAME" => "Тип инфоблока",
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "IBLOCK_ID" => array(
            "PARENT" => "BASE",
            "NAME" => "ID инфоблока",
            "TYPE" => "STRING",
            "DEFAULT" => '',
        ),
        "SORT_ORDER" => array(
            "PARENT" => "BASE",
            "NAME" => "Направление сортировки",
            "TYPE" => "LIST",
            "VALUES" => array("ASC" => "По возрастанию", "DESC" => "По убыванию"),
            "DEFAULT" => "ASC",
        ),
        "SECTION_ID" => array(
            "PARENT" => "BASE",
            "NAME" => "Раздел",
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "CACHE_TIME"  =>  array("DEFAULT"=>3600),
    )
);
?>
