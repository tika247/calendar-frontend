<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d720fa7c4d8be13484d7aa5e53087ff
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'server\\model\\' => 13,
            'server\\controller\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'server\\model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/server/model',
        ),
        'server\\controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/server/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d720fa7c4d8be13484d7aa5e53087ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d720fa7c4d8be13484d7aa5e53087ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d720fa7c4d8be13484d7aa5e53087ff::$classMap;

        }, null, ClassLoader::class);
    }
}