// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array


// var authors = {};

// authors.firstName = ['Ray', 'J.D.', 'Orson', 'J.R.R.', 'Lazlo'];

// authors.lastName = ['Bradbury', 'Salinger', 'Scott Card', 'Tolkien', 'Krasznahorkai'];

var books = [
    { 
        "title": "Farenheit 451",
        "author": {
        "firstName":"Ray", 
        "lastName":"Bradbury"
        },
        "pages" : 450,
        "published" : 1964
    },
    {
        "title": "Catcher in the Rye",
        "author": {
        "firstName":"J.D.", 
        "lastName":"Salinger"
        },
        "pages" : 300,
        "published" : 1956
    },
    {
        "title": "Ender's Game",
        "author": {
        "firstName":"Orson", 
        "lastName":"Scott Card"
        },
        "pages" : 400,
        "published" : 1970
    },
    {
        "title": "The Fellowship of the Ring",
        "author": {
        "firstName":"J.R.R.", 
        "lastName":"Tolkien"
        },
        "pages" : 500,
        "published" : 1930
    },
    {
        "title": "The Melancholy of Resistance",
        "author": {
        "firstName":"Lazlo", 
        "lastName":"Krasznahorkai"
        },
        "pages" : 700,
        "published" : 1990
    }
];


// authors.fullName = function () {
//     console.log (this.firstName + this.lastName);
// }

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
books.forEach(function (book, index, books) {
    console.log("Book #" + index);
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName + ' ' + book.author.lastName);
    console.log("---");
});




// for (var i = 0; i < authors.fullName; i++) {
//     console.log("Author: " + authors.fullName);
// }
    
// for (var i = 0; i < books.

    
//     
//     

// // end loop heres


