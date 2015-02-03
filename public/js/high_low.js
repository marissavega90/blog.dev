
//code goes here; what happens now?
var random = Math.floor((Math.random()*100)+1);

guess = 0;


do {
    //code goes here!

    var guess = prompt('Guess?');

        if (guess == false) {
            var guess = prompt('Guess?');

        }

        if (guess == null) {

            die();
        }

        else {

             if (guess > random) {
                alert("LOWER");
            }

            else if (guess < random) {
                alert("HIGHER");
            } 

        }

    }  while (guess != random);

alert("You did it!");