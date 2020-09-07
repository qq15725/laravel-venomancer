<?php

namespace Wxm\LaravelVenomancer\Facades;

/**
 * @method static string screenshot(string $content, bool $fullPage = true, bool $scroll = true, int $scrollDistance = 100, int $scrollInterval = 0)
 *
 * @property \Wxm\Venomancer\Client $client
 * @property \Wxm\Venomancer\Server $server
 *
 * @see \Wxm\Venomancer\Application
 */
class Venomancer extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'Venomancer';
    }
}
