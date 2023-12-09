<?php

namespace Enviaflores\UI\Atoms\UI;

class TextNode
{
    public function __construct(private string $text)
    {
    }

    public function toHtml(): string
    {
        return $this->text;
    }

    public static function make(string $text): static
    {
        return new static($text);
    }
}
