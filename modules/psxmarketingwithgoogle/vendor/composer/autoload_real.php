<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit928ff33b5050a944414d2b3805295c3c
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

        spl_autoload_register(array('ComposerAutoloaderInit928ff33b5050a944414d2b3805295c3c', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit928ff33b5050a944414d2b3805295c3c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit928ff33b5050a944414d2b3805295c3c::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInit928ff33b5050a944414d2b3805295c3c::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire928ff33b5050a944414d2b3805295c3c($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire928ff33b5050a944414d2b3805295c3c($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}