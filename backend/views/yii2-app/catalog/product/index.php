<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'image',
                'filter'=> '',
                'value'=>function($model) {
                    return  Html::img( $model->image, ['width' => 100, 'alt' => $model->name, 'class'=>'img-responsive']);
                },
                'format'=>'raw',
            ],
            'name',
            //'description:html',
            'model',
            //'article',
            'price',
            [
                'attribute'=>'status',
                'filter'=>[
                    '1'=>'Включена',
                    '0'=>'Отключена',
                ],
                'value'=>function($model){
                    if($model->status == 1) return "Включена";
                    else return "Отключена";
                },
            ],
            // 'stock_status_id',
            'quantity',
            // 'length',
            // 'width',
            // 'height',
            // 'weight',
            // 'title',
            // 'meta_desc:ntext',
            // 'meta_keywords:ntext',
            // 'alias',
            // 'sort',
            // 'created_at',
            // 'update_at',
            [
                'attribute' =>     'manufacturer',
                'value' => function ($model){
                    return $model->manufacturer->name;
                },
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
