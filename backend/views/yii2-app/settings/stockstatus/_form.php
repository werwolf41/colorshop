<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\StockStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-status-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/settings/stockstatus'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 nav-tabs-custom">
            <div class="col-sm-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/settings/stockstatus'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
