<?php

namespace Luucasfzs\LaravelCircuitBreaker\Provider;

use Luucasfzs\LaravelCircuitBreaker\Store\CacheCircuitBreakerStore;
use Luucasfzs\LaravelCircuitBreaker\Store\CircuitBreakerStoreInterface;
use Illuminate\Support\ServiceProvider;

class CircuitBreakerServiceProvider extends ServiceProvider
{
    public $bindings = [
        CircuitBreakerStoreInterface::class => CacheCircuitBreakerStore::class
    ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/circuit_breaker.php' => config_path('circuit_breaker.php'),
        ]);
    }
}
