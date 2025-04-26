<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Locale extends BaseConfig
{
    public string $defaultLocale = 'en';
    public bool   $negotiateLocale = true;
    public array  $supportedLocales = ['en'];

    public static function getDefault(): string
    {
        return (new static())->defaultLocale;
    }
}
