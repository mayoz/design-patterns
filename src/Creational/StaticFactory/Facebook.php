<?php

namespace DesignPatterns\Creational\StaticFactory;

class Facebook implements SocialMediaInterface
{
    /**
     * {@inheritdoc}
     */
    public function feed(int $count): array
    {
        $messages = ['foo', 'bar', 'baz', 'qux', 'quux'];

        return array_slice($messages, 0, $count);
    }
}
