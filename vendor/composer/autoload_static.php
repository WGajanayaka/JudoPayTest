<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8fd980c9967b5f85fd60c37d0a59215
{
    public static $files = array (
        '8b0cee68ec5cbc5638450ae5e00a32ca' => __DIR__ . '/..' . '/judopay/judopay-sdk/src/Judopay.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'J' => 
        array (
            'Judopay\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Judopay\\' => 
        array (
            0 => __DIR__ . '/..' . '/judopay/judopay-sdk/src/Judopay',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8fd980c9967b5f85fd60c37d0a59215::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8fd980c9967b5f85fd60c37d0a59215::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb8fd980c9967b5f85fd60c37d0a59215::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
