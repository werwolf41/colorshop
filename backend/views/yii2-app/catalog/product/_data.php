<?php
/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 25.03.17
 * Time: 10:16
 */

use yii\helpers\ArrayHelper;
use common\models\Manufacturers;
use common\models\StockStatus;
use nex\chosen\Chosen;
use common\models\Category;

/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 14.09.2016
 * Time: 13:18
 */
?>

<div class="row">
    <div class="col-sm-6">
        <?= $form->field($model, 'category')->widget(
            Chosen::className(), [
            'items' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
            'disableSearch' => 5,
            'clientOptions' => [
                'search_contains' => true,
                'single_backstroke_delete' => false,
            ],
            'multiple' => true,
        ]);?>

        <?= $form->field($model, 'manufacturer_id')->dropDownList(ArrayHelper::map(Manufacturers::find()->all(), 'id', 'name')) ?>

        <?= $form->field($model, 'stock_status_id')->dropDownList(ArrayHelper::map(StockStatus::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-sm-6">


        <?= $form->field($model, 'sort')->textInput(['type'=>'number']) ?>

        <?= $form->field($model, 'length')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'width')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
    </div>
</div>