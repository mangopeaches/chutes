# Chutes and Ladders

This is a very basic version of the Chutes and Ladders board game.

## Board Class

This represents the game board itself and has two method: move($currentPostion, $distance) which retruns the next move, and winner($position) which determines whether or not the person is a winner based on their position.

## Wheel Class

This is a very basic implementation of the wheel, which is spun at the beginning of each player's turn to see how many spaces to move.

## Player Class

This represents each player playing the game. Basically keeps track of their name and their current position.

## ChutesNLadders Class

This is an automated driver that will play the game with a an array of provided players and output each move and the winner.

## Example

You can run this via a web browser or on the command line via: `php driver.php`
You'll see each players move and the eventual winner:
```
$ php driver.php
Player Glenda moved 3 and is now at position 3.
Player Rachel moved 3 and is now at position 3.
Player Glenda moved 1, hit a ladder and moved to 14.
Player Rachel moved 4 and is now at position 7.
Player Glenda moved 1 and is now at position 15.
Player Rachel moved 4 and is now at position 11.
Player Glenda moved 5 and is now at position 20.
Player Rachel moved 6 and is now at position 17.
Player Glenda moved 1, hit a ladder and moved to 42.
Player Rachel moved 5 and is now at position 22.
Player Glenda moved 6, hit a chute and moved to 26.
Player Rachel moved 1 and is now at position 23.
Player Glenda moved 6 and is now at position 32.
Player Rachel moved 1 and is now at position 24.
Player Glenda moved 4, hit a ladder and moved to 44.
Player Rachel moved 3 and is now at position 27.
Player Glenda moved 5, hit a chute and moved to 11.
Player Rachel moved 2 and is now at position 29.
Player Glenda moved 4 and is now at position 15.
Player Rachel moved 6 and is now at position 35.
Player Glenda moved 3 and is now at position 18.
Player Rachel moved 5 and is now at position 40.
Player Glenda moved 3, hit a ladder and moved to 42.
Player Rachel moved 2 and is now at position 42.
Player Glenda moved 1 and is now at position 43.
Player Rachel moved 4 and is now at position 46.
Player Glenda moved 2 and is now at position 45.
Player Rachel moved 1 and is now at position 47.
Player Glenda moved 5 and is now at position 50.
Player Rachel moved 1, hit a chute and moved to 26.
Player Glenda moved 2 and is now at position 52.
Player Rachel moved 1 and is now at position 27.
Player Glenda moved 4, hit a chute and moved to 53.
Player Rachel moved 2 and is now at position 29.
Player Glenda moved 5 and is now at position 58.
Player Rachel moved 5 and is now at position 34.
Player Glenda moved 5 and is now at position 63.
Player Rachel moved 3 and is now at position 37.
Player Glenda moved 4 and is now at position 67.
Player Rachel moved 6 and is now at position 43.
Player Glenda moved 2 and is now at position 69.
Player Rachel moved 4 and is now at position 47.
Player Glenda moved 1 and is now at position 70.
Player Rachel moved 1, hit a chute and moved to 26.
Player Glenda moved 4 and is now at position 74.
Player Rachel moved 5 and is now at position 31.
Player Glenda moved 3 and is now at position 77.
Player Rachel moved 3 and is now at position 34.
Player Glenda moved 6 and is now at position 83.
Player Rachel moved 1 and is now at position 35.
Player Glenda moved 2 and is now at position 85.
Player Rachel moved 3 and is now at position 38.
Player Glenda moved 5 and is now at position 90.
Player Rachel moved 5 and is now at position 43.
Player Glenda moved 4 and is now at position 94.
Player Rachel moved 6, hit a chute and moved to 11.
Player Glenda moved 3 and is now at position 97.
Player Rachel moved 5, hit a chute and moved to 6.
Player Glenda rolled a 6 and cannot complete the move.
Player Rachel moved 1 and is now at position 7.
Player Glenda rolled a 6 and cannot complete the move.
Player Rachel moved 1 and is now at position 8.
Player Glenda moved 2 and is now at position 99.
Player Rachel moved 4 and is now at position 12.
Player Glenda rolled a 3 and cannot complete the move.
Player Rachel moved 1 and is now at position 13.
Player Glenda rolled a 2 and cannot complete the move.
Player Rachel moved 1 and is now at position 14.
Player Glenda rolled a 3 and cannot complete the move.
Player Rachel moved 6 and is now at position 20.
Player Glenda moved 1 and is now at position 100.
Player Glenda wins!
```