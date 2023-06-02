<?php
namespace app\assets;
use yii\web\AssetBundle;


class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/mainAssets/plugins/custom/fullcalendar/fullcalendar.bundle.css',

        'web/mainAssets/plugins/custom/datatables/datatables.bundle.css',
        'web/mainAssets/plugins/global/plugins.bundle.css',
        'web/mainAssets/css/style.bundle.css',
        'web/mainAssets/plugins/custom/datatables/datatables.bundle.css',
        'web/mainAssets/css/monstyle.css',
         'web/mainAssetscss/css/bootstrap-video-carousel.min.css',
    ];
    public $js = [
        'web/mainAssets/plugins/global/plugins.bundle.js',
        'web/mainAssets/js/scripts.bundle.js',
        'web/mainAssets/js/custom/authentication/sign-in/general.js',
        'web/mainAssets/js/custom/utilities/modals/create-account.js',
        'web/mainAssets/plugins/custom/datatables/datatables.bundle.js',
        'web/mainAssets/plugins/custom/formrepeater/formrepeater.bundle.js',
        'web/mainAssets/plugins/custom/fullcalendar/fullcalendar.bundle.js',
        'web/mainAssets/js/custom/apps/calendar/calendar.js',


    ];

    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
