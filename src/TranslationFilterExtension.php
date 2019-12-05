<?php

namespace Phylogram\SymfonyTwigWordpressTranslation;

use Twig\TwigFilter;

class TranslationFilterExtension
{

    static public function getFilters()
    {
        return [
            new TwigFilter('trans', [self::class, '__'])
        ];
    }

    public static function __($value) {
        return __($value);
    }

}