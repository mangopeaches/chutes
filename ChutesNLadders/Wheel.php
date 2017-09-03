<?php
/**
 * Class to represent the spinning wheel
 * @author Tom Breese
 */
namespace ChutesNLadders;

class Wheel {
	
	/**
	 * Lower bounds for the wheels values
	 */
	const MIN = 1;

	/**
	 * Upper bounds for the wheels values
	 */
	const MAX = 6;

	/**
	 * Return a random value in the min/max range which represents the players move
	 * @return int number of spaces to move
	 */
	public static function spin() {
		return rand(self::MIN, self::MAX);
	}
}
