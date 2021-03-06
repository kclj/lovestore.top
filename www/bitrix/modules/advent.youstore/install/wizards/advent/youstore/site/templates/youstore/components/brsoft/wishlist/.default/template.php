<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(!empty($arResult["ITEMS"])){
	global $arSectionFilter;
	$arSectionFilter = array("ID" => $arResult["ITEMS"]);

	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		"",
		Array(
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"SECTION_ID" => $arParams["SECTION_ID"],
			"SECTION_CODE" => $arParams["SECTION_CODE"],
			"SECTION_USER_FIELDS" => $arParams["SECTION_USER_FIELDS"],
			"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
			"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
			"ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
			"ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
			"FILTER_NAME" => "arSectionFilter",
			"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
			"SHOW_ALL_WO_SECTION" => $arParams["SHOW_ALL_WO_SECTION"],
			"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
			"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
			"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
			"PROPERTY_CODE" => $arParams["PROPERTY_CODE"],
			"OFFERS_LIMIT" => $arParams["OFFERS_LIMIT"],
			"SECTION_URL" => $arParams["SECTION_URL"],
			"DETAIL_URL" => $arParams["DETAIL_URL"],
			"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
			"AJAX_MODE" => $arParams["AJAX_MODE"],
			"AJAX_OPTION_JUMP" => $arParams["AJAX_OPTION_JUMP"],
			"AJAX_OPTION_STYLE" => $arParams["AJAX_OPTION_STYLE"],
			"AJAX_OPTION_HISTORY" => $arParams["AJAX_OPTION_HISTORY"],
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"SET_META_KEYWORDS" => $arParams["SET_META_KEYWORDS"],
			"META_KEYWORDS" => $arParams["META_KEYWORDS"],
			"SET_META_DESCRIPTION" => $arParams["SET_META_DESCRIPTION"],
			"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
			"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
			"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
			"DISPLAY_COMPARE" => $arParams["DISPLAY_COMPARE"],
			"SET_TITLE" => $arParams["SET_TITLE"],
			"SET_STATUS_404" => $arParams["SET_STATUS_404"],
			"CACHE_FILTER" => $arParams["CACHE_FILTER"],
			"PRICE_CODE" => $arParams["PRICE_CODE"],
			"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
			"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
			"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
			"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
			"BASKET_URL" => $arParams["BASKET_URL"],
			"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
			"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
			"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
			"ADD_PROPERTIES_TO_BASKET" => $arParams["ADD_PROPERTIES_TO_BASKET"],
			"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
			"PARTIAL_PRODUCT_PROPERTIES" => $arParams["PARTIAL_PRODUCT_PROPERTIES"],
			"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
			"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
			"DISPLAY_TOP_PAGER" => "N",//$arParams["DISPLAY_TOP_PAGER"],
			"DISPLAY_BOTTOM_PAGER" => "N",//$arParams["DISPLAY_BOTTOM_PAGER"],
			"PAGER_TITLE" => $arParams["PAGER_TITLE"],
			"PAGER_SHOW_ALWAYS" => "N",//$arParams["PAGER_SHOW_ALWAYS"],
			"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
			"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
			"PAGER_SHOW_ALL" => "N",//$arParams["PAGER_SHOW_ALL"],
			"OFFERS_FIELD_CODE" => $arParams["OFFERS_FIELD_CODE"],
			"OFFERS_PROPERTY_CODE" => $arParams["OFFERS_PROPERTY_CODE"],
			"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
			"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
			"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
			"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
			"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
			"CURRENCY_ID" => $arParams["CURRENCY_ID"],
			"TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
			"PRODUCT_DISPLAY_MODE" => $arParams["PRODUCT_DISPLAY_MODE"],
			"ADD_PICT_PROP" => $arParams["ADD_PICT_PROP"],
			"LABEL_PROP" => $arParams["LABEL_PROP"],
			"PRODUCT_SUBSCRIPTION" => $arParams["PRODUCT_SUBSCRIPTION"],
			"SHOW_DISCOUNT_PERCENT" => $arParams["SHOW_DISCOUNT_PERCENT"],
			"SHOW_OLD_PRICE" => $arParams["SHOW_OLD_PRICE"],
			"MESS_BTN_BUY" => $arParams["MESS_BTN_BUY"],
			"MESS_BTN_ADD_TO_BASKET" => $arParams["MESS_BTN_ADD_TO_BASKET"],
			"MESS_BTN_SUBSCRIBE" => $arParams["MESS_BTN_SUBSCRIBE"],
			"MESS_BTN_DETAIL" => $arParams["MESS_BTN_DETAIL"],
			"MESS_NOT_AVAILABLE" => $arParams["MESS_NOT_AVAILABLE"],
			"OFFER_ADD_PICT_PROP" => $arParams["OFFER_ADD_PICT_PROP"],
			"OFFER_TREE_PROPS" => $arParams["OFFER_TREE_PROPS"],
			"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
			"AJAX_OPTION_ADDITIONAL" => $arParams["AJAX_OPTION_ADDITIONAL"]
		),
		$component
	);
	echo "<br/><br/>";
	echo $arResult["NAV_STRING"];
	
}else{
	echo "<p>".GetMessage("BRSOFT_WL_EMPTY")."</p>";
}?>