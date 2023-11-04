<?php

use yii\db\Migration;

class m231103_184641_create_tonnage_table extends Migration
{
public function safeUp()
    {
        $this->createTable('{{%tonnage}}', [
            'id' => $this->primaryKey(),
            'tonnage'=> $this->integer()->notNull()
        ]);

        $this->insert('tonnage', [
            'id' => 1,
            'tonnage' => 25
        ]);

        $this->insert('tonnage', [
            'id' => 2,
            'tonnage' => 50
        ]);

        $this->insert('tonnage', [
            'id' => 3,
            'tonnage' => 75
        ]);

        $this->insert('tonnage', [
            'id' => 4,
            'tonnage' => 100
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tonnage}}');
    }
}