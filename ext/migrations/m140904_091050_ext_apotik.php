<?php

use yii\db\Schema;
use yii\db\Migration;

class m140904_091050_ext_apotik extends Migration
{

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ext_sales}}', [
            'id_sales' => Schema::TYPE_INTEGER,
            'dokter' => Schema::TYPE_STRING . '(64) NULL',
            'resep' => Schema::TYPE_STRING . '(64) NULL',
            'extra1' => Schema::TYPE_STRING . '(64) NULL',
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%ext_sales}}');
    }
}