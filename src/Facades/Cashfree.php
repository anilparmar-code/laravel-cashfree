<?php

namespace AnilParmarCode\Cashfree\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnilParmarCode\Cashfree\Cashfree
 */
class Cashfree extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AnilParmarCode\Cashfree\Cashfree::class;
    }
}
