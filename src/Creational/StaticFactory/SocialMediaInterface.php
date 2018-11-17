<?php

namespace DesignPatterns\Creational\StaticFactory;

interface SocialMediaInterface
{
    /**
     * Get the latest feed messages.
     *
     * @param  int  $count
     * @return array
     */
    public function feed(int $count): array;
}
