<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model common\models\Manufacturers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manufacturers-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to('/admin/catalog/manufacturers'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
    <div class="nav-tabs-custom">


        <?= Tabs::widget([
            'items' => [
                [
                    'label' => 'Основные',
                    'content' => $this->render('main', [
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
                <?= Html::a('Назад', Url::to('/admin/catalog/manufacturers'), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
