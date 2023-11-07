<?php

use yii\db\Migration;

class m231103_151259_create_month_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%month}}', [
            'id' => $this->primaryKey(),
            'month' => $this->string(10)->notNull(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->insert('month', [
            'month'=> 'январь'
        ]);

        $this->insert('month', [
            'month'=> 'февраль'
        ]);

        $this->insert('month', [
            'month'=> 'август'
        ]);

        $this->insert('month', [
            'month'=> 'сентябрь'
        ]);

        $this->insert('month', [
            'month'=> 'октябрь'
        ]);

        $this->insert('month', [
            'month'=> 'ноябрь'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%month}}');
    }
}
