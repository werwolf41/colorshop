<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use nex\chosen\Chosen;
use yii\helpers\ArrayHelper;
use common\models\Category;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\CategoriesProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-product-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to(['/catalog/product/view', 'id'=>$model->product_id]), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-sm-12 nav-tabs-custom">

                <?= $form->field($model, 'product_id')->input('hidden')->label(' '); ?>
                <?= $form->field($model, 'category_id')->widget(
                    Chosen::className(), [
                    'items' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
                    'allowDeselect' => false,
                    'disableSearch' => 5, // Search input will be disabled while there are fewer than 5 items
                    'clientOptions' => [
                        'search_contains' => true,
                        'single_backstroke_delete' => false,
                    ],
                    'placeholder' => ' ',
                    //'multiple' => true,

                ]); ?>
            </div>
        </div>

    <div class="box box-primary">
        <div class="box-body pad table-responsive">
            <div class="pull-left">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Сохранить' : '<i class="fa fa-save"></i> Изменить', ['class'=>'btn btn-app']) ?>
            </div>
            <div class="pull-right">
                <?= Html::a('Назад', Url::to(['/catalog/product/view', 'id'=>$model->product_id]), ['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
