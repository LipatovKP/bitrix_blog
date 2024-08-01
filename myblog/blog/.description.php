<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
    "NAME" => "Блог",
    "DESCRIPTION" => "Компонент для вывода списка записей блога и детальной страницы.",
    "ICON" => "/images/icon.gif",
    "SORT" => 10,
    "PATH" => array(
        "ID" => "custom_components",
        "NAME" => "Мои компоненты",
        "CHILD" => array(
            "ID" => "blog",
            "NAME" => "Блог"
        )
    ),
    "CACHE_PATH" => "Y",
    "COMPLEX" => "Y",
);
?>
