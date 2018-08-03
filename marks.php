
<!doctype html>
<html>
<title>Uploadresults</title>
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


 <h2 style="text-align:center;text:u;">UPLOAD RESULTS FORM</h2>

<h3> ENTER MARKS HERE</h3>
<form action=" " method="POST">
       STUDENT NO:</br>
      <input type="text" name="sno"><br />
       YEAR:</br>
       <select name="yr">
       <option value="empty">select </option>
        <option value="y1">1st year </option>
        <option value="y2">2nd year</option>       
	 <option value="y3">3nd year</option> 
	 <option value="y4">4nd year</option>            
           </select><br/>

  SEMISTER:</br>
       <select name="sem">
       <option value="empty">select </option>
        <option value="s1">1 </option>
        <option value="s2">2</option>       
         </select><br/>
      SUBJECT NAME:</br >
      <input type="text" name="sname" required/> <br/>
       Marks 1:</br> 
      <input type="text" name="m1" required /> <br/>
        Marks 2:</br>
       <input type="text" name="m2" > <br/>
       Marks 3:</br>
       <input type="text" name="m3" > <br/></br>
         <input type="submit" value="Upload result" name="submit" />
</form>


<?php
if(isset($_POST["submit"]))
{
$sno=$_POST['sno'];
$yr=$_POST['yr'];
$sem=$_POST['sem'];
$sname=$_POST['sname'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];


$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");


$sql="INSERT INTO marks(sno,year,sem,sname,mark1,mark2,mark3)
VALUES('$sno','$yr','$sem','$sname','$m1','$m2','$m3')";
$result=mysql_query($sql);


echo 'UPLOADED SUCCESSFULLY';
}
?>
</body>
</html>
