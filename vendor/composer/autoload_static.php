<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3154346d74cf7ed751e9e9bf3f301eee
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3154346d74cf7ed751e9e9bf3f301eee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3154346d74cf7ed751e9e9bf3f301eee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
