<?php

use yii\db\Migration;

class m160723_205949_tbl_advert extends Migration
{
    public function up()
    {
        $this->execute('
            CREATE TABLE `advert` (
                `id` int(11) NOT NULL,
                `price` mediumint(11) NOT NULL,
                `adrress` varchar(255) NOT NULL,
                `fk_agent` mediumint(11) NOT NULL,
                `bedroom` smallint(1) NOT NULL,
                `livingroom` smallint(1) NOT NULL,
                `parking` smallint(1) NOT NULL,
                `kitchen` smallint(1) NOT NULL,
                `general_image` varchar(255) NOT NULL,
                `description` text NOT NULL,
                `location` varchar(30) NOT NULL,
                `hot` smallint(1) NOT NULL,
                `sold` smallint(1) NOT NULL,
                `type` varchar(50) NOT NULL,
                `recomend` smallint(1) NOT NULL,
                `created_at` int(11) NOT NULL,
                `updated_at` int(11) NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
        ');
    }

    public function down()
    {
        $this->dropTable('advert');

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
