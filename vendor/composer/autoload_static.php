<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef4707be4b8746350262411937bfd2d5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blessedkono\\Pesapal\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blessedkono\\Pesapal\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef4707be4b8746350262411937bfd2d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef4707be4b8746350262411937bfd2d5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
