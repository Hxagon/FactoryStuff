<?php
namespace FactoryStuff;

class GameService
{
    private $player;
    private $enemy;
    private $world;
    private $gameEngine;

    public function __construct($player, $enemy, $world, GameEngine $gameEngine)
    {
        $this->player       = $player;
        $this->enemy        = $enemy;
        $this->world        = $world;
        $this->gameEngine   = $gameEngine;
    }
}