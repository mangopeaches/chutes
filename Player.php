<?php
/**
 * Class to represent a single player
 * @author Tom Breese
 */
namespace Chutes;

class Player {
	/**
	 * Players initial position
	 * @var integer
	 */
	private $_position = 0;

	/**
	 * Players name
	 * @var string
	 */
	private $_name;

	/**
	 * Create a new player
	 * @param string $name players name
	 */
	public function __construct($name) {
		$this->_name = $name;
	}

	/**
	 * Accessor for the players name
	 * @return string $this->_name
	 */
	public function get_name() {
		return $this->_name;
	}

	/**
	 * Accessor for the players current position
	 * @return int $this->_position
	 */
	public function get_position() {
		return $this->_position;
	}

	/**
	 * Mutator for the players current position
	 * @param int $new_position position to be set
	 */
	public function set_position($new_position) {
		$this->_position = $new_position;
	}
}