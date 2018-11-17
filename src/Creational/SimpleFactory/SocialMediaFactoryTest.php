<?php

namespace DesignPatterns\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;

class SocialMediaFactoryTest extends TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new SocialMediaFactory();
    }

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
        $network = $this->factory->make($type);

        $this->assertInstanceOf(SocialMediaInterface::class, $network);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testCanThrowException()
    {
        $this->factory->make('undefined');
    }
}
