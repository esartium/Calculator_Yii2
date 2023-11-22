<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%history}}`.
 */
class m231122_191408_create_history_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%history}}', [
            'calculation_id' => $this->primaryKey(),
            'tonnage' => $this->integer()->notNull(),
            'month' => $this->string(10)->notNull(),
            'raw_types' => $this->string(5),
            'price' => $this->integer(3)->notNull()
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
