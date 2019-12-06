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

    /**
     *
     *https://github.com/symfony/symfony/blob/5.0/src/Symfony/Bridge/Twig/Extension/TranslationExtension.php :
     * public function trans(string $message, array $arguments = [], string $domain = null, string $locale = null, int $count = null):
     *
     * @param string $message
     * @param array $arguments
     * @param string|null $domain
     * @param string|null $locale
     * @param int|null $count
     * @return mixed
     */
    public static function __(string $message, array $arguments = [], string $domain = null, string $locale = null, int $count = null) {
        return __($message, $domain);
    }

}