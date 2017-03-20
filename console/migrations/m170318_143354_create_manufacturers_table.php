<?php

use yii\db\Migration;

/**
 * Handles the creation for table `manufacturers`.
 */
class m170318_143354_create_manufacturers_table extends Migration
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

        $this->createTable('{{%manufacturers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
            'image'=> $this->string(),
            'status' => $this->integer(1),
            'metatitle' => $this->string(),
            'metaDescription' => $this->string(),
            'keywords'=>$this->string(),
            'alias' => $this->string(255)->unique()->notNull(),
            'sort' => $this->integer(11),
            'created_at' => $this->integer(),
            'update_at' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('idx_manufacturers_name', '{{%manufacturers}}', 'name');

        $this->addForeignKey('fk_product_manufacturer_id_manufacturers_id', '{{%product}}', 'manufacturer_id', '{{%manufacturers}}', 'id');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%manufacturers}}');
    }
}
