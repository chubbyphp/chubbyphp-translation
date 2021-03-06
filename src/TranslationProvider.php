<?php

declare(strict_types=1);

namespace Chubbyphp\Translation;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

final class TranslationProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container['translator.providers'] = function () {
            return [];
        };

        $container['translator'] = function () use ($container) {
            return new Translator($container['translator.providers'], $container['logger'] ?? null);
        };
    }
}
