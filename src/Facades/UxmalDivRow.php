<?php

namespace Enviaflores\UI\Facades;

use Enviaflores\UI\Atoms\UI\DivRow;
use Illuminate\Support\Facades\Facade;

class UxmalDivRow extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DivRow::class;
    }

    public static function make($name = ''): DivRow
    {
        $element = new DivRow();

        $element->name($name);

        return $element;
    }
}
