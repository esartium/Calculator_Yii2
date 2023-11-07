<?php

use yii\db\Migration;

class m231103_151241_create_raw_types_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%raw_types}}', [
            'id' => $this->primaryKey(), 
            'raw_types' => $this->string(5),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->insert('raw_types', [
            
            'raw_types' => 'соя'
        ]);

        $this->insert('raw_types', [
            
            'raw_types' => 'жмых'
        ]);

        $this->insert('raw_types', [
            
            'raw_types' => 'шрот'
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('{{%raw_types}}');
    }
}
