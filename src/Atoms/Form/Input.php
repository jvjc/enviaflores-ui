<?php

namespace Enviaflores\UI\Atoms\Form;

use Enviaflores\UI\Core\HtmlElementSelfClosingTag;

class Input extends HtmlElementSelfClosingTag
{
    public function __construct()
    {
        parent::__construct('input');
    }

    public function type(string $type): static
    {
        return $this->attribute('type', $type);
    }
}
