//APPENDIX : USING POST
// using POST method
var xhr = new XMLHttpRequest();
function getData(dataSource, divID, Absearch) {
if(xhr) {
var obj = document.getElementById(divID);
var requestbody ="bsearch="+encodeURIComponent(Absearch);
xhr.open("POST", dataSource, true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {

obj.innerHTML = xhr.responseText;

} // end anonymous call-back function
xhr.send(requestbody);
} // end if
} // end function getData()

function assign(div,connection,bsearch){
    $(document).ready(function() {
        $.ajax({
            url: "admin.php",
            type: "POST",
            data: {
                functionName: "ChangeStatus", // The name of the PHP function
                arguments: [bsearch, connection] // The arguments for the PHP function
            },
            success: function(response) {
                console.log(response); // Display the result in the browser console
            }
        });
    });
document.getElementById("div").innerHTML = result;
}