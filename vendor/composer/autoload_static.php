<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb285be96327db6b50a759f932a83c78
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Scheduler\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Scheduler\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb285be96327db6b50a759f932a83c78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb285be96327db6b50a759f932a83c78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb285be96327db6b50a759f932a83c78::$classMap;

        }, null, ClassLoader::class);
    }
}