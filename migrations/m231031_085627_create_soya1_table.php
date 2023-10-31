<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%soya1}}`.
 */
class m231031_085627_create_soya1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%soya1}}', [
            'id' => $this->primaryKey(),
        'tonnazh' => $this->integer(3),
        'yanvar' => $this->integer(3),
        'fevral' => $this->integer(3),
        'avgust' => $this->integer(3),
        'sentbr' => $this->integer(3),
        'octbr' => $this->integer(3),
        'novmbr' => $this->integer(3),
    ]);

    $this->insert('soya1', [
        'id' => 1,
        'tonnazh'=> '25',
        'yanvar' => '137',
            'fevral' => '125',
            'avgust' => '124',
            'sentbr' => '122',
            'octbr' => '137',
            'novmbr' => '121',
    ]);

    $this->insert('soya1', [
        'id' => 2,
        'tonnazh'=> '50',
        'yanvar' => '147',
            'fevral' => '145',
            'avgust' => '145',
            'sentbr' => '143',
            'octbr' => '119',
            'novmbr' => '118',
    ]);

    $this->insert('soya1', [
        'id' => 3,
        'tonnazh'=> '75',
        'yanvar' => '112',
            'fevral' => '136',
            'avgust' => '136',
            'sentbr' => '112',
            'octbr' => '141',
            'novmbr' => '137',
    ]);

    $this->insert('soya1', [
        'id' => 4,
        'tonnazh'=> '100',
        'yanvar' => '122',
            'fevral' => '138',
            'avgust' => '138',
            'sentbr' => '117',
            'octbr' => '117',
            'novmbr' => '142',
    ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%soya1}}');
    }
}
