
<!doctype html>
<html>
<title>Assignment</title>
<body background ="v5.jpg">

<h1 
style="text-align:center;background-color:steelblue;
border: 1px solid black;"><marquee> <font color="white">
VIRTUAL CLASS ROOM</font></marquee></h1>

<h1 
style="text-align:center;background-color:steelblue;
border: 2px solid black;"> <font color="white"><div align="left">
<pre>       <button type="submit" style="height:30px; width:100px">HOME</button>         <button type="submit" style="height:30px; width:100px">IMAGES</button>         <button type="submit" style="height:30px; width:100px">CONTACT</button>           <a href="login.php"><button type="submit" style="height:30px; width:100px">LOGIN</button></a>             <a href="register.php"><button type="submit" style="height:30px; width:150px"> REGISTRATION</button></a> </font></h1></pre>

<center>
 <h2 style="text-align:center;text:u;">SESSIONS FORM</h2>

<h3> SET TIMETABLE HERE</h3>
<form action=" " method="POST">
       SUBJECT NAME</br>
      <input type="text" name="name" required><br /></br>
       SESSION DATE:</br>
      <input type="date" name="sdt" required><br /></br>
      SESSION TIME:</br >
      <input type="time" name="stm" required/> <br/></br>
      PLACE:</br >
      <input type="text" name="place" required/> <br/></br>
 
      <input type="submit" value="Submit" name="submit" />
</form>


<?php
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$sdt=$_POST['sdt'];
$stm=$_POST['stm'];
$place=$_POST['place'];

$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");


$sql="INSERT INTO session(name,sdt,stm,place)
VALUES('$name','$sdt','$stm','$place')";
$result=mysql_query($sql);


echo 'SESSION CREATED SUCCESSFULLY';
}
?>
</body>
</html>
