<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd495e6dfcdaf7f9532c7f3c22b21a37e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPattern\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd495e6dfcdaf7f9532c7f3c22b21a37e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd495e6dfcdaf7f9532c7f3c22b21a37e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd495e6dfcdaf7f9532c7f3c22b21a37e::$classMap;

        }, null, ClassLoader::class);
    }
}
