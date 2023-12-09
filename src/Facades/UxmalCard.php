<?php

namespace Enviaflores\UI\Facades;

use Enviaflores\UI\Atoms\UI\Card;
use Illuminate\Support\Facades\Facade;

class UxmalCard extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Card::class;
    }

    public static function make($name = ''): Card
    {
        $element = new Card();

        $element->name($name);

        return $element;
    }
}
