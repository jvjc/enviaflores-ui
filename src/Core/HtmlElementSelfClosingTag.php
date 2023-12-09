<?php

namespace Enviaflores\UI\Core;

use Illuminate\Support\Str;

class HtmlElementSelfClosingTag extends HtmlElement
{
    public function toHtml(): string
    {
        return '<'.Str::lower(class_basename($this->tag)).' '.$this->attributesToString().'/>';
    }
}
