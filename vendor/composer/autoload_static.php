<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd45edea308d532ec3ddedaf7f40389f2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd45edea308d532ec3ddedaf7f40389f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd45edea308d532ec3ddedaf7f40389f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
