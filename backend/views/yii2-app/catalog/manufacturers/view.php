<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use dmstr\widgets\Alert;
use backend\controllers\catalog\ManufacturersController;


/* @var $this yii\web\View */
/* @var $model common\models\Manufacturers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Производители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manufacturers-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Alert::widget()?>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить этого производителя?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/manufacturers'), ['class'=>'btn btn-danger'])?>
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
            [
                'attribute'=>'status',
                'value'=>ManufacturersController::getStatusLabel($model),
            ],
            //'status:boolean',
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
                        'confirm' => 'Вы уверены, что хотите удалить этого производителя?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/manufacturers'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
</div>
