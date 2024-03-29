<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc769ec57a5206783181650c2a05ac7f4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc769ec57a5206783181650c2a05ac7f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc769ec57a5206783181650c2a05ac7f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc769ec57a5206783181650c2a05ac7f4::$classMap;

        }, null, ClassLoader::class);
    }
}
