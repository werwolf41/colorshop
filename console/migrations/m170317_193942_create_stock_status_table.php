<?php

use yii\db\Migration;

/**
 * Handles the creation for table `stock_status`.
 */
class m170317_193942_create_stock_status_table extends Migration
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
        $this->createTable('{{%stock_status}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
        ],$tableOptions);

        $this->addForeignKey('fk_product_stock_status_id_stock_status_id', '{{%product}}', 'stock_status_id', '{{%stock_status}}', 'id', 'SET NULL');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_product_stock_status_id_stock_status_id', '{{%product}}');
        $this->dropTable('{{%stock_status}}');
    }
}
