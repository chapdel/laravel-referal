<?php

namespace Chapdel\Referal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chapdel\Referal\Referal
 */
class Referal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Chapdel\Referal\Referal::class;
    }
}
