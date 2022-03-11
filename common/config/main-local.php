<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            ///'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
                'dsn' => 'sqlite:'.realpath(__DIR__ . '/../../../frontend/').'/sqlite3.db',
            ///'username' => 'root',
            ///'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
