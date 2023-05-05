<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'YATAGUI',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language'=>$_SESSION['lang'],
    //'layout' => 'admin_layout',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [

        'accessClass'=>[
            'class'=>'app\components\accessClass',
        ],
      
     
        'visiteurClass'=>[
            'class'=>'app\components\visiteurClass',
        ],
    
        'nonSqlClass'=>[
            'class' => 'app\components\nonSqlClass', // CLass pour les fichiers
        ],
        
         //telechargement de l'image
         'fileuploadClass'=>[
            'class'=>'app\components\fileuploadClass',
        ],

        'mainCLass' => [
            'class' => 'app\components\mainClass', //class pour les configurations
          ],

          'cryptoClass' => [
            'class' => 'app\components\cryptoClass', //class pour les configurations
          ],

          'entiteCLass' => [
            'class' => 'app\components\entiteCLass', //class pour les configurations
          ],

          'personelClass' => [
            'class' => 'app\components\personelClass', //class pour les configurations
          ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
        ],
        
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '&*()@A^)!(%^&*)@#$%^&*(*^%$_SDF$%^&%^',
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // 'mailer' => [
        //     'class' => \yii\symfonymailer\Mailer::class,
        //     'viewPath' => '@app/mail',
        //     // send all mails to a file by default.
        //     'useFileTransport' => true,
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

               

                md5('visiteur_index')=>'visiteur/index',
                md5('visiteur_addentite')=>'visiteur/addentite',
                md5('visiteur_uniqdata')=>'visiteur/uniqdata',
                md5('visiteur_initier').'/<codeservice:\w+>'=>'visiteur/initier',
                md5('visiteur_bienvenue')=>'visiteur/bienvenue',
                md5('visiteur_finaliser').'/<codesepartenariat:\w+>'=>'visiteur/finaliser',
                md5('visiteur_addfinaliser')=>'visiteur/addfinaliser',
                md5('visiteur_contact')=>'visiteur/contact',

                    //BASIQUES RULES
                md5('site_allajax')=>'site/allajax',
                md5('site_index')=>'site/index',
                md5('deconnexion')=>'site/login',
                md5('login')=>'site/login',
                ''=>'site/index',
               

                
                

                /** DEFAULT RULES **/
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
