<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit936d7af0a5e4575850ddc20fe5bb9de1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit936d7af0a5e4575850ddc20fe5bb9de1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit936d7af0a5e4575850ddc20fe5bb9de1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit936d7af0a5e4575850ddc20fe5bb9de1::$classMap;

        }, null, ClassLoader::class);
    }
}
