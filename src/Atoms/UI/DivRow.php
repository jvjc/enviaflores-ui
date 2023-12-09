<?php

namespace Enviaflores\UI\Atoms\UI;

class DivRow extends Div
{
    public function __construct()
    {
        parent::__construct('div');
        $this->class('row');
    }
}
