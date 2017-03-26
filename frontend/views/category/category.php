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
use pavlinter\display\DisplayHelper;
use pavlinter\display\DisplayImage;

$this->title = $category->name;
$crumbs = [];
$parent = $category;
while ($parent = $parent->parent) {
    $crumbs[] = ['label' => $parent->name, 'url' => ['category', 'id' => $parent->id]];
}
$this->params['breadcrumbs'] = array_reverse($crumbs);
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-wrapper"><div class="container">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => $this->params['breadcrumbs']
        ])?>
        <h1><?= $category->name?></h1>
        <div class="row">
            <div class="col-sm-4 col-md-3" id="category-column-left">
                <?php if(isset($daughters ) && count($daughters) > 1 ){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-level-down"></i>&nbsp;&nbsp;Выберите подкатегорию</div>
                    <div class="list-group">
                        <?php foreach ($daughters as $daughter){?>
                        <a href="<?= Url::to(['/category', 'alias'=>$daughter->alias])?>" class="list-group-item"><?= $daughter->name?></a>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <div id="column-left" class="col-sm-4 col-md-3">
                    <div class="visible-xs col-show-button">
                        <a class="btn btn-default btn-block" id="show-modules-col-left"><i class="fa fa-eye show-icon"></i><i class="fa fa-eye-slash hid-icon"></i> Левая колонка</a>
                    </div>
                    <div id="col-left-modules" class="hid-col-left">
                        <div class="panel panel-default module-filter">
                            <div class="panel-heading"><i class="fa fa-filter"></i>&nbsp;&nbsp;Фильтр</div>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="list-group-item-heading" >
				<span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group1">
					<i class="fa fa-toggle-on on"></i>
					<i class="fa fa-toggle-off off"></i>
				</span>
                                        <strong>Дата выхода на рынок</strong>
                                    </div>
                                    <div class="list-group-item-text collapse in" id="filter-group1">
                                        <div class="filter-item">
                                            <input id="filt1" name="filter[]" type="checkbox" value="1" />
                                            <label for="filt1">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">2010&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt2" name="filter[]" type="checkbox" value="2" />
                                            <label for="filt2">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">2011&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt3" name="filter[]" type="checkbox" value="3" />
                                            <label for="filt3">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">2012&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt4" name="filter[]" type="checkbox" value="4" />
                                            <label for="filt4">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">2013&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt5" name="filter[]" type="checkbox" value="5" />
                                            <label for="filt5">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">2014&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt6" name="filter[]" type="checkbox" value="6" />
                                            <label for="filt6">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">2015&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="list-group-item-heading" >
				<span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group3">
					<i class="fa fa-toggle-on on"></i>
					<i class="fa fa-toggle-off off"></i>
				</span>
                                        <strong>Конструкция</strong>
                                    </div>
                                    <div class="list-group-item-text collapse in" id="filter-group3">
                                        <div class="filter-item">
                                            <input id="filt16" name="filter[]" type="checkbox" value="16" />
                                            <label for="filt16">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">TV-тюнер&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt17" name="filter[]" type="checkbox" value="17" />
                                            <label for="filt17">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Авто регулировка яркости&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt18" name="filter[]" type="checkbox" value="18" />
                                            <label for="filt18">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Встроенные динамики&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt19" name="filter[]" type="checkbox" value="19" />
                                            <label for="filt19">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Камера&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt20" name="filter[]" type="checkbox" value="20" />
                                            <label for="filt20">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Микрофон&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="list-group-item-heading" >
				<span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group4">
					<i class="fa fa-toggle-on on"></i>
					<i class="fa fa-toggle-off off"></i>
				</span>
                                        <strong>Назначение</strong>
                                    </div>
                                    <div class="list-group-item-text collapse in" id="filter-group4">
                                        <div class="filter-item">
                                            <input id="filt25" name="filter[]" type="checkbox" value="25" />
                                            <label for="filt25">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Геймерский&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt24" name="filter[]" type="checkbox" value="24" />
                                            <label for="filt24">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Домашний&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt23" name="filter[]" type="checkbox" value="23" />
                                            <label for="filt23">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Офисный&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt22" name="filter[]" type="checkbox" value="22" />
                                            <label for="filt22">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Профессиональный&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt21" name="filter[]" type="checkbox" value="21" />
                                            <label for="filt21">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Рабочая станция&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="list-group-item-heading" >
				<span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group5">
					<i class="fa fa-toggle-on on"></i>
					<i class="fa fa-toggle-off off"></i>
				</span>
                                        <strong>Тип компьютера</strong>
                                    </div>
                                    <div class="list-group-item-text collapse in" id="filter-group5">
                                        <div class="filter-item">
                                            <input id="filt26" name="filter[]" type="checkbox" value="26" />
                                            <label for="filt26">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">HTPC&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt27" name="filter[]" type="checkbox" value="27" />
                                            <label for="filt27">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Мини-ПК&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt28" name="filter[]" type="checkbox" value="28" />
                                            <label for="filt28">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Настольный&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt29" name="filter[]" type="checkbox" value="29" />
                                            <label for="filt29">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Неттоп&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="list-group-item-heading" >
				<span class="filter-toggle pull-right" data-toggle="collapse" data-target="#filter-group2">
					<i class="fa fa-toggle-on on"></i>
					<i class="fa fa-toggle-off off"></i>
				</span>
                                        <strong>Интерфейсы</strong>
                                    </div>
                                    <div class="list-group-item-text collapse in" id="filter-group2">
                                        <div class="filter-item">
                                            <input id="filt7" name="filter[]" type="checkbox" value="7" />
                                            <label for="filt7">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Аудиовход&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt8" name="filter[]" type="checkbox" value="8" />
                                            <label for="filt8">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Цифровой вход S/PDIF&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt9" name="filter[]" type="checkbox" value="9" />
                                            <label for="filt9">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">HDMI хаб&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt10" name="filter[]" type="checkbox" value="10" />
                                            <label for="filt10">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Ethernet&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt11" name="filter[]" type="checkbox" value="11" />
                                            <label for="filt11">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">FireWire хаб&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt12" name="filter[]" type="checkbox" value="12" />
                                            <label for="filt12">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">Выход на наушники&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt13" name="filter[]" type="checkbox" value="13" />
                                            <label for="filt13">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">S-video вход&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt14" name="filter[]" type="checkbox" value="14" />
                                            <label for="filt14">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">SCART&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                        <div class="filter-item">
                                            <input id="filt15" name="filter[]" type="checkbox" value="15" />
                                            <label for="filt15">
                                                <i class="fa fa-check-square check-icon check"></i>
                                                <i class="fa fa-square-o check-icon uncheck"></i>
                                                <div class="filter-name">USB хаб&nbsp;<span class="filter-total"></span></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <button type="button" style="display: none;" id="button-clear" class="btn btn-default">Сбросить</button>
                                <button type="button" id="button-filter" class="btn btn-primary">Поиск</button>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('#button-filter').on('click', function() {
                                filter = [];

                                $('input[name^=\'filter\']:checked').each(function(element) {
                                    filter.push(this.value);
                                });

                                location = 'http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&path=20&filter=' + filter.join(',');
                            });
                            if ($('input[name^=\'filter\']').is('input[name^=\'filter\']:checked')) {
                                $('#button-clear').css({'display':'inline'});
                            }
                            $('#button-clear').on('click', function() {
                                location = 'http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&path=20';
                            });
                        </script>
                    </div>
                </div>
                <script>
                    $('#show-modules-col-left').click(function () {
                        $('#col-left-modules').toggleClass('show');
                        $(this).toggleClass('open');
                    });
                </script>
            </div>
            <div id="content" class="col-sm-8 col-md-9">
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
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC"><b>По умолчанию</b></a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC">Название (А - Я)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC">Название (Я - А)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC">Цена (низкая &gt; высокая)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC">Цена (высокая &gt; низкая)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC">Рейтинг (начиная с высокого)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC">Рейтинг (начиная с низкого)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC">Модель (А - Я)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC">Модель (Я - А)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.quantity&amp;order=ASC">Наличие (меньше > больше)</a></li>
                                    <li><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;sort=p.quantity&amp;order=DESC">Наличие (больше > меньше)</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" title="Показать:" id="limit-button">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="fa fa-eye"></i>&nbsp;&nbsp;
                                    <span class=" button-text">&nbsp;&nbsp;</span><i class="fa fa-angle-down caretalt"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;limit=12"><b>12</b></a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;limit=25">25</a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;limit=50">50</a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;limit=75">75</a></li>
                                    <li class="text-right"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/category&amp;path=20&amp;limit=100">100</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=28"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-220x220.jpg" alt=" Смартфон HTC Windows Phone 8X" title=" Смартфон HTC Windows Phone 8X" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=28"> Смартфон HTC Windows Phone 8X</a></div>
                                    <p class="description">
                                        HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high de..</p>



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
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('28');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('28')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('28')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('28');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('28');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=48"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_classic_1-220x220.jpg" alt="MP3 плеер Apple iPod classic 160Gb" title="MP3 плеер Apple iPod classic 160Gb" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=48">MP3 плеер Apple iPod classic 160Gb</a></div>
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
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=35"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/placeholder-220x220.png" alt="Product 8" title="Product 8" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=35">Product 8</a></div>
                                    <p class="description">
                                        Product 8
                                        ..</p>



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
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('35');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('35')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('35')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('35');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('35');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=30"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/canon_eos_5d_1-220x220.jpg" alt="Камера Canon EOS 5D Mark III Kit 24-105 IS" title="Камера Canon EOS 5D Mark III Kit 24-105 IS" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=30">Камера Canon EOS 5D Mark III Kit 24-105 IS</a></div>
                                    <p class="description">
                                        Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we'r..</p>



                                    <p class="price">
                                        <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 80.00</span>
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
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('30');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('30')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('30')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('30');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('30');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=42"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/apple_cinema_30-220x220.jpg" alt="Монитор Apple Thunderbolt Display 27&quot; (MC914)" title="Монитор Apple Thunderbolt Display 27&quot; (MC914)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=42">Монитор Apple Thunderbolt Display 27&quot; (MC914)</a></div>
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
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=43"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_1-220x220.jpg" alt="Ноутбук Apple MacBook 512GB (2015 год)" title="Ноутбук Apple MacBook 512GB (2015 год)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=43">Ноутбук Apple MacBook 512GB (2015 год)</a></div>
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
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=44"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_air_1-220x220.jpg" alt="Ноутбук Apple MacBook Air 13'' (MC965LL/A)" title="Ноутбук Apple MacBook Air 13'' (MC965LL/A)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=44">Ноутбук Apple MacBook Air 13'' (MC965LL/A)</a></div>
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
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=47"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/hp_1-220x220.jpg" alt="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" title="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=47">Ноутбук HP ENVY TouchSmart 15-j000 (AMD)</a></div>
                                    <p class="description">
                                        Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel ..</p>



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
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('47');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('47')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('47')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('47');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('47');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=46"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/sony_vaio_1-220x220.jpg" alt="Ноутбук Sony VAIO Tap 11 SVT1122X9RW" title="Ноутбук Sony VAIO Tap 11 SVT1122X9RW" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=46">Ноутбук Sony VAIO Tap 11 SVT1122X9RW</a></div>
                                    <p class="description">
                                        Unprecedented power. The next generation of processing technology has arrived. Built into the new..</p>



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
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('46');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('46')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('46')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('46');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('46');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=33"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/samsung_syncmaster_941bw-220x220.jpg" alt="Профессиональный монитор Samsung S27D590P" title="Профессиональный монитор Samsung S27D590P" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=33">Профессиональный монитор Samsung S27D590P</a></div>
                                    <p class="description">
                                        Imagine the advantages of going big without slowing down. The big 19&quot; 941BW monitor combines..</p>



                                    <p class="price">
                                        $ 200.00                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('33');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('33')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('33')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('33');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('33');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=40"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/iphone_1-220x220.jpg" alt="Смартфон Apple iPhone 6 Plus (16Gb)" title="Смартфон Apple iPhone 6 Plus (16Gb)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=40">Смартфон Apple iPhone 6 Plus (16Gb)</a></div>
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
                                        &nbsp;&nbsp;<a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=40">1 отзывов</a>
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
                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb thumbnail ">
                            <div class="image"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=29"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/palm_treo_pro_1-220x220.jpg" alt="Смартфон Samsung Galaxy S6 edge (32GB) (G925)" title="Смартфон Samsung Galaxy S6 edge (32GB) (G925)" class="img-responsive center-block" /></a></div>
                            <div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;path=20&amp;product_id=29">Смартфон Samsung Galaxy S6 edge (32GB) (G925)</a></div>
                                    <p class="description">
                                        Redefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to b..</p>



                                    <p class="price">
                                        $ 279.99                                                    </p>
                                    <p class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        &nbsp;&nbsp;0 отзывов</a>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-addtocart" onclick="cart.add('29');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                        <button class="btn btn-addtocart" onclick="qview('29')" data-toggle="tooltip" title="Быстрый просмотр">
                                            <i class="fa fa-eye fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down caretalt"></i>
                                        </button>
                                        <ul class="dropdown-menu addtocart-additional">
                                            <li><a onclick="fastorder('29')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                            <li><a onclick="wishlist.add('29');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                            <li><a rel="nofollow" onclick="compare.add('29');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
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
                    <div class="col-sm-6 text-right">Показано с 1 по 12 из 12 (всего 1 страниц)</div>
                </div>

                <div class="red-links">
                    <div class="pull-left">
                        <?= DisplayImage::widget([
                            'width' => 80,
                            'height'=> 80,
                            'options'=>[
                                'class'=>"img-thumbnail",
                                'style'=>"margin: 0 10px 5px 0;",
                            ],
                            'name'=>$category->name,
                            'image' => $category->image,
                            'category' => 'all',
                            'cacheSeconds' => 'auto',
                        ]);
                        ?>
                    </div>
                    <?= $category->description ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function adddotdotdot($element) {
            $(".subcategory .name-wrapper").dotdotdot();
        }
        $(document).ready(adddotdotdot);
        $(window).resize(adddotdotdot);

        $(function(){
            $('#limit-button').find('.button-text').prepend($('#limit-button').find("b").text());
            $('#sort-button').find('.button-text').prepend($('#sort-button').find("b").text());
        });
    </script>
</div>
