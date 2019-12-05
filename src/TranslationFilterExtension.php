<?php


namespace Phylogram\SymfonyTwigWordpressTranslation;


use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TranslationFilterExtension extends AbstractExtension
{

    public function getFilters()
    {
        return [
            new TwigFilter('trans', [$this, '__'])
        ];
    }

    public function __($value) {
        return __($value);
    }

}