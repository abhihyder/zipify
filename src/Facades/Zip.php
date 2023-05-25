<?php

namespace Hyder\Zipify\Facades;

use Illuminate\Support\Facades\Facade;

class Zip extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zip-facade-service';
    }
}
