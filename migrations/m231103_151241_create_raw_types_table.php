<?php

use yii\db\Migration;

class m231103_151241_create_raw_types_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%raw_types}}', [
            'id' => $this->primaryKey(), 
            'raw_types' => $this->string(5),
        ]);

        $this->insert('raw_types', [
            'id' => 1,
            'raw_types' => 'соя'
        ]);

        $this->insert('raw_types', [
            'id' => 2,
            'raw_types' => 'жмых'
        ]);

        $this->insert('raw_types', [
            'id' => 3,
            'raw_types' => 'шрот'
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('{{%raw_types}}');
    }
}
