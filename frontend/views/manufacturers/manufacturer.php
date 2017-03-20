<?php
/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 30.09.2016
 * Time: 22:39
 */

/* @var $this yii\web\View */
use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use pavlinter\display\DisplayImage;


$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label'=>'Производители', 'url'=>Url::to('/manufacturers')];
$this->params['breadcrumbs'][] = $this->title;
?>





<div class="content-wrapper">
    <div class="container">
        <?php echo Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>", // template for all links
            'links' =>$this->params['breadcrumbs'],
            'homeLink'      =>  [
                'label'     =>  Yii::t('yii','<i class="fa fa-home"></i>'),
                'url'       =>  ['/site/index'],
                'template'  =>  '<li> <a href="/site/index"> <i class="fa fa-home"></i> </a> </li>'
            ]
        ]);
        ?>
        <h1><?=$model->name?></h1>
        <div class="row">    		            <div id="content" class="col-sm-12">
                <div class="row">
                    <div class="col-lg-12 products-filter">
                        <div class="btn-group">
                            <div class="btn-group">
                                <button type="button" id="grid-view" class="btn btn-default">
                                    <i class="fa fa-th fa-fw"></i><span class="hidden-xs "> Сетка</span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" id="list-view" class="btn btn-default">
                                    <i class="fa fa-th-list fa-fw"></i><span class="hidden-xs "> Список</span>
                                </button>
                            </div>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group" title="Сортировка:" id="sort-button">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="fa fa-sort"></i>&nbsp;&nbsp;
                                    <span class="hidden-xs  button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.sort_order&amp;order=ASC"><b>По умолчанию</b></a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=pd.name&amp;order=ASC">Название (А - Я)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=pd.name&amp;order=DESC">Название (Я - А)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.price&amp;order=ASC">Цена (низкая &gt; высокая)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.price&amp;order=DESC">Цена (высокая &gt; низкая)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=rating&amp;order=DESC">Рейтинг (начиная с высокого)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=rating&amp;order=ASC">Рейтинг (начиная с низкого)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.model&amp;order=ASC">Модель (А - Я)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.model&amp;order=DESC">Модель (Я - А)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.quantity&amp;order=ASC">Наличие (меньше > больше)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;sort=p.quantity&amp;order=DESC">Наличие (больше > меньше)</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" title="Показать:" id="limit-button">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="fa fa-eye"></i>&nbsp;&nbsp;
                                    <span class=" button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=12"><b>12</b></a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=25">25</a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=50">50</a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=75">75</a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/manufacturer/info&amp;manufacturer_id=8&amp;limit=100">100</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=36"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_nano_1-220x220.jpg" alt="MP3 плеер Apple iPod nano 16Gb (7th generation)" title="MP3 плеер Apple iPod nano 16Gb (7th generation)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=36">MP3 плеер Apple iPod nano 16Gb (7th generation)</a></div>
                                    <p class="description">

                                        Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most..</p>



                                    <p class="price">
                                        $ 100.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('36');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('36')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('36')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('36');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('36');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=48"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_classic_1-220x220.jpg" alt="MP3 плеер Apple iPod classic 160Gb" title="MP3 плеер Apple iPod classic 160Gb" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=48">MP3 плеер Apple iPod classic 160Gb</a></div>
                                    <p class="description">


                                        More room to move.

                                        With 80GB or 160GB of storage and up to 40 hours of battery l..</p>



                                    <p class="price">
                                        $ 100.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('48');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('48')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('48')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('48');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('48');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=32"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_touch_1-220x220.jpg" alt="MP3 плеер Apple iPod touch 32Gb (5th generation)" title="MP3 плеер Apple iPod touch 32Gb (5th generation)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=32">MP3 плеер Apple iPod touch 32Gb (5th generation)</a></div>
                                    <p class="description">
                                        Revolutionary multi-touch interface.
                                        iPod touch features the same multi-touch screen technology..</p>



                                    <p class="price">
                                        $ 100.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('32');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('32')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('32')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('32');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('32');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=34"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_shuffle_1-220x220.jpg" alt="MP3 плеер Apple iPod shuffle 2Gb (4th generation)" title="MP3 плеер Apple iPod shuffle 2Gb (4th generation)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=34">MP3 плеер Apple iPod shuffle 2Gb (4th generation)</a></div>
                                    <p class="description">
                                        Born to be worn.

                                        Clip on the worlds most wearable music player and take up to 240 songs wit..</p>



                                    <p class="price">
                                        $ 100.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('34');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('34')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('34')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('34');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('34');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=42"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/apple_cinema_30-220x220.jpg" alt="Монитор Apple Thunderbolt Display 27&quot; (MC914)" title="Монитор Apple Thunderbolt Display 27&quot; (MC914)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=42">Монитор Apple Thunderbolt Display 27&quot; (MC914)</a></div>
                                    <p class="description">
                                        The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed sp..</p>



                                    <p class="price">
                                        <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 90.00</span>
                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('42');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('42')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('42')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('42');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('42');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=41"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/imac_1-220x220.jpg" alt="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" title="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=41">Моноблок Apple iMac 21.5'' (ME087C116GRU/A)</a></div>
                                    <p class="description">
                                        Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo ..</p>



                                    <p class="price">
                                        $ 100.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('41');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('41')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('41')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('41');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('41');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=45"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_pro_1-220x220.jpg" alt="Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)" title="Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=45">Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)</a></div>
                                    <p class="description">


                                        Latest Intel mobile architecture

                                        Powered by the most advanced mobile processors ..</p>



                                    <p class="price">
                                        $ 2000.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('45');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('45')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('45')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('45');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('45');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=43"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_1-220x220.jpg" alt="Ноутбук Apple MacBook 512GB (2015 год)" title="Ноутбук Apple MacBook 512GB (2015 год)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=43">Ноутбук Apple MacBook 512GB (2015 год)</a></div>
                                    <p class="description">

                                        Intel Core 2 Duo processor

                                        Powered by an Intel Core 2 Duo processor at speeds up to 2.1..</p>



                                    <p class="price">
                                        $ 500.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('43');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('43')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('43')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('43');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('43');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=44"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_air_1-220x220.jpg" alt="Ноутбук Apple MacBook Air 13'' (MC965LL/A)" title="Ноутбук Apple MacBook Air 13'' (MC965LL/A)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=44">Ноутбук Apple MacBook Air 13'' (MC965LL/A)</a></div>
                                    <p class="description">
                                        MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don&rsquo;t lose..</p>



                                    <p class="price">
                                        $ 1000.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('44');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('44')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('44')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('44');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('44');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=40"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/iphone_1-220x220.jpg" alt="Смартфон Apple iPhone 6 Plus (16Gb)" title="Смартфон Apple iPhone 6 Plus (16Gb)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=40">Смартфон Apple iPhone 6 Plus (16Gb)</a></div>
                                    <p class="description">
                                        iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a nam..</p>



                                    <p class="price">
                                        $ 101.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        &nbsp;&nbsp;<a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;manufacturer_id=8&amp;product_id=40">1 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('40');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('40')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('40')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('40');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('40');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row pagination-wrapper">
                    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right">Показано с 1 по 10 из 10 (всего 1 страниц)</div>
                </div>


            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('#limit-button').find('.button-text').prepend($('#limit-button').find("b").text());
            $('#sort-button').find('.button-text').prepend($('#sort-button').find("b").text());
        });
    </script>
    </div>
</div>

