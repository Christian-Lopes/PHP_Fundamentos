<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfa38e71ca8b199e0acf9031df604ae4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'N' => 
        array (
            'Notification\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Notification\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfa38e71ca8b199e0acf9031df604ae4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfa38e71ca8b199e0acf9031df604ae4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbfa38e71ca8b199e0acf9031df604ae4::$classMap;

        }, null, ClassLoader::class);
    }
}
