<?
//define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");



/*if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0)
    LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
*/?><!--
    <p>Вы зарегистрированы и успешно авторизовались.</p>

    <p><a href="<?/*=SITE_DIR*/?>">Вернуться на главную страницу</a></p>--> <br>
 <br>
 <?$APPLICATION->IncludeComponent("bitrix:main.profile", "prof", Array(
	"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>