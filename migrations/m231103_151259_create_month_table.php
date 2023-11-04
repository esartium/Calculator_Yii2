<?php

use yii\db\Migration;

class m231103_151259_create_month_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%month}}', [
            'id' => $this->primaryKey(),
            'month' => $this->string(10)->notNull()
        ]);

        $this->insert('month', [
            'id' => '1',
            'month'=> 'январь'
        ]);

        $this->insert('month', [
            'id' => '2',
            'month'=> 'февраль'
        ]);

        $this->insert('month', [
            'id' => '3',
            'month'=> 'август'
        ]);

        $this->insert('month', [
            'id' => '4',
            'month'=> 'сентябрь'
        ]);

        $this->insert('month', [
            'id' => '5',
            'month'=> 'октябрь'
        ]);

        $this->insert('month', [
            'id' => '6',
            'month'=> 'ноябрь'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%month}}');
    }
}
