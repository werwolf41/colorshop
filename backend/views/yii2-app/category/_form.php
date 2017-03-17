<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use yii\bootstrap\Tabs;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">


    <?php $form = ActiveForm::begin(); ?>
    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', URL::to('category'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
<div class="nav-tabs-custom">
  <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Основные',
            'content' => $this->render('form1', [
                'model'=>$model,
                'form'=>$form,
            ]),
            'active' => true
        ],
        [
            'label' => 'SEO',
            'content' => $this->render('form_SEO', [
                'model'=>$model,
                'form'=>$form,
            ]),
        ],


    ],
    'options'=>[

    ]
    ]);

  ?>
</div>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', URL::to('category'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
