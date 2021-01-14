<?php

namespace Abigah\Opine;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abigah\Opine\Opine
 */
class OpineFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'opine';
    }
}
