var xHRObject = false;
if (window.XMLHttpRequest) {
    xHRObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    xHRObject = new ActiveXObject("Microsoft.XMLHTTP");
}
function getData() {
        if ((xHRObject.readyState == 4) && (xHRObject.status == 200)) {
            var serverResponse = xHRObject.responseXML;
            var spantag = document.getElementById("cart");
            if (serverResponse != null) {
                var header = serverResponse.getElementsByTagName("book");
                var isbn = serverResponse.getElementsByTagName("ISBN");
                           var price = serverResponse.getElementsByTagName("price");
                spantag.innerHTML = "";
                for (i = 0; i < header.length - 1; i++) {
                    var row = document.createElement("tr");
                    row.innerHTML = "<td>" + header[i].firstChild.textContent + "</td>" +
                        "<td>" + "0764588508"+"</td>"
                                      +"<td>"+"$39.99"+"</td>"+
                       "<td>" + header[i].lastChild.textContent + "</td>"+
                       "<td><a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a></td>";
                        spantag.appendChild(row);
                      row.style.backgroundColor = getRandomColor();
                }
            } else {
                spantag.innerHTML = "";
            }
        }
    }
function AddRemoveItem(action) {
    var book = document.getElementById("book").innerHTML;
    var isbn = document.getElementById("ISBN").innerHTML;
    var price = document.getElementById("price").innerHTML;

    if (action == "Add") {
        xHRObject.open("GET", "ManageCart.php?action=" + action + "&book=" + encodeURIComponent(book) + "&value=" + Number(new Date) + "&isbn=" + encodeURIComponent(isbn) + "&price=" + encodeURIComponent(price), true);
    } else {
        xHRObject.open("GET", "ManageCart.php?action=" + action + "&book=" + encodeURIComponent(book) + "&value=" + Number(new Date), true);
    }
    xHRObject.onreadystatechange = getData;
    xHRObject.send(null);
}
function getRandomColor() {
  var letters = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

