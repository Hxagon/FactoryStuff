<?php
namespace FactoryStuff;

class World
{

    public function getAttributes()
    {
        $attributes = new \stdClass();
        $attributes->weather    = 'nice';
        $attributes->size       = 'large';
        $attributes->clouds     = 'none';

        return $attributes;
    }
}