<?php
namespace frontend\controllers;

use yii\web\Controller;

class ManufacturesController extends Controller
{
    public function actionIndex(){
        $manufacturers = Manufacturers::find()->where('status=1')->orderBy('name')->all();
        return $this->render('manufacturers', ['manufacturers'=>$manufacturers]);
    }
}