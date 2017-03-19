<?php

namespace app\models;

use Yii;

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
            [['name', 'model'], 'required'],
            [['description', 'meta_desc', 'meta_keywords'], 'string'],
            [['price', 'length', 'width', 'height', 'weight'], 'number'],
            [['status', 'stock_status_id', 'quantity', 'sort', 'created_at', 'update_at', 'manufacturer_id'], 'integer'],
            [['name', 'model', 'article', 'image', 'title', 'alias'], 'string', 'max' => 255],
            [['model'], 'unique'],
            [['alias'], 'unique'],
            [['manufacturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manufacturers::className(), 'targetAttribute' => ['manufacturer_id' => 'id']],
            [['stock_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => StockStatus::className(), 'targetAttribute' => ['stock_status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'model' => 'Model',
            'article' => 'Article',
            'price' => 'Price',
            'status' => 'Status',
            'stock_status_id' => 'Stock Status ID',
            'quantity' => 'Quantity',
            'image' => 'Image',
            'length' => 'Length',
            'width' => 'Width',
            'height' => 'Height',
            'weight' => 'Weight',
            'title' => 'Title',
            'meta_desc' => 'Meta Desc',
            'meta_keywords' => 'Meta Keywords',
            'alias' => 'Alias',
            'sort' => 'Sort',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'manufacturer_id' => 'Manufacturer ID',
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
}
