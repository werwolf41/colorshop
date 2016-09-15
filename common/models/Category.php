<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $parentId
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
 * @property Category $parent
 * @property Category[] $categories
 */
class Category extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentId', 'status', 'sort', 'created_at', 'update_at'], 'integer'],
            [['name', 'description', 'image', 'metatitle', 'metaDescription', 'keywords', 'alias'], 'string', 'max' => 255],
            [['parentId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parentId' => 'id']],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'parent.name' => 'Родительская категория',
            'image' => 'Фото',
            'status' => 'Статус',
            'metatitle' => 'Title',
            'metaDescription' => 'MetaDescription',
            'keywords' => 'Keywords',
            'alias' => 'Ссылка',
            'sort' => 'Порядок сортировки',
            'created_at' => 'Создана',
            'update_at' => "Изменена",
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
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parentId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parentId' => 'id']);
    }
}
