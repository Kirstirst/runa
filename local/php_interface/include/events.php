<?
class MyClass
{
    // создаем обработчик события "OnAfterUserRegister"
    public static function OnAfterUserRegisterHandler(&$arFields)
    {
        // если регистрация успешна то
        if($arFields["USER_ID"]>0)
        {
            if ($arFields["UF_GROUP"] == 5){
                CUser::SetUserGroup($arFields["USER_ID"], [6]);
            } elseif ($arFields["UF_GROUP"] == 6){
                CUser::SetUserGroup($arFields["USER_ID"], [7]);
            }
        }
        return $arFields;
    }
}
?>