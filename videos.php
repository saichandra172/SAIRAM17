<?php


mysql_connect ("localhost","qroot","password");
mysql_select_db("qroot");

?>
<!doctype html>
<html>
<title>Assignment</title>
<body style="background-color:lemonchiffon;
div.container 
{
    width: 100%;
    border: 1px solid gray;
}">

<h1 
style="text-align:center;background-color:steelblue;
border: 1px solid black;"><marquee> <font color="white">
VIRTUAL CLASS ROOM</font></marquee></h1>

<h1 
style="text-align:center;background-color:steelblue;
border: 2px solid black;"> <font color="white"><div align="left">
<pre>       <button type="submit" style="height:30px; width:100px">HOME</button>         <button type="submit" style="height:30px; width:100px">IMAGES</button>         <button type="submit" style="height:30px; width:100px">CONTACT</button>           <a href="login.php"><button type="submit" style="height:30px; width:100px">LOGIN</button></a>             <a href="register.php"><button type="submit" style="height:30px; width:150px"> REGISTRATION</button></a> </font></h1></pre>
 <h2 style="text-align:center;text:u;">watch videos here..</h2>


<?php
$query = mysql_query("SELECT * FROM videos");
while($row = mysql_fetch_assoc($query))
{
$id= $row['id'];
$name=$row['name'];
$url=$row['url'];

echo "<a href='watch.php?id'>$name</a><br />";
}
?>
</body>
</html>
