<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd", 
	".default", 
	array(
		"AUTH_AUTH_URL" => "/polzovatel/auth.php",
		"AUTH_REGISTER_URL" => "/polzovatel/registratsiya.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>