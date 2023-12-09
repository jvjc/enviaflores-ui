<?php

namespace Enviaflores\UI\Atoms\UI;

use Enviaflores\UI\Core\HtmlElement;

class Card extends HtmlElement
{
    public function __construct()
    {
        parent::__construct('div');
        $this->class('card');
    }

    public function header(mixed $content): static
    {
        $header = new Div();
        $header->class('card-header');
        $header->content($content);
        $this->content($header);

        return $this;
    }

    public function body($content): static
    {
        $body = new Div();
        $body->class('card-body');
        $body->content($content);
        $this->content($body);

        return $this;
    }

    public function footer($content): static
    {
        $footer = new Div();
        $footer->class('card-footer');
        $footer->content($content);
        $this->content($footer);

        return $this;
    }
}
