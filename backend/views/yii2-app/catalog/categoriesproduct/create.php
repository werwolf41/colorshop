<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CategoriesProduct */

$this->title = 'Create Categories Product';
$this->params['breadcrumbs'][] = ['label' => 'Categories Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
