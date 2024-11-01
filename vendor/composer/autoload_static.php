<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60bfda0f13e86b2602674d95b6c75249
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Niteo\\WooCart\\WooDash\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Niteo\\WooCart\\WooDash\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Niteo\\WooCart\\WooDash\\Admin' => __DIR__ . '/../..' . '/inc/Admin.php',
        'Niteo\\WooCart\\WooDash\\Config' => __DIR__ . '/../..' . '/inc/Config.php',
        'Niteo\\WooCart\\WooDash\\Menu' => __DIR__ . '/../..' . '/inc/Menu.php',
        'Niteo\\WooCart\\WooDash\\WooCheck' => __DIR__ . '/../..' . '/inc/WooCheck.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60bfda0f13e86b2602674d95b6c75249::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60bfda0f13e86b2602674d95b6c75249::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60bfda0f13e86b2602674d95b6c75249::$classMap;

        }, null, ClassLoader::class);
    }
}
