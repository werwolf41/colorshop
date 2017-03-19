<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "cs_manufacturers".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property integer $status
 * @property string $metatitle
 * @property string $metaDescription
 * @property string $keywords
 * @property string $alias
 * @property integer $sort
 * @property integer $created_at
 * @property integer $update_at
 *
 * @property Product[] $products
 */
class Manufacturers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cs_manufacturers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status', 'sort', 'created_at', 'update_at'], 'integer'],
            [['name', 'image', 'metatitle', 'metaDescription', 'keywords', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Производитель',
            'description' => 'Описание',
            'image' => 'Изображение',
            'status' => 'Статус',
            'metatitle' => 'Metatitle',
            'metaDescription' => 'Meta Description',
            'keywords' => 'Keywords',
            'alias' => 'Alias',
            'sort' => 'Порядок сортировки',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'update_at',
                ],
                'value' => function() {
                    return date('U'); // unix timestamp
                },
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['manufacturer_id' => 'id']);
    }
}
