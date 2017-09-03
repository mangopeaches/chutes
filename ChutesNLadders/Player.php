<?php
/**
 * Class to represent a single player
 * @author Tom Breese
 */
namespace ChutesNLadders;

class Player {

	/**
	 * Players initial position
	 * @var integer
	 */
	private $position = 0;

	/**
	 * Players name
	 * @var string
	 */
	private $name;

	/**
	 * Create a new player
	 * @param string $name players name
	 */
	public function __construct($name) {
		$this->name = $name;
	}

	/**
	 * Accessor for the players name
	 * @return string $this->_name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Accessor for the players current position
	 * @return int $this->position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Mutator for the players current position
	 * @param int $newposition position to be set
	 */
	public function setPosition($newposition) {
		$this->position = $newposition;
	}
}
