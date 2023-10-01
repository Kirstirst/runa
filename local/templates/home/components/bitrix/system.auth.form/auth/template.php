<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CJSCore::Init();
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <?
                if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE'])) {
                    ShowMessage($arResult['ERROR_MESSAGE']);
                }
                ?>
                <? if ($arResult["FORM_TYPE"] == "login"): ?>
                    <form name="system_auth_form<?= $arResult["RND"] ?>" method="post" target="_top"
                          action="<?= $arResult["AUTH_URL"] ?>" class="p-5 bg-white border">
                        <? if ($arResult["BACKURL"] <> ''): ?>
                            <input type="hidden" name="backurl" class="form-control"
                                   value="<?= $arResult["BACKURL"] ?>"/>
                        <?endif ?>
                        <? foreach ($arResult["POST"] as $key => $value): ?>
                            <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
                        <?endforeach ?>
                        <input type="hidden" name="AUTH_FORM" value="Y"/>
                        <input type="hidden" name="TYPE" value="AUTH"/>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Логин</label>
                                <input class="form-control" type="text" name="USER_LOGIN" maxlength="50" value=""
                                       size="17"/>
                                <script>
                                    BX.ready(function () {
                                        var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                                        if (loginCookie) {
                                            var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                                            var loginInput = form.elements["USER_LOGIN"];
                                            loginInput.value = loginCookie;
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Пароль</label>
                                <input class="form-control" type="password" name="USER_PASSWORD" maxlength="255"
                                       size="17" autocomplete="off"/>
                                <? if ($arResult["SECURE_AUTH"]): ?>
                                    <span class="bx-auth-secure" id="bx_auth_secure<?= $arResult["RND"] ?>"
                                          title="<? echo GetMessage("AUTH_SECURE_NOTE") ?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                                    <noscript>
				<span class="bx-auth-secure" title="<? echo GetMessage("AUTH_NONSECURE_NOTE") ?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                                    </noscript>
                                    <script type="text/javascript">
                                        document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                                    </script>
                                <?endif ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <? if ($arResult["STORE_PASSWORD"] == "Y"): ?>
                                    <tr>
                                        <td valign="top"><input type="checkbox" id="USER_REMEMBER_frm"
                                                                name="USER_REMEMBER" value="Y"/></td>
                                        <td width="100%"><label for="USER_REMEMBER_frm"
                                                                title="Запомнить"><? echo 'Запомнить' ?></label></td>
                                    </tr>
                                <?endif ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <? if ($arResult["CAPTCHA_CODE"]): ?>
                                    <tr>
                                        <td colspan="2">
                                            <? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:<br/>
                                            <input type="hidden" name="captcha_sid"
                                                   value="<? echo $arResult["CAPTCHA_CODE"] ?>"/>
                                            <img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>"
                                                 width="180" height="40" alt="CAPTCHA"/><br/><br/>
                                            <input type="text" name="captcha_word" maxlength="50" value=""/></td>
                                    </tr>
                                <?endif ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="Login"
                                       value="<?= 'Войти' ?>"/>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <? if ($arResult["NEW_USER_REGISTRATION"] == "Y"): ?>
                                    <tr>
                                        <td colspan="2">
                                            <noindex><a href="<?= $arResult["AUTH_REGISTER_URL"] ?>"
                                                        rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a></noindex>
                                            <br/></td>
                                    </tr>
                                <?endif ?>
                            </div>
                        </div>
                    </form>
                <?
                else:
                    ?>

                    <form action="<?= $arResult["AUTH_URL"] ?>" class="p-5 bg-white border">
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <?= $arResult["USER_NAME"] ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                [<?= $arResult["USER_LOGIN"] ?>]
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <a href="<?= $arResult["PROFILE_URL"] ?>" title="Профиль">Профиль</a><br/>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <? foreach ($arResult["GET"] as $key => $value):?>
                                    <input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
                                <? endforeach ?>
                                <?= bitrix_sessid_post() ?>
                                <input type="hidden" name="logout" class="btn btn-primary" value="yes"/>
                                <input type="submit" name="logout_butt" value="<?= GetMessage("AUTH_LOGOUT_BUTTON") ?>"
                                       class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                <? endif ?>

            </div>
        </div>
    </div>
</div>