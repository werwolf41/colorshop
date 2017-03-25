<?php

use yii\db\Migration;

/**
 * Handles the creation of table `attribute`.
 */
class m170325_091112_create_attribute_table extends Migration
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
        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255),
            'type'=>$this->integer(11),
        ], $tableOptions);

        $this->createIndex('idx_attribute_type', '{{%attribute}}', 'type');

        $this->addForeignKey('fk_attribute_type_attribute_group_id', '{{%attribute}}', 'type', '{{%attribute_group}}', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_attribute_type_attribute_group_id', '{{%attribute}}');

        $this->dropIndex('idx_attribute_type', '{{%attribute}}');

        $this->dropTable('{{%attribute}}');
    }
}
