<?php
/**
 * Drivers for the game
 * @author Tom Breese
 */
namespace ChutesNLadders;

class ChutesNLadders {

	/**
	 * Array of players
	 * @var array
	 */
	private $players = [];

	/**
	 * Which player's turn it currently is
	 * @var integer
	 */
	private $playersTurn = 0;

	/**
	 * Creates a new game with the supplied players
	 * @param array $players \Player[]
	 */
	public function __construct(array $players) {
		$this->players = $players;
		$this->playersTurn = rand(0, count($players) - 1);
	}

	/**
	 * Plays out the game
	 * @return void
	 */
	public function play() {
		$complete = false;
		while (!$complete) {
			// get a move
			$distance = Wheel::spin();
			$nextMove = Board::move($this->players[$this->playersTurn]->getPosition(), $distance);
			if ($nextMove['special'] !== false) {
				if ($nextMove['special'] == Board::STUCK) {
					echo "Player ".$this->players[$this->playersTurn]->getName()." rolled a ".$distance." and cannot complete the move.".PHP_EOL;
				} else {
					echo "Player ".$this->players[$this->playersTurn]->getName()." moved ".$distance.", hit a ".($nextMove['special'] == Board::CHUTE ? "chute" : "ladder")." and moved to ".$nextMove['new_position'].".".PHP_EOL;
				}
			} else {
				echo "Player ".$this->players[$this->playersTurn]->getName()." moved ".$distance." and is now at position ".$nextMove['new_position'].".".PHP_EOL;
			}
			if (Board::winner($nextMove['new_position'])) {
				echo "Player ".$this->players[$this->playersTurn]->getName()." wins!".PHP_EOL;
				$complete = true;
			} else {
				$this->players[$this->playersTurn]->setPosition($nextMove['new_position']);
				// set the next player's turn
				if ($this->playersTurn == count($this->players) - 1) {
					$this->playersTurn = 0;
				} else {
					$this->playersTurn++;
				}
			}
		}
	}
}
