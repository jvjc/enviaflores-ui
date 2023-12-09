<?php

namespace Enviaflores\UI\Facades;

use Enviaflores\UI\Atoms\UI\Div;
use Illuminate\Support\Facades\Facade;

class UxmalDiv extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Div::class;
    }

    public static function make($name = ''): Div
    {
        $element = new Div();

        $element->name($name);

        return $element;
    }
}
