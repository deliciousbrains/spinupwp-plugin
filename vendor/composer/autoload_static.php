<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda430d117603a53ee23aa0f55dcbf6a8
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DeliciousBrains\\SpinupWp\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DeliciousBrains\\SpinupWp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda430d117603a53ee23aa0f55dcbf6a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda430d117603a53ee23aa0f55dcbf6a8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
