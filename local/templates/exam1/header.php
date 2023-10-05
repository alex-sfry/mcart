<?

use Bitrix\Main\Page\Asset; ?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? IncludeTemplateLangFile(__FILE__); ?>

<?
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
Asset::getInstance()->addString("<link rel='icon' type='image/vnd.microsoft.icon' href='" . SITE_TEMPLATE_PATH . "/img/favicon.ico'>");
Asset::getInstance()->addString("<link rel='shortcut icon' href='" . SITE_TEMPLATE_PATH . "/img/favicon.ico'>");
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
    <title><?= $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>
</head>

<body>
    <? $APPLICATION->ShowPanel(); ?>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <? $cur_hour = (int)date('H');
                    if ($cur_hour >= 9 && $cur_hour <= 18) : ?>

                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                        <div class="shedule">время работы с 9-00 до 18-00</div>

                    <? else : ?>

                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                        <div class="shedule">время работы с 9-00 до 18-00</div>

                    <? endif; ?>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>

                    <?
                     $APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "demo",
                        array(
                            "FORGOT_PASSWORD_URL" => "/s2/login/?forgot_password=yes",
                            "PROFILE_URL" => "/s2/login/user.php",
                            "REGISTER_URL" => "/s2/login/?register=yes",
                            "SHOW_ERRORS" => "N"
                        )
                    ); 
                    ?>

                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
                <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu_exam1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
        "CACHE_SELECTED_ITEMS" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu_exam1"
	),
	false
); ?>

            
        <!-- /nav -->

        <!-- breadcrumbs -->
        <? if ($APPLICATION->GetCurPage() != '/s2/') : ?>
            <div class="breadcrumbs-box">
                <div class="inner-wrap">
                    <a href="">Главная</a>
                    <a href="">Мебель</a>
                    <span>Выставки и события</span>
                </div>
            </div>
        <? endif; ?>
        <!-- /breadcrumbs -->

        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <? if ($APPLICATION->GetCurPage() != '/s2/') : ?>
                            <header>
                                <h1><?= $APPLICATION->ShowTitle(false); ?></h1>
                            </header>
                        <? endif; ?>

                        <? if ($APPLICATION->GetCurPage() == '/s2/') : ?>
                            <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
                            </p>


                            <!-- index column -->
                            <div class="cnt-section index-column">
                                <div class="col-wrap">

                                    <!-- main actions box -->
                                    <div class="column main-actions-box">
                                        <div class="title-block">
                                            <h2>Новинки</h2>
                                            <hr>
                                        </div>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/new01.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/new02.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/new03.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новинки</a>
                                    </div>
                                    <!-- /main actions box -->
                                    <!-- main news box -->
                                    <div class="column main-news-box">
                                        <div class="title-block">
                                            <h2>Новости</h2>
                                        </div>
                                        <hr>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Мастер-класс дизайнеров из Италии для производителей мебели </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новости</a>
                                    </div>
                                    <!-- /main news box -->

                                </div>
                            </div>
                            <!-- /index column -->

                            <!-- afisha box -->
                            <div class="cnt-section afisha-box">
                                <div class="section-title-block">
                                    <h2 class="second-ttile">Ближайшие мероприятия</h2>
                                    <a href="" class="btn-next">все мероприятия</a>
                                </div>
                                <hr>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие нового магазина в нашей дилерской сети.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /afisha box -->
                        <? endif; ?>

