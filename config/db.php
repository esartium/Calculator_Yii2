<?php

//хрень:
// $pdo = new PDO("mysql:host=localhost;dbname=yii2basic;port=8889","root","");


// дефолтная (почти) хрень:
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=yii2basic;port=8889',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    // 'enableSchemaCache' => true,
    // 'schemaCacheDuration' => 60,
    // 'schemaCache' => 'cache',
];


// вроде более-менее не хрень:
// return [
// 'components' => [
//     'db' => [
//         'class' => 'yii\db\Connection',
//         'dsn' => 'mysql:host=127.0.0.1;port=8889;dbname=yii2basic;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
//         'username' => 'root',
//         'password' => 'root',
//         'charset' => 'utf8',
//     ],
// ],
// ];



// какая-то хрень:
// $username = 'root';
// $password = '';
// $dsn = 'mysql:host=localhost;port=8889;dbname=yii2basic;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock';
// // $pdo = new PDO($dsn, $username, $password);

// $connection = new \yii\db\Connection([
//     // 'class' => 'yii\db\Connection',
//     'dsn' => $dsn,
//     'username' => $username,
//     'password' => $password,
// ]);
// $connection->open();

