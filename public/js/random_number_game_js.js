'use strict'
function getRandomNumber() {
            var rand = Math.floor((Math.random() * 50) + 1);
            return rand;
        }

        function playAgain() {
            var answer = confirm("Do you want to play again?");
            return answer;
        }

        function getGuess() {
            var guess = prompt('Please enter your guess between 1 and 50');
            return guess;
        }

        function isValidGuess(guess) {

            // if parsedGuess is Not A Number, then return false.
            var parsedGuess = parseInt(guess);
            if(isNaN(parsedGuess)) {
                return false;
            } else {
                return true;
            }
        }

        function getValidGuess() {
            do {
                var guess = getGuess();

            } while(isValidGuess(guess) == false);

             return guess;
        }


        function playGame() {
            var random = getRandomNumber();
            console.log(random);

            var i = 0;
            do {

                var guess = getValidGuess();

                if(guess == random) {
                    alert('You did it!');
                } else if(guess > random) {
                    alert('Too HIGH!');
                } else if(guess < random) {
                    alert('Too Low!');
                }
            
                i = i + 1;
                
            } while (random != guess && i < 5);

        }

        do {

            playGame();

            var replay = playAgain();

        } while(replay);