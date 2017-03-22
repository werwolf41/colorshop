<?php

use yii\db\Migration;

/**
 * Handles the creation for table `categories_product`.
 */
class m170316_144554_create_categories_product_table extends Migration
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
        $this->createTable('{{%categories_product}}', [
            'id' => $this->primaryKey(),
            'product_id'=>$this->integer(11),
            'category_id'=>$this->integer(11),
        ], $tableOptions);

        $this->createIndex('idx_categories_product_product_id', '{{%categories_product}}', 'product_id');
        $this->createIndex('idx_categories_product_category_id', '{{%categories_product}}', 'category_id');

        $this->addForeignKey('fk_categories_product_product_id_product_id', '{{%categories_product}}', 'product_id', '{{%product}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_categories_product_category_id_category_id', '{{%categories_product}}', 'category_id', '{{%category}}', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_categories_product_category_id_category_id', '{{%categories_product}}');
        $this->dropForeignKey('fk_categories_product_product_id_product_id', '{{%categories_product}}');

        $this->dropIndex('idx_categories_product_category_id', '{{%categories_product}}');
        $this->dropIndex('idx_categories_product_product_id', '{{%categories_product}}');

        $this->dropTable('{{%categories_product}}');
    }
}
