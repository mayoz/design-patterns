<?php

namespace DesignPatterns\Creational\StaticFactory;

class SocialMediaFactory
{
    /**
     * The list of products supported by the factory.
     *
     * @var array
     */
    protected static $networks = [
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
    public static function make(string $type): SocialMediaInterface
    {
        if (array_key_exists($type, static::$networks)) {
            $class = static::$networks[$type];

            return new $class();
        }

        throw new \InvalidArgumentException("The [{$type}] type is not supported!");
    }
}
