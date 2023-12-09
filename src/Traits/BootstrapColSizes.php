<?php

namespace Enviaflores\UI\Traits;

trait BootstrapColSizes
{
    public function col(int $col): static
    {
        return $this->returnClassWithColCheck($col, 'col');
    }

    public function sm(int $col): static
    {
        return $this->returnClassWithColCheck($col, 'col-sm');
    }

    public function md(int $col): static
    {
        return $this->returnClassWithColCheck($col, 'col-md');
    }

    public function lg(int $col): static
    {
        return $this->returnClassWithColCheck($col, 'col-lg');
    }

    public function xl(int $col): static
    {
        return $this->returnClassWithColCheck($col, 'col-xl');
    }

    public function xxl(int $col): static
    {
        return $this->returnClassWithColCheck($col, 'col-xxl');
    }

    private function returnClassWithColCheck(int $col, string $prefix): static
    {
        if ($col < 1 || $col > 12) {
            throw new \InvalidArgumentException('Value must be between 1 and 12');
        }

        return $this->class("{$prefix}-{$col}");
    }

    abstract protected function class(array|string $class): static;
}
