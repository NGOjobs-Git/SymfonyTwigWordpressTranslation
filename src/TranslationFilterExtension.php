<?php

namespace Phylogram\SymfonyTwigWordpressTranslation;

use Twig\TwigFilter;

class TranslationFilterExtension
{

    /**
     * @var string
     */
    private $default_domain;

    public function __construct(string $default_domain)
    {
        $this->default_domain = $default_domain;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('trans', [$this, '__'])
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
    public function __(string $message, array $arguments = [], string $domain = null, string $locale = null, int $count = null) {
        $domain = $domain ?? $this->default_domain;
        return __($message, $domain);
    }

}