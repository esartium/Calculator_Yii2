<?php

use yii\db\Migration;

/**
 * Class m231101_105738_11111
 */
class m231101_105738_11111 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { // сделать таблицы тоннаж рав тайп месяц и прайсес
        // $this->createTable('tonnage', [
        //     'id' => 
        // ])
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231101_105738_11111 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231101_105738_11111 cannot be reverted.\n";

        return false;
    }
    */
}
