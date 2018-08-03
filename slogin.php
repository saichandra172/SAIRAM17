<!doctype html>
<html>
<head>
<title>login</title>
</head>
<body background ="vi.jpg">
<h1 
style="text-align:center;background-color:steelblue;
border: 1px solid black;"> <font color="white">
VIRTUAL CLASSROOM</font></h1>


<h1 
style="text-align:center;background-color:steelblue;
border: 2px solid black;"> <font color="white"><div align="left">
<pre>       <button type="submit" style="height:30px; width:100px">HOME</button>         <button type="submit" style="height:30px; width:100px">IMAGES</button>         <button type="submit" style="height:30px; width:100px">CONTACT</button>           <a href="login.php"><button type="submit" style="height:30px; width:100px">LOGIN</button></a>             <a href="register.php"><button type="submit" style="height:30px; width:150px"> REGISTRATION</button></a> </font></h1></pre>

 <h2 style="text-align:center;text:u;">LOGIN FORM</h2>
<pre><a href="slogin.php"><input type="submit" value="Student Login" name="submit" /></a>       <a href="login.php"><input type="submit" value="Faculty Login" name="submit" /></a></pre>

<font color="orange"><h3> Login here</h3></font>
<form action=" " method="POST">
USERNAME:<br /><input type="text" name="user" required><br/>
PASSWORD:<br /><input type="password" name="pass" required><br />
ROLL NO:<br/><input type="text" name="rollno" required><br />
<br />

<pre>    <input type="submit" value="Login" name="submit" />   <input type="submit" value="cancel" name="submit" />
</form>

<?php
if(isset($_POST["submit"]))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$rollno=$_POST['rollno'];

$con=mysql_connect('localhost','qroot','password') or die (mysql_error());
mysql_select_db('qroot') or die('cannot select db');
  
$query=mysql_query("select * from login where username='".$user."' AND  password='".$pass."' ");
$numrows = mysql_num_rows($query);
if($numrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername = $row['username'];
$dbpassword = $row['password'];
$dbrollno = $row['rollno'];
}

if($user== $dbusername && $pass== $dbpassword && $rollno==$dbrollno )
{
session_start();
$_SESSION['sess_user'] = $user;
header('location:student.html');
}

}
else
{
echo 'invalid username or password!';
}
}
?>
</body>
</html>
 
