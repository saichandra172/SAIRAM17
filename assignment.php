
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


 <h2 style="text-align:center;text:u;">Assignments FORM</h2>
<h3> Assignment question here </h3>
<form action=" " method="POST">
       SUBJECT NAME</br>
      <input type="text" name="name" required><br />
       ASSIGNMENT NO</br>
      <input type="password" name="ano"><br />
      Question 1</br >
      <input type="text" name="q1"/ required> <br/>
       Question 2</br> 
      <input type="text" name="q2" /> <br/>
	Question 3</br> 
      <input type="text" name="q3" /> <br/>
	Question 4</br> 
      <input type="text" name="q4" /> <br/>
	Question 5</br> 
      <input type="text" name="q5" /> <br/>
	Question 6</br> 
      <input type="text" name="q6" /> <br/>
Submission DATE</br> 
      <input type="date" name="dt"  required/> <br/>
       
                  
     
     


      
         <input type="submit" value="Submit" name="submit" />
</form>


<?php
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$ano=$_POST['ano'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$dt=$_POST['dt'];


$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");


$sql="INSERT INTO assign(sname,ano,q1,q2,q3,q4,q5,q6,daate)
VALUES('$name','$ano','$q1','$q2','$q3','$q4','$q5','$q6','$dt')";
$result=mysql_query($sql);


echo 'Assignments submited';
}
?>
</body>
</html>
