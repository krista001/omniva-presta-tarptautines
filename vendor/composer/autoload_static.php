<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ec40a3d51a73e3fef8d4f0cf41bafdc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Siusk24LT\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Siusk24LT\\' => 
        array (
            0 => __DIR__ . '/..' . '/siusk24lt/api-lib/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ec40a3d51a73e3fef8d4f0cf41bafdc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ec40a3d51a73e3fef8d4f0cf41bafdc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ec40a3d51a73e3fef8d4f0cf41bafdc::$classMap;

        }, null, ClassLoader::class);
    }
}