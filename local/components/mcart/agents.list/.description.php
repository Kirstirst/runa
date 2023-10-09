<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("MCART_AGENTS_DESC_LIST"),
    "DESCRIPTION" => GetMessage("MCART_AGENTS_DESC_LIST_DESC"),
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "content",
        "CHILD" => array(
            "ID" => "news",
            "NAME" => GetMessage("MCART_AGENTS_DESC_NEWS"),
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "news_cmpx",
            ),
        ),
    ),
);

?>