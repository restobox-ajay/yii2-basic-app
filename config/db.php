<?php

if (YII_ENV == 'local'){
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=darbysb_yii',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ];
}else if(YII_ENV == 'dev'){
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=darbysb_yii',
        'username' => 'darbysb_yii',
        'password' => 'hnP#}Den_1G$',
        'charset' => 'utf8',
    ];
}else{
	return [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=localhost;dbname=darbyc_yii',
		'username' => 'darbyc_yii',
		'password' => 'u2LKf6w3fI&T',
		'charset' => 'utf8',
		'enableSchemaCache' => true,
		'schemaCacheDuration' => 60,
		'schemaCache' => 'cache',
	];
}