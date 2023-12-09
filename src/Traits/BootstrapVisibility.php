<?php

namespace Enviaflores\UI\Traits;

trait BootstrapVisibility
{
    public function hiddenOnAll(): static
    {
        return $this->class('d-none');
    }

    public function hiddenOnXs(): static
    {
        return $this->class('d-none d-sm-block');
    }

    public function hiddenOnSm(): static
    {
        return $this->class('d-sm-none d-md-block');
    }

    public function hiddenOnMd(): static
    {
        return $this->class('d-md-none d-lg-block');
    }

    public function hiddenOnLg(): static
    {
        return $this->class('d-lg-none d-xl-block');
    }

    public function hiddenOnXl(): static
    {
        return $this->class('d-xl-none d-xxl-block');
    }

    public function hiddenOnXxl(): static
    {
        return $this->class('d-xxl-none');
    }

    public function visibleOnAll(): static
    {
        return $this->class('d-block');
    }

    public function visibleOnXs(): static
    {
        return $this->class('d-block d-sm-none');
    }

    public function visibleOnSm(): static
    {
        return $this->class('d-none d-sm-block d-md-none');
    }

    public function visibleOnMd(): static
    {
        return $this->class('d-none d-md-block d-lg-none');
    }

    public function visibleOnLg(): static
    {
        return $this->class('d-none d-lg-block d-xl-none');
    }

    public function visibleOnXl(): static
    {
        return $this->class('d-none d-xl-block d-xxl-none');
    }

    public function visibleOnXxl(): static
    {
        return $this->class('d-none d-xxl-block');
    }

    abstract protected function class(array|string $class): static;
}
