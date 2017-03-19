<?php
/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 29.09.2016
 * Time: 21:19
 */

namespace common\widgets;

use common\models\Category;

class Menu extends \yii\bootstrap\Widget
{
    public $items = array();

    public function init()
    {
        parent::init();
    }

    public function run(){
        $cat = Category::find()
            ->select(['id','name', 'parentId'])
            ->where(['status'=>1])
            ->orderBy(['parentId' => SORT_ASC])
            ->all();
        $arr_cat =array();
        foreach ($cat as $category){
            if($category->parentId == null){
                $category->parentId = 0;
            }
            if(empty($arr_cat[$category->parentId])) {
                $arr_cat[$category->parentId] = array();
            }
            $arr_cat[$category->parentId][$category->id] = [
                'id' => $category->id,
                'label'=> $category->name,
            ];
        }
        $categories = array();

        for ($i=0; $i<count($arr_cat); $i++){
            $categories = $arr_cat[0];
            foreach ($categories as $cat){
                if(isset($arr_cat[$cat['id']])){
                    $categories[$cat['id']]['items']=$arr_cat[$cat['id']];
                    foreach ($categories[$cat['id']]['items'] as $cat2){
                        if(isset($arr_cat[$cat2['id']])){
                            $categories[$cat['id']]['items'][$cat2['id']]['items']=$arr_cat[$cat2['id']];
                        }
                    }
                }
            }
        }
        return $this->render('Menu', ['categories'=>$categories]);
    }
}
?>

