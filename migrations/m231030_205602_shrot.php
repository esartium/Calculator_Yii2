<?php

use yii\db\Migration;

class m231030_205602_shrot extends Migration
{
    public function safeUp()
    {
        $this->createTable('shrot', [
            'id' => $this->primaryKey(),
            'тоннаж'=> $this->integer(3)->notNull(),
            'январь' => $this->integer(3)->notNull(),
            'февраль' => $this->integer(3)->notNull(),
            'август' => $this->integer(3)->notNull(),
            'сентябрь' => $this->integer(3)->notNull(),
            'октябрь' => $this->integer(3)->notNull(),
            'ноябрь' => $this->integer(3)->notNull(),
            ]);

            $this->insert('shrot', [
                'id' => 1,
                'тоннаж'=> '25',
                'январь' => '125',
                'февраль' => '121',
                'август' => '137',
                'сентябрь' => '126',
                'октябрь' => '124',
                'ноябрь' => '128',
            ]);
    
            $this->insert('shrot', [
                'id' => 2,
                'тоннаж'=> '50',
                'январь' => '145',
                'февраль' => '118',
                'август' => '119',
                'сентябрь' => '121',
                'октябрь' => '122',
                'ноябрь' => '147',
            ]);
    
            $this->insert('shrot', [
                'id' => 3,
                'тоннаж'=> '75',
                'январь' => '136',
                'февраль' => '137',
                'август' => '141',
                'сентябрь' => '137',
                'октябрь' => '131',
                'ноябрь' => '143',
            ]);
    
            $this->insert('shrot', [
                'id' => 4,
                'тоннаж'=> '100',
                'январь' => '138',
                'февраль' => '142',
                'август' => '117',
                'сентябрь' => '124',
                'октябрь' => '147',
                'ноябрь' => '112',
            ]);
        
    }
    public function safeDown()
    {
        $this->dropTable('shrot');
    }
}