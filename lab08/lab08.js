function questionA() {
    let num = 0;
    for (x = 1; x <= 10; x++) {
        num = num + x;
        document.write(num);
        document.write('<br>');
    }
}

function questionB(bgcolor) {
    document.body.style.backgroundColor = bgcolor;
}

function questionD() {
    let userInput = prompt("Enter a string consisting of several words separated by single spaces");
    if (userInput != null) {
        let usingSplit = userInput.split('');
        for (let x = 0; x < userInput.length; x++) {
            if (usingSplit[x] === " ") {
                document.write(" <br> ");
            }
            document.write(usingSplit[x]);
                  
        }
    }
}

// Constructor function for Person objects
function Data(fName, lName, email) {
    this.firstName = fName;
    this.lastName = lName;
    this.email = email;

}
// Create 2 Data objects
const dataExample1 = new Data("Sehun ", "Bang", "grc5671@autuni.com");
const dataExample2 = new Data("kate", " nam", "kate@naver.com");

// Add a name method to first object
dataExample1.printInfo = function() {
    return this.firstName + this.lastName + " | " + this.email;
};

// Add a name method to second object
dataExample2.printInfo = function() {
    return this.firstName + this.lastName + " | " + this.email;
};

Data.prototype.write = function () {
    var adrbook = this.firstName + this.lastName + " | " + this.email +"<br>";
    document.write(adrbook);
}
dataExample2.write();
dataExample1.write();
// Display Data