<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html  dir="ltr" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#f5f5f5">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="common-home"> <!--Класс меняется-->
<?php $this->beginBody() ?>


<header>
    <div id="top">
        <div class="container text-center text-right-md" >
            <!--<div class="pull-left">
                <div class="inline-block">
                    <div class="pull-left">
                        <form action="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">
                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe icon"></i><span class="hidden-xs hidden-sm">&nbsp;&nbsp;Russian&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span></button>

                                <ul class="dropdown-menu">
                                    <li><a href="en-gb">&nbsp;&nbsp;English</a></li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="" />
                            <input type="hidden" name="redirect" value="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home" />
                        </form>
                    </div>
                </div>
                <div class="inline-block">
                    <form action="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="currency">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <strong>$ </strong><span class="hidden-xs hidden-sm">&nbsp;&nbsp;US Dollar&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span></button>

                            <ul class="dropdown-menu">
                                <li><a class="currency-select" href="EUR"><strong>€ </strong>&nbsp;&nbsp;Euro</a></li>
                                <li><a class="currency-select" href="RUB"><strong>р.</strong>&nbsp;&nbsp;Рубль</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="code" value="" />
                        <input type="hidden" name="redirect" value="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home" />
                    </form>
                </div>
            </div>-->
            <div class="pull-left">
                <div class="btn-group">
                    <a class="btn" href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/wishlist" id="wishlist-total"><i class="fa fa-heart icon"></i><span class="hidden-xs hidden-sm">&nbsp;&nbsp;Закладки&nbsp;</span>&nbsp;<span class="badge">0</span></a>
                </div>
                <div class="btn-group">
                    <a class="btn" href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/compare" id="compare-total"><i class="fa fa-balance-scale icon"></i><span class="hidden-xs hidden-sm">&nbsp;&nbsp;Сравнение товаров&nbsp;</span>&nbsp;<span class="badge">0</span></a>
                </div>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user icon"></i>
                        <span class="hidden-sm hidden-xs">&nbsp;&nbsp;Личный кабинет&nbsp;</span>
                        <span class="fa fa fa-angle-down caretalt"></span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/login"><i class="fa fa-sign-in fa-fw dropdown-menu-icon"></i>&nbsp;&nbsp;Авторизация</a></li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/register"><i class="fa fa-pencil fa-fw dropdown-menu-icon"></i>&nbsp;&nbsp;Регистрация</a></li>
                    </ul>
                </div>
            </div>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-support icon"></i><span class="hidden-sm hidden-xs">&nbsp;&nbsp;Помощь&nbsp;</span>&nbsp;<i class="fa fa fa-angle-down caretalt"></i>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Ссылка 1</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row logo-line">
            <div class="col-sm-12 col-md-3">
                <div id="logo">
                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=common/home"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/catalog/logo.png" title="Your Store" alt="Your Store" class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center text-left-md">
                <div id="phone">
                    <div class="phone">
						<span data-toggle="dropdown"  class="main-phone">
							<i class="glyphicon glyphicon-phone-alt icon"></i>&nbsp;
							<span>8 (012) 345-67-89</span>
														<span class="fa fa fa-angle-down caretalt"></span>
													</span>
                        <ul class="dropdown-menu allcontacts">
                            <li><a class="btn-callback" onclick="callback();"><i class="fa fa-share"></i>&nbsp;&nbsp;Перезвоните мне</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="tel:8(012)345-67-88">
                                    <img src="image/catalog/phones_icons/03.png" class="max16" alt="8 (012) 345-67-88" />&nbsp;
                                    8 (012) 345-67-88								</a>
                            </li>
                            <li>
                                <a href="tel:8(012)345-67-87">
                                    <img src="image/catalog/phones_icons/04.png" class="max16" alt="8 (012) 345-67-87" />&nbsp;
                                    8 (012) 345-67-87								</a>
                            </li>
                            <li>
                                <a href="tel:8(012)345-67-86">
                                    <img src="image/catalog/phones_icons/07.png" class="max16" alt="8 (012) 345-67-86" />&nbsp;
                                    8 (012) 345-67-86								</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="schedule">
                                    <i class="fa fa-clock-o fu"></i>&nbsp;
                                    ежедневно с 8:30 до 21:15								</div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="mailto:info@mystore.by" target="_blank"><i class="fa fa-envelope-o fu"></i>&nbsp;
                                    info@mystore.by</a>

                                <a href="#" target="_blank">
                                    <img src="image/catalog/contacts_icons/icon_0003_vk.png" class="max16" alt="@vkmystore" />&nbsp;
                                    @vkmystore								</a>
                                <a href="#" target="_blank">
                                    <img src="image/catalog/contacts_icons/icon_0008_twitter 1.png" class="max16" alt="@twmystore" />&nbsp;
                                    @twmystore								</a>
                                <a href="#" target="_blank">
                                    <img src="image/catalog/contacts_icons/icon_0012_skype.png" class="max16" alt="mystore_superstar" />&nbsp;
                                    mystore_superstar								</a>
                            </li>

                        </ul>
                    </div>
                    <br>
                    <span class="hint">по будням с 8:00 до 20:00</span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 text-center text-right-md">
                <div id="header-menu">
                    <a class="btn" href="index.php?route=information/information&amp;information_id=4"><span>О нас</span></a>
                    <a class="btn" href=""><span>Оплата</span></a>
                    <a class="btn" href=""><span>Доставка</span></a>
                    <a class="btn" href="index.php?route=information/contact"><span>Контаты</span></a>
                    <a class="btn" href="http://coloring.xds.by/buy/"><span><span style="color:#d9534f; font-weight:bold">Акция!</span></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row menu-line">
            <div class="col-sm-12 col-md-7 col-md-push-3 search-box"><div id="search" class="input-group">
                    <div class="input-group-btn categories">
                        <button id="change_category" type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                            <span class="category-name">Везде&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="return false;" id="0">Везде</a></li>
                            <li><a href="#" onclick="return false;" id="20">Компьютеры</a></li>
                            <li><a href="#" onclick="return false;" id="18">Ноутбуки</a></li>
                            <li><a href="#" onclick="return false;" id="25">Комплектующие</a></li>
                            <li><a href="#" onclick="return false;" id="57">Планшеты</a></li>
                            <li><a href="#" onclick="return false;" id="17">Софт</a></li>
                            <li><a href="#" onclick="return false;" id="24">Телефоны и PDA</a></li>
                            <li><a href="#" onclick="return false;" id="33">Фото товары</a></li>
                            <li><a href="#" onclick="return false;" id="34">MP3 плееры</a></li>
                        </ul>
                        <input id="selected_category" type="hidden" name="category_id" value="0" />
                    </div>
                    <input type="text" name="search" value="" placeholder="Поиск" class="form-control" />
                    <div class="input-group-btn">
                        <button type="button" class="btn" id="search-button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                <script type="text/javascript">
                    $('#search a').click(function(){
                        $("#selected_category").val($(this).attr('id'));
                        $('#change_category').html('<span class="category-name">' + $(this).html() + '&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span>');
                    });
                </script>
            </div>
            <div class="col-sm-6 col-sm-push-6 col-md-2 col-md-push-3 cart-box"><div id="cart" class="btn-group btn-block">
                    <button type="button"  data-toggle="modal" data-target="#modal-cart" data-loading-text="Загрузка..." class="btn btn-primary btn-block dropdown-toggle">
                        <i class="fa fa-angle-down"></i>
                        <span id="cart-total"><span class="products"><b>0</b> товаров, </span><span class="prices">на <b>$ 0.00</b></span></span>
                    </button>
                    <div id="modal-cart" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        <span class="fa fa-shopping-basket fa-fw"></span>&nbsp;&nbsp;Корзина покупок	        </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center" style="padding: 30px 0">Ваша корзина пуста!</div>
                                    <div class="cartMask white"><div><div><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></div></div></div>

                                </div>
                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-sm-4 btn-col-1">
                                            <a class="btn btn-default btn-block" data-dismiss="modal">Продолжить покупки</a>
                                        </div>
                                        <div class="col-sm-4 btn-col-2">
                                            <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=checkout/cart" class="btn btn-default btn-block">Перейти в корзину</a>
                                        </div>
                                        <div class="col-sm-4 btn-col-3">
                                            <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=checkout/checkout" class="btn btn-block btn-danger">Оформить заказ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    $(document).ready(function () {
                        $('body').append($('#modal-cart'));
                    });
                    $('#modal-cart').on('hidden.bs.modal', function (e) {
                        $(this).find('.alert').remove();
                    })
                </script></div>
            <div class="col-sm-6 col-sm-pull-6 col-md-3 col-md-pull-9 menu-box">
                <nav id="menu" class="btn-group btn-block">

                    <button type="button" class="btn btn-menu btn-block dropdown-toggle"  data-toggle="dropdown" >
                        <i class="fa fa-bars"></i>
                        Категории					</button>
                    <ul id="menu-list" class="dropdown-menu">



                        <li class="">
							<span class="toggle-child">
								<i class="fa fa-plus plus"></i>
								<i class="fa fa-minus minus"></i>
							</span>
                            <a class="with-child">
                                <i class="fa fa-angle-right arrow"></i>


                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/computer-screen-1-24x24.png" alt="Компьютеры 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/computer-screen-1-24x24.png" alt="Компьютеры 2" />


                                Компьютеры								<span class="mobilink hidden-lg hidden-md" onclick="location.href='http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20'" ></span>
                            </a>
                            <div class="child-box box-col-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_26" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Персональные компьютеры</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_26_72"><span class="livel-down">&#8627;</span>Геймерские</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_26_75"><span class="livel-down">&#8627;</span>Домашние</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_26_73"><span class="livel-down">&#8627;</span>Офисные</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_26_76"><span class="livel-down">&#8627;</span>Профессиональные</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_26_74"><span class="livel-down">&#8627;</span>Рабочие станции</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_27" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Компьютеры Apple</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_27_65"><span class="livel-down">&#8627;</span>Моноблоки Apple iMac</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_27_64"><span class="livel-down">&#8627;</span>Ноутбуки Apple MacBook</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_27_66"><span class="livel-down">&#8627;</span>Планшеты iPad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_60" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Ноутбуки</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_60_85"><span class="livel-down">&#8627;</span>Бюджетные ноутбуки</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_60_84"><span class="livel-down">&#8627;</span>Ноутбуки-трансформеры</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-md visible-lg"></div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_63" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Ретро компьютеры</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_63_87"><span class="livel-down">&#8627;</span>IBM</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_63_86"><span class="livel-down">&#8627;</span>Макинтош</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_59" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Моноблоки</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_59_88"><span class="livel-down">&#8627;</span>Моноблоки Apple</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_59_89"><span class="livel-down">&#8627;</span>Моноблоки на Windows</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_81" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Планшеты</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_81_82"><span class="livel-down">&#8627;</span>Планшеты Android</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_81_83"><span class="livel-down">&#8627;</span>Планшеты Apple</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_81_90"><span class="livel-down">&#8627;</span>Планшеты на Windows</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-md visible-lg"></div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Компьютерные комплектующие</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_70"><span class="livel-down">&#8627;</span>Блоки питания</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_79"><span class="livel-down">&#8627;</span>Видеокарты</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_80"><span class="livel-down">&#8627;</span>Винчестеры</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_92"><span class="livel-down">&#8627;</span>Звуковые карты</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_69"><span class="livel-down">&#8627;</span>Корпуса</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_71"><span class="livel-down">&#8627;</span>Материнские платы</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_78"><span class="livel-down">&#8627;</span>Оперативная память</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_91"><span class="livel-down">&#8627;</span>Оптические накопители</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62_77"><span class="livel-down">&#8627;</span>Процессоры</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_62">...</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_61" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Мини-компьютеры</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_61_67"><span class="livel-down">&#8627;</span>Компьютеры на Android</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20_61_68"><span class="livel-down">&#8627;</span>Компьютеры на Linux</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="see-all-categories hidden-xs hidden-sm">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20">Смотреть Все&nbsp;Компьютеры</a>
                                </div>
                            </div>
                        </li>
                        <li class="">
							<span class="toggle-child">
								<i class="fa fa-plus plus"></i>
								<i class="fa fa-minus minus"></i>
							</span>
                            <a class="with-child">
                                <i class="fa fa-angle-right arrow"></i>


                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/notebook-1-24x24.png" alt="Ноутбуки 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/notebook-1-24x24.png" alt="Ноутбуки 2" />


                                Ноутбуки								<span class="mobilink hidden-lg hidden-md" onclick="location.href='http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=18'" ></span>
                            </a>
                            <div class="child-box box-col-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=18_46" class="">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Macs</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=18_45" class="">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Windows</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="see-all-categories hidden-xs hidden-sm">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=18">Смотреть Все&nbsp;Ноутбуки</a>
                                </div>
                            </div>
                        </li>
                        <li class="">
							<span class="toggle-child">
								<i class="fa fa-plus plus"></i>
								<i class="fa fa-minus minus"></i>
							</span>
                            <a class="with-child">
                                <i class="fa fa-angle-right arrow"></i>


                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/complectu-24x24.png" alt="Комплектующие 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/complectu-hover-24x24.png" alt="Комплектующие 2" />


                                Комплектующие								<span class="mobilink hidden-lg hidden-md" onclick="location.href='http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25'" ></span>
                            </a>
                            <div class="child-box box-col-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_32" class="">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Веб камеры</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_29" class="">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Манипуляторы мышь</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_28" class="with-child2">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Мониторы</a></div>
                                            <ul class="child2-box">
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_28_35"><span class="livel-down">&#8627;</span>test 1</a></li>
                                                <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_28_36"><span class="livel-down">&#8627;</span>test 2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_30" class="">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Принтеры</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="child-box-cell">
                                            <div class="h5">
                                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25_31" class="">


                                                    <span class="livel-down hidden-md hidden-lg">&#8627;</span>Сканеры</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="see-all-categories hidden-xs hidden-sm">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=25">Смотреть Все&nbsp;Комплектующие</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=57">

                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/smart-device-24x24.png" alt="Планшеты 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/smart-device-24x24.png" alt="Планшеты 2" />

                                Планшеты</a></li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=17">

                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/windows-24x24.png" alt="Софт 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/windows-24x24.png" alt="Софт 2" />

                                Софт</a></li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=24">

                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/iphone-24x24.png" alt="Телефоны и PDA 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/iphone-24x24.png" alt="Телефоны и PDA 2" />

                                Телефоны и PDA</a></li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=33">

                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/cameras-24x24.png" alt="Фото товары 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/cameras-hover-24x24.png" alt="Фото товары 2" />

                                Фото товары</a></li>
                        <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=34">

                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/ipod-24x24.png" alt="MP3 плееры 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/ipod-24x24.png" alt="MP3 плееры 2" />

                                MP3 плееры</a></li>

                        <li>
                            <a href="#">
                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/apple_2-24x24.png" alt="Продукция Apple 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/apple_2-hover-24x24.png" alt="Продукция Apple 2" />
                                <span class="with-image">Продукция Apple</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hryak-24x24.png" alt="Эконом-товары 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/hryak-hover-24x24.png" alt="Эконом-товары 2" />
                                <span class="with-image">Эконом-товары</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/sale-24x24.png" alt="Распродажа 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/sale-hover-24x24.png" alt="Распродажа 2" />
                                <span class="with-image">Распродажа</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://coloring.xds.by/buy/">
                                <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/specials-24x24.png" alt="&lt;span style=&quot;color:#d9534f&quot;&gt;Акции и скидки&lt;/span&gt; 1" />
                                <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/specials-hover-24x24.png" alt="&lt;span style=&quot;color:#d9534f&quot;&gt;Акции и скидки&lt;/span&gt; 2" />
                                <span class="with-image"><span style="color:#d9534f">Акции и скидки</span></span>
                            </a>
                        </li>
                    </ul>
                    <div id="menuMask"></div>
                    <script>$('#menu-list').hover(function () {$('body').addClass('blured')},function () {$('body').removeClass('blured')});</script>
                </nav>
            </div>
        </div>
    </div>
</header>








<?= $content ?>


<footer>

    <div id="footer-map" >
        <div class="container">
            <div class="map-content ">
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Nz0Q_oY0plOC0oFIenIzYExB59xTSujy&width=600&height=240"></script>		<div class="btn-group close-map">
                    <button type="button" class="btn btn-danger" onclick="toogleMap()"><i class="fa fa-times"></i> Закрыть</button>
                </div>
                <div class="glass"></div>
            </div>
            <div class="map-toogle" data-toggle="tooltip" data-trigger="hover" title="Развернуть схему проезда">
                <a id="mapToogle" onclick="toogleMap();">
                    <span class="glyphicon glyphicon-map-marker"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer-box">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h5><i class="fa fa-info-circle"></i><span>Информация</span></h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=information/information&amp;information_id=4">О нас</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=information/information&amp;information_id=6">Доставка</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=information/information&amp;information_id=3">Политика Безопасности</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=information/information&amp;information_id=5">Условия соглашения</a></li>
                    </ul>
                    <hr class="visible-xs">
                </div>
                <div class="col-sm-6 col-md-3">
                    <h5><i class="fa fa-support"></i><span>Служба поддержки</span></h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=information/contact">Обратная связь</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/return/add">Возврат товара</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=information/sitemap">Карта сайта</a></li>
                    </ul>
                    <hr class="visible-xs">
                </div>
                <div class="clearfix visible-sm">&nbsp;</div>
                <div class="col-sm-6 col-md-3">
                    <h5><i class="glyphicon glyphicon-pushpin"></i><span>Дополнительно</span></h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer">Производители</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/voucher">Подарочные сертификаты</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=affiliate/account">Партнерская программа</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/special">Акции</a></li>
                    </ul>
                    <hr class="visible-xs">
                </div>
                <div class="col-sm-6 col-md-3">
                    <h5><i class="glyphicon glyphicon-user"></i><span>Личный Кабинет</span></h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/account">Личный Кабинет</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/order">История заказов</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/wishlist">Закладки</a></li>
                        <li><i class="fa fa-angle-right"></i><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=account/newsletter">Рассылка</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    Работает на <a href="http://opencart-russia.ru">OpenCart "Русская сборка"</a><br /> Your Store &copy; <?= date('Y') ?>. Дизайн - <a href="http://xds.by/" target="_blank">XDS</a>			</div>
                <div class="col-sm-12 col-md-8 text-right-md">
                    <ul class="list-unstyled pay-icons">
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/maestro-48x32.png" alt="Maestro" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/mastercard-48x32.png" alt="MasterCard" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/paypal-48x32.png" alt="PayPal" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/qiwi-48x32.png" alt="QIWI" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/robokassa-48x32.png" alt="Robokassa" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/skrill-48x32.png" alt="Skrill" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/visa-48x32.png" alt="Visa" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/webmoney-48x32.png" alt="Webmoney" class="img-responsive" />
                        </li>
                        <li>
                            <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/pay_icons/yandexmoney-48x32.png" alt="YandexMoney" class="img-responsive" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span id="scroll-top-button"><i class="fa fa-arrow-circle-up"></i></span>
    </div>
</footer>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
