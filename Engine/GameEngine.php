<?php
namespace FactoryStuff;

class GameEngine
{
    public function loadPlayer($playerAttributes)
    {
        $player = new \stdClass();
        $player->face           = 'friendly';
        $player->upperBody      = 'red';
        $player->lowerBody      = 'blue';
        $player->controlledByAi = false;
        $player->attributes     = $playerAttributes;

        return $player;
    }

    public function loadEnemy($enemyAttributes)
    {
        $enemy = new \stdClass();
        $enemy->face           = 'angry';
        $enemy->upperBody      = 'red';
        $enemy->lowerBody      = 'green';
        $enemy->controlledByAi = true;
        $enemy->attributes     = $enemyAttributes;

        return $enemy;
    }

    public function loadWorld($worldAttributes)
    {
        $world = new \stdClass();
        $world->attributes  = $worldAttributes;

        return $world;
    }
}