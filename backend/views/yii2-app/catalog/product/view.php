<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use dmstr\widgets\Alert;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Alert::widget()?>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить этот товар?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/product'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:html',
            'model',
            'article',
            'price',
            'status',
            'stock_status_id',
            'quantity',
            'image',
            'length',
            'width',
            'height',
            'weight',
            'title',
            'meta_desc:ntext',
            'meta_keywords:ntext',
            'alias',
            'sort',
            'created_at:dateTime',
            'update_at:dateTime',
            [
                'attribute'=>'manufacturer_id',
                'value'=> $model->manufacturer->name
            ],

        ],
    ]) ?>
        </div>
        <div class="col-sm-6">
            <div class="categories-product-index">



                <p>
                    <?= Html::a('Добавить в категорию', ['/catalog/categoriesproduct/create', 'product_id'=>$model->id], ['class' => 'btn btn-success']) ?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => new ActiveDataProvider([
                        'query' => $model->getCategoriesProducts(),
                    ]),
                    'layout' => "{items}\n{pager}",
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                       'category.name',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{update} {delete}',
                            'buttons' => [
                                'update' => function ($url,$model) {
                                    return Html::a(
                                        '<span class="glyphicon glyphicon-pencil"></span>',
                                        ['/catalog/categoriesproduct/update', 'id'=>$model->id]);
                                },
                                'delete' => function ($url,$model) {
                                    return Html::a(
                                        '<span class="glyphicon glyphicon-trash"></span>',
                                        ['/catalog/categoriesproduct/delete', 'id'=>$model->id, 'product_id'=>$model->product_id],
                                        ['data' => [
                                            'confirm' => 'Вы уверены, что хотите удалить эту категорию?',
                                            'method' => 'post',
                                            ]
                                        ]
                                    );
                                },
                            ],
                        ]

                    ],
                ]); ?>
            </div>
        </div>
    </div>


    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить этот товар?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/product'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
</div>
