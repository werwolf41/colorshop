<?php
namespace frontend\controllers;

use yii\web\Controller;
use common\models\Manufacturers;

class ManufacturersController extends Controller
{
    public function actionIndex(){
        $manufacturers = Manufacturers::find()->select(['name','image','alias'])->where('status=1')->orderBy('name')->all();
        return $this->render('manufacturers', ['manufacturers'=>$manufacturers]);
    }

    public function actionManufacturer($alias){
        $model = Manufacturers::find()->where('alias = "'.$alias.'"')->one();
        return $this->render('manufacturer', ['model'=>$model]);
    }
}