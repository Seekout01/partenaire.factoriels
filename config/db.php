<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=factorielsdb', 
    'username' => 'postgres',
    'password' => 'root',
    'charset' => 'utf8',
    // 'schemaMap'=>[
    //     'pgsql'=>[
    //         'class'=>'yii\db\pgsql\Schema',
    //         'defaultSchema'=>'fangni',
    //     ]
    // ]

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
