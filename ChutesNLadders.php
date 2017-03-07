<?php
/**
 * Drivers for the game
 * @author Tom Breese
 */
namespace Chutes;

class ChutesNLadders {
	/**
	 * Array of players
	 * @var array
	 */
	private $_players = [];

	/**
	 * Which player's turn it currently is
	 * @var integer
	 */
	private $_players_turn = 0;

	/**
	 * Creates a new game with the supplied players
	 * @param array $players \Player[]
	 */
	public function __construct($players) {
		$this->_players = $players;
		$this->_players_turn = rand(0, count($players)-1);
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
			$next_move = Board::move($this->_players[$this->_players_turn]->get_position(), $distance);
			if ($next_move['special'] !== false) {
				if ($next_move['special'] == Board::STUCK) {
					echo "Player ".$this->_players[$this->_players_turn]->get_name()." rolled a ".$distance." and cannot complete the move.\n";
				} else {
					echo "Player ".$this->_players[$this->_players_turn]->get_name()." moved ".$distance.", hit a ".($next_move['special'] == Board::CHUTE ? "chute" : "ladder")." and moved to ".$next_move['new_position'].".\n";
				}
			} else {
				echo "Player ".$this->_players[$this->_players_turn]->get_name()." moved ".$distance." and is now at position ".$next_move['new_position'].".\n";
			}
			if (Board::winner($next_move['new_position'])) {
				echo "Player ".$this->_players[$this->_players_turn]->get_name()." wins!\n";
				$complete = true;
			} else {
				$this->_players[$this->_players_turn]->set_position($next_move['new_position']);
				// set the next player's turn
				if ($this->_players_turn == count($this->_players) - 1) {
					$this->_players_turn = 0;
				} else {
					$this->_players_turn++;
				}
			}
		}
	}
}