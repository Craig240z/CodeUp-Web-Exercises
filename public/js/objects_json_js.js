// todo:
// Create an array of objects that represent books.
var books = [
    {
        "title": "The Hitchhikers Guide to the Galaxy",
        "author": {
            "firstName": "John",
            "lastName": "Green"
        },
        "pages": 8675309,
    }, {
        "title": "How to Win Friends and Influence People",
        "author": {
            "firstName": "Norman Vincent",
            "lastName": "Peale"
        },
        "pages": 248,
    }, {
        "title": "Think and Grow Rich",
        "author": {
            "firstName": "Napoleon",
            "lastName": "Hill"
        },
        "pages": 300,
    }
];
// Each book should have a title and an author.
books.forEach(function(book, index) {
    console.log("Book #" + (index + 1)); 
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName + " " + book.author.lastName);
    console.log("----");
});
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

// log out the books array
//console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
/*  console.log("Book #" + todo);
    console.log("Title: " + todo);
    console.log("Author: " + todo);
    console.log("---");
    */
// end loop here