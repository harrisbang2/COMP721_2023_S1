// JavaScript Document

function makeTable() {
  var theTable = document.getElementById("tbl");

  // IE requires rows to be added to a tBody element
  // IE automatically creates a tBody element - delete it and then manually create
  if (theTable.firstChild != null) {
    var badIEBody = theTable.childNodes[0];
    theTable.removeChild(badIEBody);
  }

  var tBody = document.createElement("TBODY");
  theTable.appendChild(tBody);

  var newRow = document.createElement("tr");
  var c1 = document.createElement("td");
  var v1 = document.createTextNode("7308");
  c1.appendChild(v1);
  newRow.appendChild(c1);
  var c2 = document.createElement("td");
  var v2 = document.createTextNode("software engineering");
  c2.appendChild(v2);
  newRow.appendChild(c2);
  tBody.appendChild(newRow);

  newRow = document.createElement("tr");
  c1 = document.createElement("td");
  v1 = document.createTextNode("7003");
  c1.appendChild(v1);
  newRow.appendChild(c1);
  c2 = document.createElement("td");
  v2 = document.createTextNode("Web Development");
  c2.appendChild(v2);
  newRow.appendChild(c2);
  tBody.appendChild(newRow);
}

function appendRow() {
  var theTable = document.getElementById("tbl");
  var tBody = theTable.getElementsByTagName("tbody")[0];

  var newRow = document.createElement("tr");
  var c1 = document.createElement("td");
  var input1 = prompt("Enter the first cell value:");
  var v1 = document.createTextNode(input1);
  c1.appendChild(v1);
  newRow.appendChild(c1);

  var c2 = document.createElement("td");
  var input2 = prompt("Enter the second cell value:");
  var v2 = document.createTextNode(input2);
  c2.appendChild(v2);
  newRow.appendChild(c2);

  // Generate random background color for the new row
function getRandomColor() {
  var letters = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
  newRow.style.backgroundColor = getRandomColor();
  tBody.appendChild(newRow);
}


