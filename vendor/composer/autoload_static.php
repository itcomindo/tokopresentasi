<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd7d4644c85ddcdc637eea33c32bed61
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd7d4644c85ddcdc637eea33c32bed61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd7d4644c85ddcdc637eea33c32bed61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd7d4644c85ddcdc637eea33c32bed61::$classMap;

        }, null, ClassLoader::class);
    }
}