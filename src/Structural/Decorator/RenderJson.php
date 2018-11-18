<?php

namespace DesignPatterns\Structural\Decorator;

class RenderJson extends Decorator
{
    /**
     * Convert the data to its JSON representation.
     *
     * @return string
     */
    public function render(): string
    {
        return json_encode($this->getData());
    }
}
