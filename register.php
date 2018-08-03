
<!doctype html>
<html>
<title>Register</title>
<body background ="th1.jpg">

<h1 
style="text-align:center;background-color:steelblue;
border: 1px solid black;"><marquee> <font color="white">
VIRTUAL CLASS ROOM</font></marquee></h1>

<h1 
style="text-align:center;background-color:steelblue;
border: 2px solid black;"> <font color="white"><div align="left">
<pre>       <a href="home.html"><button type="submit" style="height:30px; width:100px">HOME</button></a>         <button type="submit" style="height:30px; width:100px">IMAGES</button>         <button type="submit" style="height:30px; width:100px">CONTACT</button>           <a href="login.php"><button type="submit" style="height:30px; width:100px">LOGIN</button></a>             <a href="register.php"><button type="submit" style="height:30px; width:150px"> REGISTRATION</button></a> </font></h1></pre>

<font color="red"> <h2 style="text-align:center;text:u;">REGISTRATION FORM</h2></font>
<center>
<font color="black"><b>
<form action=" " method="POST">
       USERNAME:
      <input type="text" name="user" required><br /></br>
       PASSWORD:
      <input type="password" name="pass" required><br /></br>
      FirstName:
      <input type="text" name="fname" required/> <br/></br>
       LastName:
      <input type="text" name="lname" required/> <br/></br>
       Gender:
       <select name="gen" required>
       <option value="empty">select </option>
        <option value="male">Male </option>
        <option value="female">Female </option>                  
           </select><br/></br>
       Email_Id: 
       <input type="email" name="em" required /> <br/></br>
      Course:
         <select name="cou" required>
       <option value="empty">select </option>
        <option value="au">AUTO </option>
        <option value="cs">CSE </option> 
          <option value="ec">ECE </option> 
 	<option value="ee">EEE </option> 
	 <option value="ci">CIVIL </option> 
	 <option value="me">MECH </option> 
	 <option value="ii">IT </option> 
                  
         	  </select><br/></br>
     


       Mobile_no:
       <input type="text" name="mob" required> <br/></br>
  Category:
       <select name="cat" required>
       <option value="empty">select </option>
        <option value="faculty">Faculty </option>
        <option value="student">Student</option>                  
           </select><br/></br>
 Roll No:
       <input type="text" name="rollno" required> <br/></br>

         <input type="submit" value="login" name="submit" />
</form>


<?php
if(isset($_POST["submit"]))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gen=$_POST['gen'];
$em=$_POST['em'];
$cou=$_POST['cou'];
$mob=$_POST['mob'];
$cat=$_POST['cat'];
$rollno=$_POST['rollno'];


$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");

$query=mysql_query("SELECT * FROM login where username=' ".$user." ' ");  
$numrows=mysql_num_rows($query);
if($numrows==0)
{
$sql="INSERT INTO login(username,password,firstname,lastname,gender,email,course,mobile,category,rollno)
VALUES('$user','$pass','$fname','$lname','$gen','$em','$cou','$mob','$cat','$rollno')";
$result=mysql_query($sql);

if($result)
{
 echo 'Account successfully created';
}
else
{
echo 'failure';
}
}
else
{
echo 'that username already exists please ty again with another.';
}
}
?>
</body>
</html>
