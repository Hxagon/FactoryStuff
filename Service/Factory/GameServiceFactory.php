<?php
namespace FactoryStuff;

class GameServiceFactory
{
    public static function create()
    {
        $player     = new Player();
        $enemy      = new Enemy();
        $world      = new World;
        $gameEngine = new GameEngine();

        $player = self::loadPlayer($gameEngine, $player);
        $enemy  = self::loadEnemy($gameEngine, $enemy);
        $world  = self::loadWorld($gameEngine, $world);

        return new GameService($player, $enemy, $world, $gameEngine);
    }

    private static function loadPlayer(GameEngine $gameEngine,Player $player)
    {
        return $gameEngine->loadPlayer($player->getAttributes());
    }

    private static function loadEnemy(GameEngine $gameEngine, Enemy $enemy)
    {
        return $gameEngine->loadEnemy($enemy->getAttributes());
    }

    private static function loadWorld(GameEngine $gameEngine, World $world)
    {
        return $gameEngine->loadWorld($world->getAttributes());
    }
}