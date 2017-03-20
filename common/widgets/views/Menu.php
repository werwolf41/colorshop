<?php
use yii\helpers\Url;
?>

<div class="col-sm-6 col-sm-pull-6 col-md-3 col-md-pull-9 menu-box">
    <nav id="menu" class="btn-group btn-block">

        <button type="button" class="btn btn-menu btn-block dropdown-toggle"  data-toggle="dropdown" ><i class="fa fa-bars"></i>Категории</button>
        <ul id="menu-list" class="dropdown-menu">
            <?php foreach ($categories as $category1){?>
            <li class="">
							<span class="toggle-child">
								<i class="fa fa-plus plus"></i>
								<i class="fa fa-minus minus"></i>
							</span>
                <a class="with-child">
                    <?php if(isset($category1['items'])){?>
                        <i class="fa fa-angle-right arrow"></i>
                    <?php } ?>


                    <img class="icon peace-icon with-hover" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/complectu-24x24.png" alt="Комплектующие 1" />
                    <img class="icon hover-icon" src="http://coloring.xds.by/demo/oc_2.3.x/image/cache/catalog/category_icons/hover/complectu-hover-24x24.png" alt="Комплектующие 2" />


                    <?=$category1['label']?>

                    <span class="mobilink hidden-lg hidden-md" onclick="location.href='<?=Url::to(['/category', 'alias'=>$category1['alias']])?>'" ></span>
                </a>
                <?php if(isset($category1['items'])){?>
                <div class="child-box box-col-1">
                    <div class="row">
                        <?php foreach ($category1['items'] as $category2){?>
                        <div class="col-md-12">
                            <div class="child-box-cell">
                                <div class="h5">
																				<span class="toggle-child2">
											<i class="fa fa-plus plus"></i>
											<i class="fa fa-minus minus"></i>
										</span>
                                    <a href="<?= Url::to(['/category','alias'=>$category2['alias']])?>" class="with-child2">


                                        <span class="livel-down hidden-md hidden-lg">&#8627;</span><?=$category2['label']?></a></div>
                                <?php if(isset($category2['items'])){?>
                                    <?php foreach ($category2['items'] as $category3){?>
                                        <ul class="child2-box">
                                            <li><a href="<?= Url::to(['/category','alias'=>$category3['alias']])?>"><span class="livel-down">&#8627;</span><?=$category3['label']?></a></li>

                                        </ul>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="see-all-categories hidden-xs hidden-sm">
                        <a href="<?=Url::to(['/category', 'alias'=>$category1['alias']])?>">Смотреть Все&nbsp;<?=$category1['label']?></a>
                    </div>
                </div>
                <?php } ?>
            </li>
           <?php }?>
        </ul>
        <div id="menuMask"></div>
        <script>$('#menu-list').hover(function () {$('body').addClass('blured')},function () {$('body').removeClass('blured')});</script>
    </nav>
</div>