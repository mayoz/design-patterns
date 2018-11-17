<?php

namespace DesignPatterns\Creational\StaticFactory;

use PHPUnit\Framework\TestCase;

class SocialMediaFactoryTest extends TestCase
{
    public function getNetworkTypes()
    {
        return [
            ['facebook'],
            ['twitter'],
        ];
    }

    /**
     * @dataProvider getNetworkTypes
     */
    public function testCanCreateConcreteClass($type)
    {
        $network = SocialMediaFactory::make($type);

        $this->assertInstanceOf(SocialMediaInterface::class, $network);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCanThrowException()
    {
        SocialMediaFactory::make('undefined');
    }
}
