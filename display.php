<?php
$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");

$sql="SELECT firstname,lastname,gender,email,course,category FROM login";

$records=mysql_query($sql);
?>

<!doctype html>
<html>
<title>Faculty profile</title>
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

<form action="" method="POST">


<table width="600" >
<tr>
<th>Name</th><br/>
<th>Gender</th><br/>
<th>Email_id</th>
<th>Course</th>
<th>Mobile no</th>

</tr>
</form

<?php

while($login=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$login['firstname'].$login['lastname']."</td>";
echo "<td>".$login['gender']."</td>";
echo "<td>".$login['email']."</td>";
echo "<td>".$login['course']."</td>";
echo "<td>".$login['category']."</td>";

echo "</tr>";
}

?>
</body>
</html>
