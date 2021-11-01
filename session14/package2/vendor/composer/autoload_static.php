<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9961ed6a4b6938f60322d33594d485ec
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'makhlouf\\db\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'makhlouf\\db\\' => 
        array (
            0 => __DIR__ . '/..' . '/makhlouf/db-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9961ed6a4b6938f60322d33594d485ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9961ed6a4b6938f60322d33594d485ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9961ed6a4b6938f60322d33594d485ec::$classMap;

        }, null, ClassLoader::class);
    }
}
