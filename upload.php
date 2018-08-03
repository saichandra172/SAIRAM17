<?php


mysql_connect ("localhost","qroot","password");
mysql_select_db("qroot");


if(isset($_POST['submit']))
{

$name = $_FILES['file']['name'];
$temp = $_FILES['file']['tmp_name'];

move_uploaded_file($temp,"uploaded/".$name);
$url = "uploaded/$name";
mysql_query("INSERT INTO videos('id', 'name', 'url') VALUES (NULL, '$name', '$url')");
}
?>
<!doctype html>
<html>
<title>upload videos</title>
<body background ="v5.jpg">

<h1 
style="text-align:center;background-color:steelblue;
border: 1px solid black;"><marquee> <font color="white">
VIRTUAL CLASS ROOM</font></marquee></h1>

<h1 
style="text-align:center;background-color:steelblue;
border: 2px solid black;"> <font color="white"><div align="left">
<pre>       <button type="submit" style="height:30px; width:100px">HOME</button>         <button type="submit" style="height:30px; width:100px">IMAGES</button>         <button type="submit" style="height:30px; width:100px">CONTACT</button>           <a href="login.php"><button type="submit" style="height:30px; width:100px">LOGIN</button></a>             <a href="register.php"><button type="submit" style="height:30px; width:150px"> REGISTRATION</button></a> </font></h1></pre>
 <h2 style="text-align:center;text:u;"><b>Welcome....</b></h2>





<pre>       <a href="videos.php"><button type="submit" style="height:30px; width:100px">VIDEOS</button></a></pre>
<form action="upload.php" method="POST" enctype="multipart/form-data">
   <center>   <input type="file" name="file"  required />
      <input type="submit" name="submit" value="Upload.." />

</form>

<?php
if(isset($_POST['submit']))
{
echo"<br />".$name. "has been uploaded";

}
?>
</body>
</html>
