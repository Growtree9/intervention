<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94a793df4a857769c5f7cb4a8d8e8904
{
    public static $files = array (
        '60799491728b879e74601d83e38b2cad' => __DIR__ . '/..' . '/illuminate/collections/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jacoby\\Intervention\\Psr\\SimpleCache\\' => 36,
            'Jacoby\\Intervention\\Psr\\Container\\' => 34,
            'Jacoby\\Intervention\\PhpParser\\' => 30,
            'Jacoby\\Intervention\\Illuminate\\Support\\' => 39,
            'Jacoby\\Intervention\\Illuminate\\Contracts\\' => 41,
            'Jacoby\\Intervention\\Brick\\VarExporter\\' => 38,
            'Jacoby\\Intervention\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jacoby\\Intervention\\Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Jacoby\\Intervention\\Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Jacoby\\Intervention\\PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Jacoby\\Intervention\\Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/collections',
            1 => __DIR__ . '/..' . '/illuminate/macroable',
        ),
        'Jacoby\\Intervention\\Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Jacoby\\Intervention\\Brick\\VarExporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/varexporter/src',
        ),
        'Jacoby\\Intervention\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit94a793df4a857769c5f7cb4a8d8e8904::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94a793df4a857769c5f7cb4a8d8e8904::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94a793df4a857769c5f7cb4a8d8e8904::$classMap;

        }, null, ClassLoader::class);
    }
}
