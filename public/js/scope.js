

(function () {
    // variables and functions in here are only accessible inside this function's scope 
    var myNameIs = 'Marissa';
    console.log('Hello from ' + (myNameIs));

})();


(function () {
    // variables and functions in here are only accessible inside this function's scope 
    var random = Math.floor((Math.random()*100)+1);
    (random % 2 == 0) ? console.log('This number is not odd: ' + random) : console.log('This number is odd: ' + random);

})();

