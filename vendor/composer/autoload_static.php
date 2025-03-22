<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f75f9ecee49f05043fbb8d09f890a75
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Isidorotorrico\\Inventario\\' => 26,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Isidorotorrico\\Inventario\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f75f9ecee49f05043fbb8d09f890a75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f75f9ecee49f05043fbb8d09f890a75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f75f9ecee49f05043fbb8d09f890a75::$classMap;

        }, null, ClassLoader::class);
    }
}
