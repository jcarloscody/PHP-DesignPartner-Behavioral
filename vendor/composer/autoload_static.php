<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca219f944f15c8874f1deed58d9e2e9e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Project\\DesignPattern\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Project\\DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca219f944f15c8874f1deed58d9e2e9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca219f944f15c8874f1deed58d9e2e9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca219f944f15c8874f1deed58d9e2e9e::$classMap;

        }, null, ClassLoader::class);
    }
}
