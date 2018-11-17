<?php

namespace DesignPatterns\Creational\StaticFactory;

class Twitter implements SocialMediaInterface
{
    /**
     * {@inheritdoc}
     */
    public function feed(int $count): array
    {
        $messages = ['lorem', 'ipsum', 'dolor', 'sit', 'amet'];

        return array_slice($messages, 0, $count);
    }
}
