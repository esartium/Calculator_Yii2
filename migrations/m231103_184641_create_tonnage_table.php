<?php

use yii\db\Migration;

class m231103_184641_create_tonnage_table extends Migration
{
public function safeUp()
    {
        $this->createTable('{{%tonnage}}', [
            'id' => $this->primaryKey(),
            'tonnage' => $this->integer()->notNull(),
            // 'created_at' => $this->currDateTime()->notNull(),
        ]);

        $this->insert('tonnage', [
            
            'tonnage' => 25
        ]);

        $this->insert('tonnage', [
            
            'tonnage' => 50
        ]);

        $this->insert('tonnage', [
            
            'tonnage' => 75
        ]);

        $this->insert('tonnage', [
            
            'tonnage' => 100
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tonnage}}');
    }
}