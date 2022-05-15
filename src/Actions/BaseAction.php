<?php

namespace Leeto\MoonShine\Actions;

use Leeto\MoonShine\Contracts\Actions\ActionContract;
use Leeto\MoonShine\Contracts\Resources\ResourceContract;

class BaseAction
{
    protected string $label;

    protected ResourceContract|null $resource;

    public static function make(...$arguments): static
    {
        return new static(...$arguments);
    }

    final public function __construct(string $label)
    {
        $this->setLabel($label);
    }

    public function label(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function resource(): ResourceContract|null
    {
        return $this->resource;
    }

    public function setResource(ResourceContract $resource): static
    {
        $this->resource = $resource;

        return $this;
    }
}