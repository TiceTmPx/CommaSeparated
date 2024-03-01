<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d604348493d50923f670ebf8d575004
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TiceTmP\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TiceTmP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d604348493d50923f670ebf8d575004::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d604348493d50923f670ebf8d575004::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d604348493d50923f670ebf8d575004::$classMap;

        }, null, ClassLoader::class);
    }
}
