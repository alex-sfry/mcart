<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("T_IBLOCK_DESC_LIST"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LIST_DESC"),
	"ICON" => "",
	"SORT" => 20,
    "CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "hlb",
		// "CHILD" => array(
		// 	"ID" => "mycomponent",
		// 	"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
		// 	"SORT" => 10,
		// 	"CHILD" => array(
		// 		"ID" => "mycomponent_cmpx",
		// 	),
		// ),
	),
);
