<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a95ab604a493bffd3ba1f3bca0f4293
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ryan\\Userretrieval\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ryan\\Userretrieval\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a95ab604a493bffd3ba1f3bca0f4293::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a95ab604a493bffd3ba1f3bca0f4293::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a95ab604a493bffd3ba1f3bca0f4293::$classMap;

        }, null, ClassLoader::class);
    }
}