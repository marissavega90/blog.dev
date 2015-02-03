var random = Math.floor((Math.random()*50)+1);


while (random % 2 !== 1) {

    var random = Math.floor((Math.random()*50)+1);

}

console.log('Random number is ' + random);

for (var i = 1; i < 50; i+=2) { 

    if (random == i){ 

        console.log('Oops! We found ' + random + ' GET OUTTA HERE');

        continue;

        } else {

            console.log('This is an odd number' + i);

        }
}




