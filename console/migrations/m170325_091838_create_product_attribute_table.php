<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_attribute`.
 */
class m170325_091838_create_product_attribute_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product_attribute}}', [
            'id' => $this->primaryKey(),
            'product_id'=>$this->integer(11),
            'attribute_id'=>$this->integer(11),
            'value'=>$this->text(),
        ], $tableOptions);

        $this->createIndex('idx_product_attribute_product_id', '{{%product_attribute}}', 'product_id');
        $this->createIndex('idx_product_attribute_attribute_id', '{{%product_attribute}}', 'attribute_id');

        $this->addForeignKey('fk_product_attribute_product_id_product_id', '{{%product_attribute}}', 'product_id', '{{%product}}', 'id');
        $this->addForeignKey('fk_product_attribute_attribute_id_attribute_id', '{{%product_attribute}}', 'attribute_id', '{{%attribute}}', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_product_attribute_attribute_id_attribute_id', '{{%product_attribute}}');
        $this->dropForeignKey('fk_product_attribute_product_id_product_id', '{{%product_attribute}}');

        $this->dropIndex('idx_product_attribute_attribute_id', '{{%product_attribute}}');
        $this->dropIndex('idx_product_attribute_product_id', '{{%product_attribute}}');

        $this->dropTable('{{%product_attribute}}');
    }
}
