<?php

use yii\db\Migration;

/**
 * Handles the creation of table `attribute_group`.
 */
class m170325_090728_create_attribute_group_table extends Migration
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

        $this->createTable('{{%attribute_group}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%attribute_group}}');
    }
}
