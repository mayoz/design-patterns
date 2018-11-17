<?php

namespace DesignPatterns\Creational\SimpleFactory;

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
