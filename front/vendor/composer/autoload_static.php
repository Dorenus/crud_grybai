<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit168f5025e8fc7219ec4f17f698aa258a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Front\\' => 6,
        ),
        'A' => 
        array (
            'App\\DB\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Front\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\DB\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit168f5025e8fc7219ec4f17f698aa258a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit168f5025e8fc7219ec4f17f698aa258a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit168f5025e8fc7219ec4f17f698aa258a::$classMap;

        }, null, ClassLoader::class);
    }
}