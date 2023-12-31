<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite83a17979e0fc3108c7a3f36602ecaf0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsflyer\\AppsflyerPhpSdk\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsflyer\\AppsflyerPhpSdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite83a17979e0fc3108c7a3f36602ecaf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite83a17979e0fc3108c7a3f36602ecaf0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite83a17979e0fc3108c7a3f36602ecaf0::$classMap;

        }, null, ClassLoader::class);
    }
}
