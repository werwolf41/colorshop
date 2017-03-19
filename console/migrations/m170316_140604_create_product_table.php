<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product`.
 */
class m170316_140604_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'description'=>$this->text(),
            'model'=>$this->string(255)->notNull()->unique(),
            'article'=>$this->string(255),
            'price'=>$this->decimal(20,5)->notNull()->defaultValue(0.00000),
            'status' => $this->integer(1),
            'stock_status_id'=> $this->integer(1),
            'quantity'=>$this->integer(20),
            'image'=> $this->string(),
            'length'=>$this->decimal(20,5)->defaultValue(0.00000),
            'width'=>$this->decimal(20,5)->defaultValue(0.00000),
            'height'=>$this->decimal(20,5)->defaultValue(0.00000),
            'weight'=>$this->decimal(20,5)->defaultValue(0.00000),
            'title'=>$this->string(),
            'meta_desc'=>$this->text(),
            'meta_keywords'=>$this->text(),
            'alias'=>$this->string(255)->unique(),
            'sort' => $this->integer(11),
            'created_at' => $this->integer(),
            'update_at' => $this->integer(),
        ],$tableOptions);

        $this->createIndex('idx_product_name', '{{%product}}', 'name');
        $this->createIndex('idx_product_model', '{{%product}}', 'model');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropIndex('idx_product_model', '{{%product}}');
        $this->dropIndex('idx_product_name', '{{%product}}');
        $this->dropTable('{{%product}}');
    }
}
