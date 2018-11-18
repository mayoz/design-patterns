<?php

namespace DesignPatterns\Structural\Decorator;

abstract class Decorator implements Renderable
{
    /**
     * The implemented service instance.
     *
     * @var Renderable
     */
    protected $service;

    /**
     * Create a new Decorator instance.
     *
     * @param  Renderable  $service
     * @return void
     */
    public function __construct(Renderable $service)
    {
        $this->service = $service;
    }

    /**
     * {@inheritdoc}
     */
    public function getData(): array
    {
        return $this->service->getData();
    }
}
