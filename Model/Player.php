<?php
namespace FactoryStuff;

class Player
{
    public function getAttributes()
    {
        $attributes = new \stdClass();
        $attributes->health         = 100;
        $attributes->aim            = 0.5;
        $attributes->aiControlled   = false;

        return $attributes;
    }
}