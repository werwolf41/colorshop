<?php

use yii\db\Migration;

/**
 * Handles the creation for table `category`.
 */
class m160914_064337_create_category_table extends Migration
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
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'parentId' => $this->integer(11),
            'image'=> $this->string(),
            'status' => $this->integer(1),
            'metatitle' => $this->string(),
            'metaDescription' => $this->string(),
            'keywords'=>$this->string(),
            'alias' => $this->string(255),
            'sort' => $this->integer(11),
            'created_at' => $this->integer(),
            'update_at' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('idx_category_parentId', '{{%category}}','parentId');
        $this->addForeignKey('fk_category_parentId', '{{%category}}', 'parentId', '{{%category}}', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%category}}');
    }
}
