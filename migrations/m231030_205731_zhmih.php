<?php

use yii\db\Migration;

/**
 * Class m231030_205731_zhmih
 */
class m231030_205731_zhmih extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('zhmih', [
            // 'id' => $this->primaryKey(), это исходный варик
            'id' => $this->integer(3)->primaryKey()->notNull()->autoIncrement(),
            'тоннаж'=> $this->integer(3)->notNull(),
            'январь' => $this->integer(3)->notNull(),
            'февраль' => $this->integer(3)->notNull(),
            'август' => $this->integer(3)->notNull(),
            'сентябрь' => $this->integer(3)->notNull(),
            'октябрь' => $this->integer(3)->notNull(),
            'ноябрь' => $this->integer(3)->notNull(),
        ]);

        $this->insert('zhmih', [
            'тоннаж'=> '25',
            'январь' => '',
            'февраль' => '',
            'август' => '',
            'сентябрь' => '',
            'октябрь' => '',
            'ноябрь' => '',
        ]);

        $this->insert('zhmih', [
            'тоннаж'=> '50',
            'январь' => '',
            'февраль' => '',
            'август' => '',
            'сентябрь' => '',
            'октябрь' => '',
            'ноябрь' => '',
        ]);

        $this->insert('zhmih', [
            'тоннаж'=> '75',
            'январь' => '',
            'февраль' => '',
            'август' => '',
            'сентябрь' => '',
            'октябрь' => '',
            'ноябрь' => '',
        ]);

        $this->insert('zhmih', [
            'тоннаж'=> '100',
            'январь' => '',
            'февраль' => '',
            'август' => '',
            'сентябрь' => '',
            'октябрь' => '',
            'ноябрь' => '',
        ]);

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo потом убрать, пусть будет пока
        // echo "m101129_185401_create_news_table cannot be reverted.\n";
        //

        // это надо:
        $this->dropTable('zhmih');

        // return false; //вроде тоже убрать
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231030_205731_zhmih cannot be reverted.\n";

        return false;
    }
    */
}
