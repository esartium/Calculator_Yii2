<?php

use yii\db\Migration;
class m231030_200319_soya extends Migration
{
    public function safeUp()
    {
        $this->createTable('soya', [
            
                'id' => $this->primaryKey(),
            'tonnazh' => $this->integer(3),
            'yanvar' => $this->integer(3),
            'fevral' => $this->integer(3),
            'avgust' => $this->integer(3),
            'sentbr' => $this->integer(3),
            'octbr' => $this->integer(3),
            'novmbr' => $this->integer(3),
        ]);
    
        $this->insert('soya', [
            'id' => 1,
            'tonnazh'=> '25',
            'yanvar' => '137',
                'fevral' => '125',
                'avgust' => '124',
                'sentbr' => '122',
                'octbr' => '137',
                'novmbr' => '121',
        ]);
    
        $this->insert('soya', [
            'id' => 2,
            'tonnazh'=> '50',
            'yanvar' => '147',
                'fevral' => '145',
                'avgust' => '145',
                'sentbr' => '143',
                'octbr' => '119',
                'novmbr' => '118',
        ]);
    
        $this->insert('soya', [
            'id' => 3,
            'tonnazh'=> '75',
            'yanvar' => '112',
                'fevral' => '136',
                'avgust' => '136',
                'sentbr' => '112',
                'octbr' => '141',
                'novmbr' => '137',
        ]);
    
        $this->insert('soya', [
            'id' => 4,
            'tonnazh'=> '100',
            'yanvar' => '122',
                'fevral' => '138',
                'avgust' => '138',
                'sentbr' => '117',
                'octbr' => '117',
                'novmbr' => '142',
        ]);










        //     'id' => $this->primaryKey(),
        //     'тоннаж' => $this->integer(3),
        //     'январь' => $this->integer(3),
        //     'февраль' => $this->integer(3),
        //     'август' => $this->integer(3),
        //     'сентябрь' => $this->integer(3),
        //     'октябрь' => $this->integer(3),
        //     'ноябрь' => $this->integer(3),
        // ]);

        // $this->insert('soya', [
        //     'id' => 1,
        //     'тоннаж'=> '25',
        //     'январь' => '137',
        //         'февраль' => '125',
        //         'август' => '124',
        //         'сентябрь' => '122',
        //         'октябрь' => '137',
        //         'ноябрь' => '121',
        // ]);

        // $this->insert('soya', [
        //     'id' => 2,
        //     'тоннаж'=> '50',
        //     'январь' => '147',
        //         'февраль' => '145',
        //         'август' => '145',
        //         'сентябрь' => '143',
        //         'октябрь' => '119',
        //         'ноябрь' => '118',
        // ]);

        // $this->insert('soya', [
        //     'id' => 3,
        //     'тоннаж'=> '75',
        //     'январь' => '112',
        //         'февраль' => '136',
        //         'август' => '136',
        //         'сентябрь' => '112',
        //         'октябрь' => '141',
        //         'ноябрь' => '137',
        // ]);

        // $this->insert('soya', [
        //     'id' => 4,
        //     'тоннаж'=> '100',
        //     'январь' => '122',
        //         'февраль' => '138',
        //         'август' => '138',
        //         'сентябрь' => '117',
        //         'октябрь' => '117',
        //         'ноябрь' => '142',
        // ]);
    }

//     $this->createTable('soya', [
//         // 'id' => $this->primaryKey(), это исходный варик
//         'id' => $this->primaryKey(),
//         'tonnazh' => $this->integer(3),
//         'yanvar' => $this->integer(3),
//         'fevral' => $this->integer(3),
//         'avgust' => $this->integer(3),
//         'sentbr' => $this->integer(3),
//         'octbr' => $this->integer(3),
//         'novmbr' => $this->integer(3),
//     ]);

//     $this->insert('soya', [
//         'id' => 1,
//         'tonnazh'=> '25',
//         'yanvar' => '137',
//             'fevral' => '125',
//             'avgust' => '124',
//             'sentbr' => '122',
//             'octbr' => '137',
//             'novmbr' => '121',
//     ]);

//     $this->insert('soya', [
//         'id' => 2,
//         'tonnazh'=> '50',
//         'yanvar' => '147',
//             'fevral' => '145',
//             'avgust' => '145',
//             'sentbr' => '143',
//             'octbr' => '119',
//             'novmbr' => '118',
//     ]);

//     $this->insert('soya', [
//         'id' => 3,
//         'tonnazh'=> '75',
//         'yanvar' => '112',
//             'fevral' => '136',
//             'avgust' => '136',
//             'sentbr' => '112',
//             'octbr' => '141',
//             'novmbr' => '137',
//     ]);

//     $this->insert('soya', [
//         'id' => 4,
//         'tonnazh'=> '100',
//         'yanvar' => '122',
//             'fevral' => '138',
//             'avgust' => '138',
//             'sentbr' => '117',
//             'octbr' => '117',
//             'novmbr' => '142',
//     ]);
// }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo потом убрать, пусть будет пока
        // echo "m101129_185401_create_news_table cannot be reverted.\n";
        //

        // это надо:
        $this->dropTable('soya');

        // return false; //вроде тоже убрать
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231030_200319_soya cannot be reverted.\n";

        return false;
    }
    */
}
