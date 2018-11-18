<?php

namespace DesignPatterns\Structural\Decorator;

class RenderXml extends Decorator
{
    /**
     * Convert the data to its XML representation.
     *
     * @return string
     */
    public function render(): string
    {
        $doc = new \DOMDocument('1.0', 'utf-8');

        foreach ($this->getData() as $key => $value) {
            $doc->appendChild($doc->createElement($key, $value));
        }

        return $doc->saveXML();
    }
}
