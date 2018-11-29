<?php
namespace FactoryStuff;

class Enemy
{

    public function getAttributes()
    {
        $attributes = new \stdClass();
        $attributes->health         = 120;
        $attributes->aim            = 1.5;
        $attributes->aiControlled   = true;

        return $attributes;
    }
}