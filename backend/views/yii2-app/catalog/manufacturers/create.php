<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Manufacturers */

$this->title = 'Новый производитель';
$this->params['breadcrumbs'][] = ['label' => 'Производители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manufacturers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
