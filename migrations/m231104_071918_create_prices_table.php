<?php

use yii\db\Migration;

class m231104_071918_create_prices_table extends Migration
{
    public function safeUp() {
        $this->createTable('{{%prices}}', [
            'id' => $this->primaryKey(),
            'raw_types_id' => $this->integer(3)->notNull(),
            'tonnage_id' => $this->integer(3)->notNull(),
            'month_id'=> $this->integer(3)->notNull(),
            'prices' => $this->integer(3)->notNull(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP')
        ]);

        $this->createIndex(
            'idx-prices-raw_types_id',
            'prices',
            'raw_types_id'
        );

        $this->addForeignKey(
            'fk-prices-raw_types_id',
            'prices',
            'raw_types_id',
            'raw_types',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-prices-tonnage_id',
            'prices',
            'tonnage_id'
        );

        $this->addForeignKey(
            'fk-prices-tonnage_id',
            'prices',
            'tonnage_id',
            'tonnage',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-prices-month_id',
            'prices',
            'month_id'
        );

        $this->addForeignKey(
            'fk-prices-month_id',
            'prices',
            'month_id',
            'month',
            'id',
            'CASCADE'
        );

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 1,
                'month_id' => 1,
                'prices' => 137
            ]);
            
            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 2,
                'month_id' => 1,
                'prices' => 147
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 3,
                'month_id' => 1,
                'prices' => 112
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 4,
                'month_id' => 1,
                'prices' => 122
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 1,
                'month_id' => 2,
                'prices' => 125
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 2,
                'month_id' => 2,
                'prices' => 145
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 3,
                'month_id' => 2,
                'prices' => 136
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 4,
                'month_id' => 2,
                'prices' => 138
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 1,
                'month_id' => 3,
                'prices' => 124
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 2,
                'month_id' => 3,
                'prices' => 145
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 3,
                'month_id' => 3,
                'prices' => 136
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 4,
                'month_id' => 3,
                'prices' => 138
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 1,
                'month_id' => 4,
                'prices' => 122
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 2,
                'month_id' => 4,
                'prices' => 143
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 3,
                'month_id' => 4,
                'prices' => 112
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 4,
                'month_id' => 4,
                'prices' => 117
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 1,
                'month_id' => 5,
                'prices' => 137
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 2,
                'month_id' => 5,
                'prices' => 119
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 3,
                'month_id' => 5,
                'prices' => 141
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 4,
                'month_id' => 5,
                'prices' => 117
            ]);

            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 1,
                'month_id' => 6,
                'prices' => 121
            ]);
            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 2,
                'month_id' => 6,
                'prices' => 118
            ]);
            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 3,
                'month_id' => 6,
                'prices' => 137
            ]);
            $this->insert('prices', [
                'raw_types_id' => 1,
                'tonnage_id' => 4,
                'month_id' => 6,
                'prices' => 142
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 1,
                'month_id' => 1,
                'prices' => 121
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 2,
                'month_id' => 1,
                'prices' => 118
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 3,
                'month_id' => 1,
                'prices' => 137
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 4,
                'month_id' => 1,
                'prices' => 142
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 1,
                'month_id' => 2,
                'prices' => 137
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 2,
                'month_id' => 2,
                'prices' => 121
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 3,
                'month_id' => 2,
                'prices' => 124
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 4,
                'month_id' => 2,
                'prices' => 131
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 1,
                'month_id' => 3,
                'prices' => 124
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 2,
                'month_id' => 3,
                'prices' => 145
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 3,
                'month_id' => 3,
                'prices' => 136
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 4,
                'month_id' => 3,
                'prices' => 138
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 1,
                'month_id' => 4,
                'prices' => 137
            ]);

            $this->insert('prices', [           
                'raw_types_id' => 2,
                'tonnage_id' => 2,
                'month_id' => 4,
                'prices' => 147
            ]);

            $this->insert('prices', [            
                'raw_types_id' => 2,
                'tonnage_id' => 3,
                'month_id' => 4,
                'prices' => 143
            ]);

            $this->insert('prices', [               
                'raw_types_id' => 2,
                'tonnage_id' => 4,
                'month_id' => 4,
                'prices' => 112
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 1,
                'month_id' => 5,
                'prices' => 122
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 2,
                'month_id' => 5,
                'prices' => 143
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 3,
                'month_id' => 5,
                'prices' => 112
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 4,
                'month_id' => 5,
                'prices' => 117
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 1,
                'month_id' => 6,
                'prices' => 125
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 2,
                'month_id' => 6,
                'prices' => 145
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 3,
                'month_id' => 6,
                'prices' => 136
            ]);

            $this->insert('prices', [
                'raw_types_id' => 2,
                'tonnage_id' => 4,
                'month_id' => 6,
                'prices' => 138
            ]);
    
            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 1,
                'month_id' => 1,
                'prices' => 125
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 2,
                'month_id' => 1,
                'prices' => 145
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 3,
                'month_id' => 1,
                'prices' => 136
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 4,
                'month_id' => 1,
                'prices' => 138
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 1,
                'month_id' => 2,
                'prices' => 121
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 2,
                'month_id' => 2,
                'prices' => 118
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 3,
                'month_id' => 2,
                'prices' => 137
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 4,
                'month_id' => 2,
                'prices' => 142
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 1,
                'month_id' => 3,
                'prices' => 137
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 2,
                'month_id' => 3,
                'prices' => 119
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 3,
                'month_id' => 3,
                'prices' => 141
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 4,
                'month_id' => 3,
                'prices' => 117
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 1,
                'month_id' => 4,
                'prices' => 126
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 2,
                'month_id' => 4,
                'prices' => 121
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 3,
                'month_id' => 4,
                'prices' => 137
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 4,
                'month_id' => 4,
                'prices' => 124
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 1,
                'month_id' => 5,
                'prices' => 124
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 2,
                'month_id' => 5,
                'prices' => 122
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 3,
                'month_id' => 5,
                'prices' => 131
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 4,
                'month_id' => 5,
                'prices' => 147
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 1,
                'month_id' => 6,
                'prices' => 128
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 2,
                'month_id' => 6,
                'prices' => 147
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 3,
                'month_id' => 6,
                'prices' => 143
            ]);

            $this->insert('prices', [
                'raw_types_id' => 3,
                'tonnage_id' => 4,
                'month_id' => 6,
                'prices' => 112
            ]);

    }
    public function safeDown()
    {
        $this->dropIndex(
            'idx-prices-raw_types_id',
            'prices'
        );

        $this->dropForeignKey(
            'fk-prices-raw_types_id',
            'prices'
        );

        $this->dropIndex(
            'idx-prices-tonnage_id',
            'prices'
        );

        $this->dropForeignKey(
            'fk-prices-tonnage_id',
            'prices'
        );

        $this->dropIndex(
            'idx-prices-month_id',
            'prices'
        );

        $this->dropForeignKey(
            'fk-prices-month_id',
            'prices'
        );

        $this->dropTable('{{%prices}}');

    }

}

