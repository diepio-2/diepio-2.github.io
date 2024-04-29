<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit315aa6346e9bad9620000dcaf722fa76
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SleekDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SleekDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakibtg/sleekdb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit315aa6346e9bad9620000dcaf722fa76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit315aa6346e9bad9620000dcaf722fa76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit315aa6346e9bad9620000dcaf722fa76::$classMap;

        }, null, ClassLoader::class);
    }
}
