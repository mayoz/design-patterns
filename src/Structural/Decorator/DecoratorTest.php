<?php

namespace DesignPatterns\Structural\Decorator;

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    protected $service;

    protected function setUp()
    {
        $this->service = new PostService([
            'id' => 1,
            'name' => 'John Doe',
        ]);
    }

    public function testService()
    {
        $this->assertInstanceOf(Renderable::class, $this->service);
        $this->assertInstanceOf(PostService::class, $this->service);

        $this->assertEquals('1,John Doe', $this->service->render());
    }

    public function testJsonRender()
    {
        $render = new RenderJson($this->service);

        $expected = <<<JSON
{"id":1,"name":"John Doe"}
JSON;

        $this->assertInstanceOf(Renderable::class, $render);
        $this->assertInstanceOf(Decorator::class, $render);
        $this->assertInstanceOf(RenderJson::class, $render);

        $this->assertEquals($expected, $render->render());
    }

    public function testXmlRender()
    {
        $render = new RenderXml($this->service);

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<id>1</id>
<name>John Doe</name>

XML;

        $this->assertInstanceOf(Renderable::class, $render);
        $this->assertInstanceOf(Decorator::class, $render);
        $this->assertInstanceOf(RenderXml::class, $render);

        $this->assertEquals($expected, $render->render());
    }
}
