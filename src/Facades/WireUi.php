<?php

namespace Foxws\WireUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Foxws\WireUi\WireUi
 *
 * @method static void routes()
 */
class WireUi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Foxws\WireUi\WireUi::class;
    }
}
