<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e061d4bc5b28285255f39492c97bb06
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'humanconnection\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'humanconnection\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e061d4bc5b28285255f39492c97bb06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e061d4bc5b28285255f39492c97bb06::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
