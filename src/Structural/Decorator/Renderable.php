<?php

namespace DesignPatterns\Structural\Decorator;

interface Renderable
{
    /**
     * Get the data.
     *
     * @return array
     */
    public function getData(): array;

    /**
     * Get the evaluated contents of the data.
     *
     * @return string
     */
    public function render(): string;
}
