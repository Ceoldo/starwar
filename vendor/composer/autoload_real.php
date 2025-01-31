<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2422dde760d8705c69da5bbf77c45f9d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit2422dde760d8705c69da5bbf77c45f9d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2422dde760d8705c69da5bbf77c45f9d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2422dde760d8705c69da5bbf77c45f9d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
