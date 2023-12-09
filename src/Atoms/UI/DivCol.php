<?php

namespace Enviaflores\UI\Atoms\UI;

use Enviaflores\UI\Traits\BootstrapColSizes;

class DivCol extends Div
{
    use BootstrapColSizes;

    public function __construct()
    {
        parent::__construct('div');
        $this->class('col');
    }
}
