<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite630bdc4fd17e2a8f8906b28ad63f2c9
{
    public static $files = array (
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpOffice\\PhpWord\\' => 18,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Escaper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpOffice\\PhpWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpword/src/PhpWord',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite630bdc4fd17e2a8f8906b28ad63f2c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite630bdc4fd17e2a8f8906b28ad63f2c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite630bdc4fd17e2a8f8906b28ad63f2c9::$classMap;

        }, null, ClassLoader::class);
    }
}