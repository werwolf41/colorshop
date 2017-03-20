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


$this->title = 'Производители';


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
        <div class="row">
            <div id="content" class="col-sm-12">
                <h1>Производители</h1>
                <div class="row">
                    <?php if(isset($manufacturers)){?>
                        <?php foreach ($manufacturers as $manufacturer){?>

                            <div class="col-sm-3">

                                <?= Html::a(DisplayImage::widget([
                                    /*'width' => 80,
                                    'height'=> 80,*/
                                    'options'=>[
                                        'class'=>"img-thumbnail",
                                        'style'=>"margin: 0 10px 5px 0;",
                                    ],
                                    'name'=>$manufacturer->name,
                                    'image' => $manufacturer->image,
                                    'category' => 'all',
                                    'cacheSeconds' => 'auto',
                                ]),
                                    Url::to(['/manufacturers/manufacturer', 'alias'=>$manufacturer->alias])
                                )?>
                            </div>

                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

