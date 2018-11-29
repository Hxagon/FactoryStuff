<?php
namespace FactoryStuff;

require_once 'vendor/autoload.php';

$newGame = GameServiceFactory::create();

echo '<pre>' .var_export($newGame, true) .'</pre>';

echo '<hr />';