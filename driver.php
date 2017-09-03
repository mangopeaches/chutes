<?php
/**
 * Driver to play the game
 * @author Tom Breese <thomasjbreese@gmail.com>
 */

// autoload our classes
spl_autoload_register(function($className) {
	$fullPathToFile = __DIR__.DIRECTORY_SEPARATOR.str_replace('\\', '/', $className).'.php';
	if (file_exists($fullPathToFile)) {
		include($fullPathToFile);
	}
});

$glenda = new ChutesNLadders\Player('Glenda');
$rachel = new ChutesNLadders\Player('Rachel');
$game = new ChutesNLadders\ChutesNLadders([$glenda, $rachel]);
$game->play();
