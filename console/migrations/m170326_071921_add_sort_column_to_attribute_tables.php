<?php

use yii\db\Migration;

class m170326_071921_add_sort_column_to_attribute_tables extends Migration
{
    public function up()
    {
        $this->addColumn('{{%attribute_group}}', 'sort', $this->integer(11));

        $this->addColumn('{{%attribute}}', 'sort', $this->integer(11));
    }

    public function down()
    {
        $this->dropColumn('{{%attribute_group}}', 'sort');

        $this->dropColumn('{{%attribute_group}}', 'sort');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
