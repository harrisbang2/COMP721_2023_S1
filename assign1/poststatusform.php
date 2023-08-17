<html>
<head>
<title>
Sehun Bang Ass1 Status form
</title>
<link rel="stylesheet" href="mycss.css">
<style>
.names {   
   display: inline-block;
   position: absolute;
  top: 130px;
  left: 30;
  height: 200px;
  width: 150px;

}
.boxes {
   display: inline-block;
  position: absolute;
  top: 139px;
  left: 150;
   height: 180;
  width: 500px;
   margin:10px
}
</style>
</head>
<body>
<div class ="main">
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="poststatusform.php">poststatusform</a>
  <a href="searchstatusform.html">search</a>
  <a href="about.html">About</a>
</div>

<div class ="insider">
<p>Sehun Bang Ass1</p>
<p>ID: 20111406<email: grc5671@autuni.ac.nz</p>
<br>
<!--header-->
<h1> Status Posting System</h1>
<br>
<!--names for the inputs -->
<div class ="names">
<p>Status Code<br>Status<br>Share<br>Date<br>Permission</p>
</div>
<!--inputs-->
<div class ="boxes">
<form action = "poststatusprocess.php" method = "post">
<input type="text" name ="statuscode" id ="statuscode" minlength="5" maxlength="5"required pattern="S\d{4}" required title="The code must start with an uppercase letter S followed by 4 digits."><br>
<input type="text" name ="status" id ="status" required><br>

<input type="Radio" name ="share" id ="Public" value="Public">
 <label for="Public">Public</label>
<input type="Radio" name ="share" id ="Friend" value="Friend">
<label for="Friend">Friend</label>
<input type="Radio" name ="share" id ="Only_me" value="Only_me">
<label for="Only me">Only me</label>
<br>

<input type="date" name ="date" id ="date" required><br>

<input type="Checkbox" name ="AllowLike" id="AllowLike">
<label for="vehicle1">Allow Like</label>
<input type="Checkbox" name ="AllowComments" id="AllowComments">
<label for="AllowComments">Allow Comments</label>
<input type="Checkbox" name ="AllowShare" id="AllowShare">
<label for="AllowShare">Allow Share</label>
<br>
<Button type="submit" name ="submit">submit</button>
</form>
</div>
<!--link to the index -->
<div style="position:absolute; top: 290px;left: 25px;">
<a href = "http://grc5671.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a>
</div>
</div>
</div>
</body> 
</html>