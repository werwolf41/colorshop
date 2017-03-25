<?php
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;


/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 14.09.2016
 * Time: 13:18
 */
?>

<div class="row">
    <div class="col-sm-6">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->widget(CKEditor::className(),[
            'editorOptions' => ElFinder::ckeditorOptions(
                [
                    'elfinder',
                ],
                [
                    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ]
            ),
        ]); ?>



    </div>
    <div class="col-sm-6">

        <?= Html::img($model->image,['width'=>400, 'class'=>'img-responsive'])?>
        <?= $form->field($model, 'image')->widget(InputFile::className(),[
            'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'multiple'      => false,
            'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
        ]) ?>
        <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'article')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'quantity')->textInput() ?>

        <?= $form->field($model, 'status')->dropDownList([
            '1'=>'Включена',
            '0'=>'Отключена',
        ]) ?>

    </div>
</div>