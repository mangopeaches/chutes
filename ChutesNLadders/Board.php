<?php
/**
 * Represents the game board
 * @author Tom Breese <thomasjbreese@gmail.com>
 */
namespace ChutesNLadders;

class Board {

	/**
	 * define constants for chutes and ladders specials
	 */
	const CHUTE = 1;
	const LADDER = 2;
	// stuck indicates the player did not move this turn (they exceeded the board boundaries)
	const STUCK = 3;

	/**
	 * Keeps track of the array indices for 'special' moves
	 * i.e. chutes and ladders
	 * @var array
	 */
	private static $specials = [
		// ladders
		4 => ['type' => self::LADDER, 'go_to' => 14],
		9 => ['type' => self::LADDER, 'go_to' => 31],
		1 => ['type' => self::LADDER, 'go_to' => 38],
		28 => ['type' => self::LADDER, 'go_to' => 84],
		21 => ['type' => self::LADDER, 'go_to' => 42],
		36 => ['type' => self::LADDER, 'go_to' => 44],
		51 => ['type' => self::LADDER, 'go_to' => 67],
		71 => ['type' => self::LADDER, 'go_to' => 91],
		80 => ['type' => self::LADDER, 'go_to' => 100],
		// chutes
		16 => ['type' => self::CHUTE, 'go_to' => 6],
		49 => ['type' => self::CHUTE, 'go_to' => 11],
		48 => ['type' => self::CHUTE, 'go_to' => 26],
		56 => ['type' => self::CHUTE, 'go_to' => 53],
		64 => ['type' => self::CHUTE, 'go_to' => 60],
		62 => ['type' => self::CHUTE, 'go_to' => 19],
		87 => ['type' => self::CHUTE, 'go_to' => 24],
		93 => ['type' => self::CHUTE, 'go_to' => 73],
		95 => ['type' => self::CHUTE, 'go_to' => 75],
		98 => ['type' => self::CHUTE, 'go_to' => 78],
	];

	/**
	 * Returns the movement position based on current postion and number of spaces to move
	 * @param int $currentPosition current position on the board
	 * @param int $moves total spaces to move
	 * @return int $status['new_position'] position for which to move
	 * @return int $status['special'] either CHUTE or LADDER or false when not applicable
	 */
	public static function move($currentPosition, $moves) {
		$status = [];
		// calculate the next movement
		$nextPosition = $currentPosition + $moves;
		// check if this is a special position and move accordingly
		if (array_key_exists($nextPosition, self::$specials)) {
			$status['new_position'] = self::$specials[$nextPosition]['go_to'];
			$status['special'] = self::$specials[$nextPosition]['type'];
		} else {
			// make sure we haven't exceeded the array bounds, in which case we just can't move
			if ($nextPosition > 100) {
				$status['new_position'] = $currentPosition;
				$status['special'] = self::STUCK;
			} else {
				$status['new_position'] = $nextPosition;
				$status['special'] = false;
			}
		}
		return $status;
	}

	/**
	 * Returns whether or not the position is a winning postion
	 * @param int $currentPosition current position for the player
	 * @return bool whether or not the player has won the game
	 */
	public static function winner($currentPosition) {
		return $currentPosition == 100;
	}
}
