<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit529345e1fcd738545829486eb5de196e
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit529345e1fcd738545829486eb5de196e::$classMap;

        }, null, ClassLoader::class);
    }
}
