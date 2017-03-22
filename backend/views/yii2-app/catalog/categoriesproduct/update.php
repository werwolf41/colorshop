<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CategoriesProduct */

$this->title = 'Update Categories Product: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categories Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categories-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
