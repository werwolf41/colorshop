<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новая категория', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'image',
                'filter'=> '',
                'value'=>function($model) {
                  return  Html::img( $model->image, ['width' => 100, 'alt' => $model->name, 'class'=>'img-responsive']);
                },
                'format'=>'raw',
            ],
            //'id',
            [
                'attribute'=>'name',
                'filter'=>Category::find()->select(['name'])->indexBy('name')->column(),
                'value' => function($model){
                    $name = $model->name;
                    if($model->parentId !=''){
                        $p = array();
                        $p[0] = $model->parentId;
                        for($i=0; $p[$i]!=''; $i++){
                            $res = Category::find()->select(['name', 'parentId'])->where(['id'=>$p[$i]])->one();
                            $p[] = $res->parentId;
                            $name = $res->name.' >>> '.$name;
                        }
                    }
                    return $name;
                },
            ],
            // 'description',
            //'parentId',
            [
                'attribute'=>'status',
                'filter'=>[
                    '1'=>'Включена',
                    '0'=>'Отключена',
                ],
                'value'=>function($model){

                },
            ],
            // 'metatitle',
            // 'metaDescription',
            // 'keywords',
            // 'alias',
            [
                'attribute'=>'sort',
                'filter'=>'',
            ],
            // 'created_at',
            // 'update_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
