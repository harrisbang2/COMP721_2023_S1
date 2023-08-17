var xhr = new XMLHttpRequest();
function setCurrentTime() {
      var now = new Date();
      var hours = String(now.getHours()).padStart(2, '0');
      var minutes = String(now.getMinutes()).padStart(2, '0');
      var currentTime = hours + ':' + minutes;
      document.getElementById('time').value = currentTime;
 }


//APPENDIX : USING POST
// using POST method
var xhr = new XMLHttpRequest();
function getData(dataSource, divID, aDate, aTime, aName, Aphone, Aunumber, Asnumber, Astname, Asbname, Adsbname) {
if(xhr) {
var obj = document.getElementById(divID);


var requestbody ="date="+encodeURIComponent(aDate)+"&time="+encodeURIComponent(aTime)+"&cname="+encodeURIComponent(aName)+"&phone="+encodeURIComponent(Aphone)+"&unumber="+encodeURIComponent(Aunumber)+"&snumber="+encodeURIComponent(Asnumber)+"&stname="+encodeURIComponent(Astname)+"&sbname="+encodeURIComponent(Asbname)+"&dsbname="+encodeURIComponent(Adsbname);


xhr.open("POST", dataSource, true);

xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
obj.innerHTML = xhr.responseText;
} // end anonymous call-back function
xhr.send(requestbody);
} // end if

} // end function getData()