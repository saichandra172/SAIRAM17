<?php
$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");

$sql="SELECT sname,mark1,mark2,mark3 FROM marks ";

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
<th>Student Name</th><br/>
<th>Marks-1</th><br/>
<th>Marks-2</th>
<th>Marks-3</th>

</tr>
</form

<?php

while($marks=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$marks['sname']."</td>";
echo "<td>".$marks['mark1']."</td>";
echo "<td>".$marks['mark2']."</td>";
echo "<td>".$marks['mark3']."</td>";

echo "</tr>";
}

?>
</body>
</html>
