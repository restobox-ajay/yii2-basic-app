<?php

if (YII_ENV == 'local') {
    return [
        'supportEmail' => 'no-reply@darbys-b2b.local',
        'replyToEmail' => 'info@darbys-b2b.local',
        'appUrl' => 'http://darbys-b2b.local',
        'pagination.limit' => 100,
        'bsVersion' => '5.x',
    ];
} elseif (YII_ENV == 'dev') {

} else {

}

