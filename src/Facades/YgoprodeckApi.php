<?php

namespace BCleverly\YgoprodeckApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BCleverly\YgoprodeckApi\YgoprodeckApi
 */
class YgoprodeckApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BCleverly\YgoprodeckApi\YgoprodeckApi::class;
    }
}
