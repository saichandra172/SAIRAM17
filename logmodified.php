<!doctype html>
<html>
<head>
<title>login</title>
</head>
<body style="background-color:lemonchiffon;
div.container 
{
    width: 100%;
    border: 1px solid gray;
}">
<h1 
style="text-align:center;background-color:steelblue;
border: 1px solid black;"> <font color="white">
VIRTUAL CLASSROOM</font></h1>


<h1 
style="text-align:center;background-color:steelblue;
border: 2px solid black;"> <font color="white"><div align="left">
<pre>       <button type="submit" style="height:30px; width:100px">HOME</button>         <button type="submit" style="height:30px; width:100px">IMAGES</button>         <button type="submit" style="height:30px; width:100px">CONTACT</button>           <a href="login.php"><button type="submit" style="height:30px; width:100px">LOGIN</button></a>             <a href="register.php"><button type="submit" style="height:30px; width:150px"> REGISTRATION</button></a> </font></h1></pre>

 <h2 style="text-align:center;text:u;">LOGIN FORM</h2>

<font color="orange"><h3> Login here</h3></font>
<form action=" " method="POST">
USERNAME:<br /><input type="text" name="user" required><br/>
PASSWORD:<br /><input type="password" name="pass" required><br /><br />

 Category:</br>
       <select name="cat" required>
       <option value="empty">select </option>
        <option value="faculty">Faculty </option>
        <option value="student">Student</option>                  
           </select><br/>

<pre>    <input type="submit" value="Login" name="submit" />   <input type="submit" value="cancel" name="submit" />
</form>

<?php
if(isset($_POST["submit"]))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$cat=$_POST['cat'];

$con=mysql_connect('localhost','qroot','password') or die (mysql_error());
mysql_select_db('qroot') or die('cannot select db');
  
$query=mysql_query("select * from login where username='".$user."' AND  password='".$pass."' AND category= '".$cat."' ");
$numrows = mysql_num_rows($query);
if($numrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername = $row['username'];
$dbpassword = $row['password'];
$dbcat = $row['category'];
}
$sql=mysql_query("SELECT * FROM `login` where category='faculty' ");
$numrow = mysql_num_rows($sql);
if($numrow!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername = $row['username'];
$dbpassword = $row['password'];
}
if($user== $dbusername && $pass== $dbpassword )
{
session_start();
$_SESSION['sess_user'] = $user;
header('location:faculty.html');
}
}
$sql=mysql_query("SELECT * FROM `login` where category='student' ");
$numrow = mysql_num_rows($sql);
if($numrow!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername = $row['username'];
$dbpassword = $row['password'];
}
 if($user== $dbusername && $pass== $dbpassword)
{
session_start();
$_SESSION['sess_user'] = $user;
header('location:student.html');
}
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
 
