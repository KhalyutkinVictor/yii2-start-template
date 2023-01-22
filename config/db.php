<?php

return [
    'class' => yii\db\Connection::class,
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=test',
    'username' => 'postgres',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
//    'enableSchemaCache' => true,
//    'schemaCacheDuration' => 60,
//    'schemaCache' => 'cache',
];
