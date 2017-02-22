<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7b9699add92b44cc8051b3d158d7e49
{
    public static $classMap = array (
        'NewProject\\Filters\\AuthFilter' => __DIR__ . '/../..' . '/app/NewProject/Filters/AuthFilter.php',
        'NewProject\\Repositories\\UserRepository' => __DIR__ . '/../..' . '/app/NewProject/Repositories/UserRepository.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd7b9699add92b44cc8051b3d158d7e49::$classMap;

        }, null, ClassLoader::class);
    }
}
