<?php

namespace Orchid\Platform\Facades;

use Illuminate\Support\Facades\Facade;
use Orchid\Platform\Kernel\Dashboard as Dash;

/**
 * Class Dashboard
 *
 * @package Orchid\Platform\Facades
 */
class Dashboard extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return Dash::class;
    }
}
