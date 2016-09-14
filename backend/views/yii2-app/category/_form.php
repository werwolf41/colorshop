<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use yii\bootstrap\Tabs;
/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">
    <?php $form = ActiveForm::begin(); ?>
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
