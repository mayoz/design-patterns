<?php

namespace DesignPatterns\Structural\Decorator;

class PostService implements Renderable
{
    /**
     * The temporary data values.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Create a new PostService instance.
     *
     * @param  array  $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the data.
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
        return implode(',', $this->getData());
    }
}
