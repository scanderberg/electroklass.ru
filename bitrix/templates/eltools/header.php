<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=<?=SITE_CHARSET?>"/>
        <link href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH."/template_styles.css")?>" type="text/css" rel="stylesheet" />
        <?CJSCore::Init();?>
        <?$APPLICATION->ShowCSS(true, true);?>
        <?$APPLICATION->ShowHeadStrings();?>
        <?$APPLICATION->ShowHeadScripts();?>
        <?$APPLICATION->ShowMeta("keywords")?>
        <?$APPLICATION->ShowMeta("description")?>
        <title><?$APPLICATION->ShowTitle()?></title>
    </head>
<body class="<?=$APPLICATION->ShowProperty("BodyClass");?>">
<?$APPLICATION->ShowPanel(); ?>



<?$APPLICATION->IncludeComponent("bitrix:search.title","visual",Array(
        "SHOW_INPUT" => "Y",
        "INPUT_ID" => "title-search-input",
        "CONTAINER_ID" => "title-search",
        "PRICE_CODE" => array("BASE","RETAIL"),
        "PRICE_VAT_INCLUDE" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "150",
        "SHOW_PREVIEW" => "Y",
        "PREVIEW_WIDTH" => "75",
        "PREVIEW_HEIGHT" => "75",
        "CONVERT_CURRENCY" => "Y",
        "CURRENCY_ID" => "RUB",
        "PAGE" => "#SITE_DIR#search",
        "NUM_CATEGORIES" => "3",
        "TOP_COUNT" => "15",
        "ORDER" => "date",
        "USE_LANGUAGE_GUESS" => "Y",
        "CHECK_DATES" => "Y",
        "SHOW_OTHERS" => "Y",
        "CATEGORY_0_TITLE" => "Новости",
        "CATEGORY_0" => array("iblock_news"),
        "CATEGORY_0_iblock_news" => array("all"),
        "CATEGORY_1_TITLE" => "Форумы",
        "CATEGORY_1" => array("forum"),

        "CATEGORY_OTHERS_TITLE" => "Прочее"
    )
);?>

