<?php

use yii\db\Migration;

class m170318_143128_add_column_manufacturer_product_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%product}}', 'manufacturer_id', $this->integer(11));
    }

    public function down()
    {

        $this->dropColumn('{{%product}}', 'manufacturer_id');

    }
}
