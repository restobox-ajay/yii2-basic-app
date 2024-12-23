<?php

if (YII_ENV == 'local') {
    return [
        'supportEmail' => 'no-reply@yii2-basic-app.local',
        'replyToEmail' => 'info@yii2-basic-app.local',
        'appUrl' => 'http://yii2-basic-app.local',
        'pagination.limit' => 100,
        'bsVersion' => '5.x',
    ];
} elseif (YII_ENV == 'dev') {

} else {

}
