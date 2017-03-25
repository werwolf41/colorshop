<?php

namespace common\models;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "cs_product".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $model
 * @property string $article
 * @property string $price
 * @property integer $status
 * @property integer $stock_status_id
 * @property integer $quantity
 * @property string $image
 * @property string $length
 * @property string $width
 * @property string $height
 * @property string $weight
 * @property string $title
 * @property string $meta_desc
 * @property string $meta_keywords
 * @property string $alias
 * @property integer $sort
 * @property integer $created_at
 * @property integer $update_at
 * @property integer $manufacturer_id
 *
 * @property CategoriesProduct[] $categoriesProducts
 * @property Manufacturers $manufacturer
 * @property StockStatus $stockStatus
 */
class Product extends \yii\db\ActiveRecord
{

    public $category;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cs_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'model', 'price', 'quantity', 'manufacturer_id', 'category'], 'required'],
            [['description', 'meta_desc', 'meta_keywords'], 'string'],
            [['price', 'length', 'width', 'height', 'weight'], 'number'],
            [['status', 'stock_status_id', 'quantity', 'sort', 'created_at', 'update_at', 'manufacturer_id'], 'integer'],
            [['name', 'model', 'article', 'image', 'title', 'alias'], 'string', 'max' => 255],
            [['model'], 'unique'],
            [['alias'], 'unique'],
            [['manufacturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manufacturers::className(), 'targetAttribute' => ['manufacturer_id' => 'id']],
            [['stock_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => StockStatus::className(), 'targetAttribute' => ['stock_status_id' => 'id']],
            ['category', 'safe'],

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
            'model' => 'Модель',
            'article' => 'Артикул',
            'price' => 'Цена',
            'status' => 'Статус',
            'stock_status_id' => 'Статус при отсутствии на складе',
            'quantity' => 'Количество',
            'image' => 'Фото',
            'length' => 'Длина',
            'width' => 'Ширина',
            'weight' => 'Вес',
            'height' => 'Высота',
            'title' => 'Title',
            'meta_desc' => 'Meta Desc',
            'meta_keywords' => 'Meta Keywords',
            'alias' => 'Alias',
            'sort' => 'Порядок сортировки',
            'created_at' => 'Создан',
            'update_at' => 'Изменен',
            'manufacturer_id' => 'Производитель',
            'categoriesProducts' => 'Категории',
            'category' => 'Категории',
            'manufacturer' => 'Производитель'

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
    public function getCategoriesProducts()
    {
        return $this->hasMany(CategoriesProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturers::className(), ['id' => 'manufacturer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockStatus()
    {
        return $this->hasOne(StockStatus::className(), ['id' => 'stock_status_id']);
    }

    public function getCategory(){
        return ArrayHelper::map(CategoriesProduct::find()->where(['product_id'=>$this->id])->all(), 'category_id', 'category_id');
    }

    public function afterSave($insert, $changedAttributes){
        parent::afterSave($insert, $changedAttributes);

        $this->setCategory();

    }

    private function setCategory(){
        CategoriesProduct::deleteAll(['product_id'=>$this->id]);
        foreach ($this->category as $category){
            $catProd = new CategoriesProduct();
            $catProd->product_id = $this->id;
            $catProd->category_id = $category;
            $catProd->save();
        }

        return true;
    }
}
