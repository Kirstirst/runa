<?
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/events.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/events.php");

AddEventHandler("main", "OnAfterUserRegister", Array("MyClass", "OnAfterUserRegisterHandler"));
?>