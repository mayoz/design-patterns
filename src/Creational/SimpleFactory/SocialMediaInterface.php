<?php

namespace DesignPatterns\Creational\SimpleFactory;

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
