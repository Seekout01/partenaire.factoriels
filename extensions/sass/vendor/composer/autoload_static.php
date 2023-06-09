<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a5527c2e562d10a587cb3ffc45ca94c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ExtendedScssc' => __DIR__ . '/..' . '/artem-frolov/yii-sass/ExtendedScssc.php',
        'SassHandler' => __DIR__ . '/..' . '/artem-frolov/yii-sass/SassHandler.php',
        'scss_compass' => __DIR__ . '/..' . '/artem-frolov/scssphp-compass/compass.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a5527c2e562d10a587cb3ffc45ca94c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a5527c2e562d10a587cb3ffc45ca94c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a5527c2e562d10a587cb3ffc45ca94c::$classMap;

        }, null, ClassLoader::class);
    }
}
