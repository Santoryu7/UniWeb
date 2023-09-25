<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>

</main>
<footer class="footer">
    <div class="container__menu">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footer",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPONENT_TEMPLATE" => "header",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        ); ?>
        <div class="footer__content">
            <div class="footer__number">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/footer__phone.php"
                    )
                ); ?>
            </div>
            <div class="footer__right">
                <div class="footer__name">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer__name.php"
                        )
                    ); ?>
                </div>
                <div class="footer__img">
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer__img.php"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>