
// todo: Ask the user for their name.
var response = prompt('What is your name?');

//       Keep asking if an empty input is provided.
while (response == false || response == null) {
    var response = prompt('What is your name?');
}

// todo: Show an alert message that welcomes the user based on their input.
alert("Welcome " + response + "!");

// todo: Ask the user if they like pizza.

var confirmed = confirm('Do you like the pizza?');

(confirmed) ? alert("*Arnold Schwarzenegger voice* You love the pizza. You eat the pizza. You must have the pizza.") : alert("You obviously have never met the pizza.");
//       Based on their answer tell show a creative alert message.

// if (confirmed) {
//     alert("*Arnold Schwarzenegger voice* You love the pizza. You eat the pizza. You must have the pizza.")
// } else {
//     alert("You obviously have never met the pizza.")
// }

// (confirmed) ? alert("*Arnold Schwarzenegger voice* You love the pizza. You eat the pizza. You must have the pizza.") : alert("You obviously have never met the pizza.");