<?php

namespace DominionSolutions\FilamentCaptcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DominionSolutions\FilamentCaptcha\FilamentCaptcha
 */
class FilamentCaptcha extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DominionSolutions\FilamentCaptcha\FilamentCaptcha::class;
    }
}
