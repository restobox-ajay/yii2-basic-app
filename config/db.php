<?php

if (YII_ENV == 'local'){
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2_basic_app',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ];
}else if(YII_ENV == 'dev'){
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=',
        'username' => '',
        'password' => '',
        'charset' => 'utf8',
    ];
}else{
	return [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=localhost;dbname=',
		'username' => '',
		'password' => '',
		'charset' => 'utf8',
		'enableSchemaCache' => true,
		'schemaCacheDuration' => 60,
		'schemaCache' => 'cache',
	];
}