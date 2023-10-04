<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle("Главная");
?>
    <div class="container">
        <div class="content">
            <div class="content__cards">
                <div class="content__card content__card2">
                    <div class="content__card-bg"></div>
                    <div class="content__card-img">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/main__img.php"
                            )
                        ); ?>
                    </div>
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/main__title.php"
                        )
                    ); ?>

                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/main__text.php"
                        )
                    ); ?>
                    <div class="content__card-but"><a href="#">
                            <button class="content__card-button">
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/main__button.php"
                                    )
                                ); ?>
                            </button>
                        </a></div>
                </div>
                <div class="content__bg"></div>
                <div class="content__bg2"></div>
                <div class="content__card">
                    <div class="content__card-bg2"></div>
                    <div class="content__card-img2">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/main__img2.php"
                            )
                        ); ?>
                    </div>
                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/main__title2.php"
                        )
                    ); ?>

                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/main__text2.php"
                        )
                    ); ?>

                    <div class="content__card-but">
                        <a href="#">
                            <button class="content__card-button2">
                                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/main__button2.php"
                                    )
                                ); ?>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="images">
            <div class="images__img">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/main__img3.php"
                    )
                ); ?>
            </div>
            <div class="images__img">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/main__img4.php"
                    )
                ); ?>
            </div>
            <div class="images__img">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/main__img5.php"
                    )
                ); ?>
            </div>
            <div class="images__img">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/main__img6.php"
                    )
                ); ?>
            </div>
        </div>
        <div class="text">
            <div class="text__title">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/text__title.php"
                    )
                );
                ?>
            </div>
            <div class="text__content">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/text__content.php"
                    )
                ); ?>
            </div>
        </div>
    </div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';