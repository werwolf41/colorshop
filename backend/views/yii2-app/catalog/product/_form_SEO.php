<?php

/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 14.09.2016
 * Time: 13:18
 */
?>
<div class="row">
    <div class="col-sm-6">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'meta_desc')->textarea(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
        <?= $form->field($model, 'meta_keywords')->textarea(['maxlength' => true]) ?>

        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
    </div>
</div>
