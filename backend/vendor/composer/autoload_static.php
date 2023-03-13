<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3ef6cb91a30c83afd21f39d1b3355e3
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3ef6cb91a30c83afd21f39d1b3355e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3ef6cb91a30c83afd21f39d1b3355e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3ef6cb91a30c83afd21f39d1b3355e3::$classMap;

        }, null, ClassLoader::class);
    }
}