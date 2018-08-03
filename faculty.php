
<?php


mysql_connect ("localhost","qroot","password");
mysql_select_db("qroot");

if(!isset($_POST['submit']))
{
header("location:login.php");
 
}
else
{
  echo "Welcome $usr<br><Br>";
}
?>


<?doctype html>
<html>
<head>
<title>Faculty page</title>
</head>
<body bgcolor="khaki"><br>
<br>
<div align="right">
<a href="logout.php"><button type="submit" style="height:30px; width:100px">Log Out</button>
</a></div>
<button type="submit" style="height:35px; width:200px">Profile</button><br><br>
<button type="submit" style="height:35px; width:200px">Upload videos</button><br><br>
<button type="submit" style="height:35px; width:200px">Create Session</button><br><br>
<button type="submit" style="height:35px; width:200px">Assignment</button><br><br>
<button type="submit" style="height:35px; width:200px">Upload Results</button><br><br>
<button type="submit" style="height:35px; width:200px">Chat</button><br><br>
<button type="submit" style="height:35px; width:200px">Live stream</button><br><br>
</body>
</html>


