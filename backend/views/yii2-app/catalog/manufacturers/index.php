<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ManufacturersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Производители';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manufacturers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый производитель', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'description:ntext',
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
