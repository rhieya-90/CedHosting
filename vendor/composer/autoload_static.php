<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c6423d2ae88a37821aac96acdd83087
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c6423d2ae88a37821aac96acdd83087::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c6423d2ae88a37821aac96acdd83087::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}