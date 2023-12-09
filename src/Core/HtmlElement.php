<?php

namespace Enviaflores\UI\Core;

use Enviaflores\UI\Atoms\UI\TextNode;
use Enviaflores\UI\Traits\BootstrapVisibility;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use InvalidArgumentException;

class HtmlElement implements Htmlable
{
    use BootstrapVisibility;

    protected array $attributes = [];

    protected array $children = [];

    public function __construct(public string $tag)
    {
    }

    public function attribute($name, $value = true): static
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    public function id($id): static
    {
        if (empty($id)) {
            return $this;
        }

        return $this->attribute('id', $id);
    }

    public function name(string $name): static
    {
        if (empty($name)) {
            return $this;
        }

        return $this->attribute('name', $name);
    }

    public function data(string|array $key, $value = true): static
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->data($k, $v);
            }

            return $this;
        }

        return $this->attribute('data-'.$key, $value);
    }

    protected function attributesToString(): string
    {
        return implode(' ', array_map(function ($key, $value) {
            if (is_bool($value)) {
                return $value ? $key : '';
            }

            return $key.'="'.htmlentities($value, ENT_QUOTES, 'UTF-8').'"';
        }, array_keys($this->attributes), $this->attributes));
    }

    public function class(string|array $class): static
    {
        $class = is_string($class) ? [$class] : $class;

        $existingClasses = ! empty($this->attributes['class']) ? explode(' ', $this->attributes['class']) : [];

        $mergedClasses = array_unique(array_merge($existingClasses, $class));

        return $this->attribute('class', Arr::toCssClasses($mergedClasses));
    }

    public function style(string|array $style): static
    {
        $style = is_string($style) ? [$style] : $style;

        $existingStyles = ! empty($this->attributes['style']) ? Arr::toCssStyles($this->attributes['style']) : [];

        $mergedStyles = array_unique(array_merge($existingStyles, $style));

        return $this->attribute('style', Arr::toCssStyles($mergedStyles));
    }

    public function content(array|HtmlElement|TextNode|string $children): static
    {
        if (is_array($children)) {
            foreach ($children as $child) {
                $this->addChild($child);
            }
        } else {
            $this->addChild($children);
        }

        return $this;
    }

    private function addChild($child): void
    {
        if (! $this->validChild($child)) {
            throw new InvalidArgumentException('All elements must be instances of HtmlElement, TextNode, or string.');
        }
        if (is_string($child)) {
            $child = TextNode::make($child);
        }
        $this->children[] = $child;
    }

    private function validChild($child): bool
    {
        return $child instanceof HtmlElement || $child instanceof TextNode || is_string($child);
    }

    public function toHtml(): string
    {
        $html = '<'.Str::lower(class_basename($this->tag)).' '.$this->attributesToString().'>';

        foreach ($this->children as $child) {
            $html .= $child->toHtml();
        }

        $html .= '</'.Str::lower(class_basename($this->tag)).'>';

        return $html;
    }
}
