<?php

declare(strict_types=1);

namespace Chubbyphp\Translation;

interface TranslatorInterface
{
    /**
     * @param string $locale
     * @param string $key
     * @param array  $args
     *
     * @return string
     */
    public function translate(string $locale, string $key, array $args = []): string;
}
