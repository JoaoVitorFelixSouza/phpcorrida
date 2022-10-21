<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04c628546122f53bdae0f9ca9528188e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\phpcorrida\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\phpcorrida\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit04c628546122f53bdae0f9ca9528188e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04c628546122f53bdae0f9ca9528188e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04c628546122f53bdae0f9ca9528188e::$classMap;

        }, null, ClassLoader::class);
    }
}
