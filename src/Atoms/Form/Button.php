<?php

namespace Enviaflores\UI\Atoms\Form;

use Enviaflores\UI\Core\HtmlElement;

class Button extends HtmlElement
{
    public function __construct()
    {
        parent::__construct('button');
    }

    public function type(string $type): static
    {
        return $this->attribute('type', $type);
    }
}
