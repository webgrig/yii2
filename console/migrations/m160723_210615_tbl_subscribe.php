<?php

use yii\db\Migration;

class m160723_210615_tbl_subscribe extends Migration
{
    public function up()
    {
        $this->execute('
            CREATE TABLE `subscribe` (
                `id` int(11) NOT NULL,
                `email` varchar(50) NOT NULL,
                `date_subscribe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
        ');
    }

    public function down()
    {
        $this->dropTable('subscribe');

        return false;
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
