<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use dmstr\widgets\Alert;

/* @var $this yii\web\View */
/* @var $model common\models\StockStatus */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Stock Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-status-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Alert::widget()?>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить этоn статус?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/settings/stockstatus'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::a('Обновиь', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить этоn статус?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/settings/stockstatus'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

</div>
