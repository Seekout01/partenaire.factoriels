<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/mainAssets/css/bootstrap.min.css',
        'web/mainAssets/css/flaticon.css',
        'web/mainAssets/css/menu.css',
		'web/mainAssets/css/dropdown-effects/fade-down.css',
		'web/mainAssets/css/tweenmax.css',
		'web/mainAssets/css/magnific-popup.css',
		'web/mainAssets/css/owl.carousel.min.css',
		'web/mainAssets/css/owl.theme.default.min.css',
        'web/mainAssets/css/blue.css',    
        'web/mainAssets/css/responsive.css', 

	
    ];
    public $js = [

        'web/mainAssets/js/jquery-3.3.1.min.js',
		'web/mainAssets/js/bootstrap.min.js',	
		'web/mainAssets/js/modernizr.custom.js',
		'web/mainAssets/js/jquery.easing.js',
		'web/mainAssets/js/jquery.appear.js',
		'web/mainAssets/js/jquery.stellar.min.js',	
		'web/mainAssets/js/menu.js',
		'web/mainAssets/js/materialize.js',	
		'web/mainAssets/js/jquery.scrollto.js',
		'web/mainAssets/js/owl.carousel.min.js',
		'web/mainAssets/js/imagesloaded.pkgd.min.js',
		'web/mainAssets/js/isotope.pkgd.min.js',
		'web/mainAssets/js/jquery.magnific-popup.min.js',	
		'web/mainAssets/js/hero-request-form.js',
		'web/mainAssets/js/hero-register-form.js',
		// 'web/mainAssets/js/request-form.js',	
		// 'web/Mainassets/js/contact-form.js',
		// 'web/Mainassets/js/comment-form.js',
		// 'web/Mainassets/js/jquery.ajaxchimp.min.js',	
		// 'web/Mainassets/js/jquery.validate.min.js',	
        'web/mainAssets/js/custom.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset'
    ];
}
