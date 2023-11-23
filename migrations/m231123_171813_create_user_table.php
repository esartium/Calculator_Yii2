<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m231123_171813_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(35)->notNull(),
            'email' => $this->string(35),
            'password' => $this->string(50)->notNull(),
            'auth_key' => $this->string(35)->defaultExpression('NULL'),
            'access_token' => $this->string(35)->defaultExpression('NULL')
        ]);

        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@pochta.pochta',
            'password' => 'admin',
        ]);

        $this->insert('user', [
            'username' => 'user',
            'email' => 'user@pochta.pochta',
            'password' => 'user',
        ]);

        $this->insert('user', [
            'username' => 'guest',
            'email' => null,
            'password' => 'guest',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
