<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cc76b8a2a65921892c66bb4b908708b
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6cc76b8a2a65921892c66bb4b908708b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6cc76b8a2a65921892c66bb4b908708b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
