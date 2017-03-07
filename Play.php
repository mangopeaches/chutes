<?php
/**
 * Class to play the game
 * @author Tom Breese
 */
include(dirname(__FILE__).'/ChutesNLadders.php');
include(dirname(__FILE__).'/Player.php');
include(dirname(__FILE__).'/Board.php');
include(dirname(__FILE__).'/Wheel.php');

$glenda = new Chutes\Player('Glenda');
$rachel = new Chutes\Player('Rachel');
$game = new Chutes\ChutesNLadders([$glenda, $rachel]);
$game->play();
