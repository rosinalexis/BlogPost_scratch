<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd87ed3ce69f5fa6a78e588c889cf9d54
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd87ed3ce69f5fa6a78e588c889cf9d54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd87ed3ce69f5fa6a78e588c889cf9d54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd87ed3ce69f5fa6a78e588c889cf9d54::$classMap;

        }, null, ClassLoader::class);
    }
}
