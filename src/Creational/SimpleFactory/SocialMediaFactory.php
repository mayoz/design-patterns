<?php

namespace DesignPatterns\Creational\SimpleFactory;

class SocialMediaFactory
{
    /**
     * The list of products supported by the factory.
     *
     * @var array
     */
    protected $networks = [
        'twitter' => Twitter::class,
        'facebook' => Facebook::class,
    ];

    /**
     * Make a new concrete class for the given type.
     *
     * @param  string  $type
     * @return SocialMediaInterface
     *
     * @throws \InvalidArgumentException
     */
    public function make(string $type): SocialMediaInterface
    {
        if (array_key_exists($type, $this->networks)) {
            $class = $this->networks[$type];

            return new $class();
        }

        throw new \InvalidArgumentException("The [{$type}] type is not supported!");
    }
}
