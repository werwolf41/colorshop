<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="content-wrapper"><div class="container">
        <div class="row">
            <div class="col-md-3"><div id="menu-home-helper"></div></div>
            <div class="col-md-9"><div id="slideshow0" class="slideshow" style="max-height:313px;">
                    <div>
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide2-848x311.png" alt="MacBookAir" />
                        <a href="index.php?route=product/product&amp;path=57&amp;product_id=49"><img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide1-848x311.png" alt="iPhone 6" /></a>
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide3-848x311.png" alt="Слайд 1" />
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide4-848x311.png" alt="Слайд 2" />
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/banners/slide7-848x311.png" alt="Слайд 3" />
                    </div>
                </div>
                <script type="text/javascript"><!--
                    $(document).ready(function () {
                        $('#slideshow0 > div').nivoSlider({
                            effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
                            animSpeed: 400,                 // Slide transition speed
                            pauseTime: 6000,                // How long each slide will show
                            startSlide: 0,                  // Set starting Slide (0 index)
                            directionNav: true,             // Next & Prev navigation
                            controlNav: true,               // 1,2,3... navigation
                            controlNavThumbs: false,        // Use thumbnails for Control Nav
                            pauseOnHover: true,             // Stop animation while hovering
                            manualAdvance: false,           // Force manual transitions
                            prevText: ' ',               // Prev directionNav text
                            nextText: ' ',               // Next directionNav text
                            randomStart: false,             // Start on a random slide
                            beforeChange: function(){},     // Triggers before a slide transition
                            afterChange: function(){},      // Triggers after a slide transition
                            slideshowEnd: function(){},     // Triggers after all slides have been shown
                            lastSlide: function(){},        // Triggers when last slide is shown
                            afterLoad: function(){}         // Triggers when slider has loaded
                        });
                    });
                    --></script><div class="row custom-blocks">
                    <div class="col-sm-4">
                        <div class="custom-block">
                            <a href="#">
                                <div class="image">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/blocks_icons/01-50x50.png" alt="Защита заказов" />
                                </div>
                                <div class="text">
                                    <div class="title">Защита заказов</div>
                                    <p>Мы страхуем каждую вашу покупку!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="custom-block">
                            <a href="#">
                                <div class="image">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/blocks_icons/02-50x50.png" alt="Доставка" />
                                </div>
                                <div class="text">
                                    <div class="title">Доставка</div>
                                    <p>Мы отправим ваш заказ в любую точку мира</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="custom-block">
                            <a href="#">
                                <div class="image">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/blocks_icons/03-50x50.png" alt="Поддержка 24/7" />
                                </div>
                                <div class="text">
                                    <div class="title">Поддержка 24/7</div>
                                    <p>У вас возникли вопросы? Мы всегда на связи!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div></div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="panel panel-default box-product">
                    <div class="panel-heading">Мы рекомендуем</div>
                    <div id="xds-featured0" class="panel-body">
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/hp_1-180x180.jpg" alt="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" title="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">Ноутбук HP ENVY TouchSmart 15-j000 (AMD)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/apple_cinema_30-180x180.jpg" alt="Монитор Apple Thunderbolt Display 27&quot; (MC914)" title="Монитор Apple Thunderbolt Display 27&quot; (MC914)" class="img-responsive" />
                                </a>
                                <div class="sticker st-sale " >-10&#37;
                                </div>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">Монитор Apple Thunderbolt Display 27&quot; (MC914)</a></div>
                                <div class="price">
                                    <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 90.00</span>
                                </div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-180x180.jpg" alt=" Смартфон HTC Windows Phone 8X" title=" Смартфон HTC Windows Phone 8X" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28"> Смартфон HTC Windows Phone 8X</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/canon_eos_5d_1-180x180.jpg" alt="Камера Canon EOS 5D Mark III Kit 24-105 IS" title="Камера Canon EOS 5D Mark III Kit 24-105 IS" class="img-responsive" />
                                </a>
                                <div class="sticker st-sale " >-20&#37;
                                </div>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">Камера Canon EOS 5D Mark III Kit 24-105 IS</a></div>
                                <div class="price">
                                    <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 80.00</span>
                                </div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/imac_1-180x180.jpg" alt="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" title="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">Моноблок Apple iMac 21.5'' (ME087C116GRU/A)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                    </div>
                    <script type="text/javascript">
                        $('#xds-featured0').owlCarousel({
                            responsiveBaseWidth: '#xds-featured0',
                            itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                            theme: 'product-carousel',
                            navigation: true,
                            slideSpeed: 200,
                            paginationSpeed: 300,
                            stopOnHover: true,
                            touchDrag: true,
                            mouseDrag: false,
                            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            pagination: false,
                            autoPlay: 45000								});
                    </script>
                </div>		</div>
            <div id="column-right" class="col-sm-4 col-md-3">
                <div class="visible-xs text-right col-show-button">
                    <a class="btn btn-default btn-block" id="show-modules-col-right"><i class="fa fa-eye show-icon"></i><i class="fa fa-eye-slash hid-icon"></i> Правая колонка</a>
                </div>
                <div id="col-right-modules" class="hid-col-right">
                    <div class="panel panel-default box-product">
                        <div class="panel-heading">Товары со скидками</div>
                        <div id="xds-special0" class="panel-body">
                            <div class="product-item">
                                <div class="image">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/apple_cinema_30-180x180.jpg" alt="Монитор Apple Thunderbolt Display 27&quot; (MC914)" title="Монитор Apple Thunderbolt Display 27&quot; (MC914)" class="img-responsive" />
                                    </a>
                                    <div class="sticker st-sale " >-10&#37;</div>
                                </div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=42">Монитор Apple Thunderbolt Display 27&quot; (MC914)</a></div>
                                    <div class="price">
                                        <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 90.00</span>
                                    </div>
                                </div>
                                <div class="buttons">
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
                            <div class="product-item">
                                <div class="image">
                                    <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">
                                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/canon_eos_5d_1-180x180.jpg" alt="Камера Canon EOS 5D Mark III Kit 24-105 IS" title="Камера Canon EOS 5D Mark III Kit 24-105 IS" class="img-responsive" />
                                    </a>
                                    <div class="sticker st-sale " >-20&#37;</div>
                                </div>
                                <div class="caption">
                                    <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=30">Камера Canon EOS 5D Mark III Kit 24-105 IS</a></div>
                                    <div class="price">
                                        <span class="price-old">&nbsp;$ 100.00&nbsp;</span> <span class="price-new">$ 80.00</span>
                                    </div>
                                </div>
                                <div class="buttons">
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
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#xds-special0').owlCarousel({
                                    responsiveBaseWidth: '#xds-special0',
                                    itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                                    theme: 'product-carousel',
                                    navigation: true,
                                    slideSpeed: 200,
                                    paginationSpeed: 300,
                                    stopOnHover: true,
                                    touchDrag: true,
                                    mouseDrag: false,
                                    navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                    pagination: false,
                                    autoPlay: 50000								});
                            });
                        </script>
                    </div>			</div>
            </div>
            <script>
                $('#show-modules-col-right').click(function () {
                    $('#col-right-modules').toggleClass('show');
                    $(this).toggleClass('open');
                });
            </script>
        </div>
        <div class="row">
            <div class="col-sm-8 col-md-9" id="home_position_3">
                <div class="panel panel-default box-product">
                    <div class="panel-heading">Последние поступления</div>
                    <div id="xds-latest0" class="panel-body">
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=49">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/samsung_tab_1-180x180.jpg" alt="Планшет Samsung Galaxy Tab 10.1 Miix 3-830 32Gb Black" title="Планшет Samsung Galaxy Tab 10.1 Miix 3-830 32Gb Black" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=49">Планшет Samsung Galaxy Tab 10.1 Miix 3-830 32Gb Black</a></div>
                                <div class="price">
                                    $ 199.99														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('49');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('49')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('49')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('49');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('49');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_classic_1-180x180.jpg" alt="MP3 плеер Apple iPod classic 160Gb" title="MP3 плеер Apple iPod classic 160Gb" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">MP3 плеер Apple iPod classic 160Gb</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/hp_1-180x180.jpg" alt="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" title="Ноутбук HP ENVY TouchSmart 15-j000 (AMD)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=47">Ноутбук HP ENVY TouchSmart 15-j000 (AMD)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=46">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/sony_vaio_1-180x180.jpg" alt="Ноутбук Sony VAIO Tap 11 SVT1122X9RW" title="Ноутбук Sony VAIO Tap 11 SVT1122X9RW" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=46">Ноутбук Sony VAIO Tap 11 SVT1122X9RW</a></div>
                                <div class="price">
                                    $ 1000.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=45">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/macbook_pro_1-180x180.jpg" alt="Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)" title="Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=45">Ноутбук Apple MacBook Pro 15'' Retina (MC975ZH/A)</a></div>
                                <div class="price">
                                    $ 2000.00														</div>
                            </div>
                            <div class="buttons">
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
                    </div>
                    <script type="text/javascript">
                        $('#xds-latest0').owlCarousel({
                            responsiveBaseWidth: '#xds-latest0',
                            itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                            theme: 'product-carousel',
                            navigation: true,
                            slideSpeed: 200,
                            paginationSpeed: 300,
                            stopOnHover: true,
                            touchDrag: true,
                            mouseDrag: false,
                            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            pagination: false,
                            autoPlay: 40000								});



                    </script>
                </div>					</div>
            <div class="col-sm-4 col-md-3" id="home_position_4">
                <div class="panel panel-default box-product">
                    <div class="panel-heading">Хиты продаж</div>
                    <div id="xds-bestseller0" class="panel-body">
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=31">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/nikon_d300_1-180x180.jpg" alt="Камера Nikon D3000 Kit 18-55mm VR" title="Камера Nikon D3000 Kit 18-55mm VR" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=31">Камера Nikon D3000 Kit 18-55mm VR</a></div>
                                <div class="price">
                                    $ 80.00														</div>
                            </div>
                            <div class="buttons">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-addtocart" onclick="cart.add('31');" title="Купить"><i class="fa fa-shopping-basket fa-fw"></i>&nbsp;&nbsp;Купить </button>
                                    <button class="btn btn-addtocart" onclick="qview('31')" data-toggle="tooltip" title="Быстрый просмотр">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-addtocart dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down caretalt"></i>
                                    </button>
                                    <ul class="dropdown-menu addtocart-additional">
                                        <li><a onclick="fastorder('31')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                                        <li><a onclick="wishlist.add('31');return false;" title="В закладки"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В закладки</a></li>
                                        <li><a rel="nofollow" onclick="compare.add('31');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/ipod_classic_1-180x180.jpg" alt="MP3 плеер Apple iPod classic 160Gb" title="MP3 плеер Apple iPod classic 160Gb" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=48">MP3 плеер Apple iPod classic 160Gb</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/imac_1-180x180.jpg" alt="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" title="Моноблок Apple iMac 21.5'' (ME087C116GRU/A)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=41">Моноблок Apple iMac 21.5'' (ME087C116GRU/A)</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=40">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/iphone_1-180x180.jpg" alt="Смартфон Apple iPhone 6 Plus (16Gb)" title="Смартфон Apple iPhone 6 Plus (16Gb)" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=40">Смартфон Apple iPhone 6 Plus (16Gb)</a></div>
                                <div class="price">
                                    $ 101.00														</div>
                            </div>
                            <div class="buttons">
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
                        <div class="product-item">
                            <div class="image">
                                <a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28">
                                    <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/htc_touch_hd_1-180x180.jpg" alt=" Смартфон HTC Windows Phone 8X" title=" Смартфон HTC Windows Phone 8X" class="img-responsive" />
                                </a>
                            </div>
                            <div class="caption">
                                <div class="name"><a href="http://coloring.xds.by/demo/oc_2.3.x/index.php?route=product/product&amp;product_id=28"> Смартфон HTC Windows Phone 8X</a></div>
                                <div class="price">
                                    $ 100.00														</div>
                            </div>
                            <div class="buttons">
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
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#xds-bestseller0').owlCarousel({
                                responsiveBaseWidth: '#xds-bestseller0',
                                itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
                                theme: 'product-carousel',
                                navigation: true,
                                slideSpeed: 200,
                                paginationSpeed: 300,
                                stopOnHover: true,
                                touchDrag: true,
                                mouseDrag: false,
                                navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                pagination: false,
                                autoPlay: 30000								});
                        });

                    </script>
                </div>					</div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="home_position_5">
                <div id="carousel0" class="carousel">
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/nfl-130x100.png" alt="NFL" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/starbucks-130x100.png" alt="Starbucks" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/disney-130x100.png" alt="Disney" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/dell-130x100.png" alt="Dell" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/harley-130x100.png" alt="Harley Davidson" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/canon-130x100.png" alt="Canon" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/burgerking-130x100.png" alt="Burger King" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/cocacola-130x100.png" alt="Coca Cola" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/sony-130x100.png" alt="Sony" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/redbull-130x100.png" alt="RedBull" class="img-responsive" />
                    </div>
                    <div class="item text-center">
                        <img src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/demo/manufacturer/nintendo-130x100.png" alt="Nintendo" class="img-responsive" />
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#carousel0').owlCarousel({
                            items: 6,
                            autoPlay: 3000,
                            navigation: true,
                            theme: 'carousel',
                            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            pagination: false
                        });
                    });
                </script>				</div>
        </div>
    </div>
    <script type="text/javascript">$(function(){$('#menu-home-helper').css({'min-height': $('#menu-list').outerHeight() - 20});});</script>
</div>


