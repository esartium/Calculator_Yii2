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
            'id' => $this->primaryKey(),
            'тоннаж'=> $this->integer(3)->notNull(),
            'январь' => $this->integer(3)->notNull(),
            'февраль' => $this->integer(3)->notNull(),
            'август' => $this->integer(3)->notNull(),
            'сентябрь' => $this->integer(3)->notNull(),
            'октябрь' => $this->integer(3)->notNull(),
            'ноябрь' => $this->integer(3)->notNull(),
        ]);

        $this->insert('zhmih', [
            'id' => 1,
            'тоннаж'=> '25',
            'январь' => '121',
                'февраль' => '137',
                'август' => '124',
                'сентябрь' => '137',
                'октябрь' => '122',
                'ноябрь' => '125',
        ]);

        $this->insert('zhmih', [
            'id' => 2,
            'тоннаж'=> '50',
            'январь' => '118',
                'февраль' => '121',
                'август' => '145',
                'сентябрь' => '147',
                'октябрь' => '143',
                'ноябрь' => '145',
        ]);

        $this->insert('zhmih', [
            'id' => 3,
            'тоннаж'=> '75',
            'январь' => '137',
                'февраль' => '124',
                'август' => '136',
                'сентябрь' => '143',
                'октябрь' => '112',
                'ноябрь' => '136',
        ]);

        $this->insert('zhmih', [
            'id'=> 4,
            'тоннаж'=> '100',
            'январь' => '142',
                'февраль' => '131',
                'август' => '138',
                'сентябрь' => '112',
                'октябрь' => '117',
                'ноябрь' => '138',
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