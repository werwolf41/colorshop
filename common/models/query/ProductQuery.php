<?php


/**
 * Created by PhpStorm.
 * User: werwolf4
 * Date: 30.09.2016
 * Time: 23:46
 */

namespace common\models\query;

use common\models\Category;
use yii\db\ActiveQuery;

class ProductQuery extends ActiveQuery
{
    public function active()
    {
        return $this->andWhere(['status' => true]);
    }

    /**
     * @param integer $id
     * @return self
     */
    public function forCategory($id)
    {
        $ids = [$id];
        $childrenIds = [$id];
        while ($childrenIds = Category::find()->select('id')->andWhere(['parentId' => $childrenIds])->column()) {
            $ids = array_merge($ids, $childrenIds);
        }
        return $this->andWhere(['category_id' => array_unique($ids)]);
    }
}