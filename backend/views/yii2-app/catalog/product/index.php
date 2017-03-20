<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'model',
            'article',
            // 'price',
            // 'status',
            // 'stock_status_id',
            // 'quantity',
            // 'image',
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
            // 'manufacturer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
