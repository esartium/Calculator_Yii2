<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%history}}`.
 */
class m231123_172117_create_history_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%history}}', [
            'calculation_id' => $this->primaryKey(),
            'username' => $this->string(35),
            'tonnage' => $this->integer()->notNull(),
            'month' => $this->string(10)->notNull(),
            'raw_types' => $this->string(5)->notNull(),
            'price' => $this->integer(3)->notNull(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%history}}');
    }
}
