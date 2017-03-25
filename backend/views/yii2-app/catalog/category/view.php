<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use dmstr\widgets\Alert;
use yii\helpers\Url;
use backend\controllers\catalog\ManufacturersController;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Alert::widget()?>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить эту категорию?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/category'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute'=>'image',
                'value'=>$model->image,
                'format' => ['image',[
                    'width' => 200,
                    'alt' => $model->name,
                    'class'=>'img-responsive'
                ]],
            ],
            'name',
            'description:html',
            'parent.name',
            [
                'attribute'=>'status',
                'value'=>ManufacturersController::getStatusLabel($model),
            ],
            'metatitle',
            'metaDescription',
            'keywords',
            'alias',
            'sort',
            'created_at:dateTime',
            'update_at:dateTime',
        ],
    ]) ?>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить эту каьегорию?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/category'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

</div>
