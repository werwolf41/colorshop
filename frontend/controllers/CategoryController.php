<?php
namespace frontend\controllers;

use yii\web\Controller;
use common\models\Category;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{
    public function actionIndex($alias){
        $category = $this->findCategoryModel($alias);
        $daughters = Category::find()->select(['id', 'name', 'alias'])->where(['alias'=>$alias, 'status'=>1])->all();

        return $this->render('category',[
            'category'=>$category,
            'daughters' =>$daughters,
        ]);
    }



    /**
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findCategoryModel($alias)
    {
        if (($model = Category::findOne(['alias'=>$alias])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}