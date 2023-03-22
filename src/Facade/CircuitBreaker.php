<?php

namespace Luucasfzs\LaravelCircuitBreaker\Facade;

use Luucasfzs\LaravelCircuitBreaker\Manager\CircuitBreakerManager;
use Illuminate\Support\Facades\Facade;

class CircuitBreaker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CircuitBreakerManager::class;
    }
}
