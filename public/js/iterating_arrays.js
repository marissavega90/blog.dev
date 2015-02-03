


// todo:
// Create an array of 4 names using literal array notation, in a variable called 'names'.

var names = ['Isaac', 'Cory', 'Jill', 'Thomas'];

// // todo:
// // Create a log statement that will log the number of elements in the names array.
// console.log('There are ' + names.length + ' names in the array');

// // todo:
// // Create log statements that will print each of the names array elements individually.
// console.log('The first name is ' + names[0]);

// console.log('The second name is ' + names[1]);

// console.log('The third name is ' + names[2]);

// console.log('The fourth name is ' + names[3]);

function nameLoop(name, index, array) {
    console.log('The name at index ' + index + ' is: ' + name);
}

names.forEach(nameLoop);

console.log('-----------------------------')

for (var i = 0; i < names.length; i++) {
    console.log('The name at index ' + i + ' is: ' + names[i]);
}

console.log('-----------------------------')

names.forEach(function (name, index, array) {
    console.log('The name at index ' + index + ' is: ' + name);
});

console.log('-----------------------------')

for (index in names) {
    console.log('The name at index ' + index + ' is: ' + names[index]);
}