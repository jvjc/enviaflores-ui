<?php

namespace Enviaflores\UI\Facades;

use Enviaflores\UI\Atoms\UI\DivCol;
use Illuminate\Support\Facades\Facade;

class UxmalDivCol extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DivCol::class;
    }

    public static function make($name = ''): DivCol
    {
        $element = new DivCol();

        $element->name($name);

        return $element;
    }
}
