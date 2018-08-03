<?php
$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");

$sql="SELECT * FROM assign";

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


<table width="1000" >
<tr>
<th>Subject name</th><br/>
<th>Assignment no</th><br/>
<th>Question-1</th>
<th>Question-2</th>
<th>Question-3</th>
<th>Question-4</th>
<th>Question-5</th>
<th>Question-6</th>
<th>Submission Date</th>

</tr>
</form

<?php

while($assign=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$assign['sname']."</td>";
echo "<td>".$assign['ano']."</td>";
echo "<td>".$assign['q1']."</td>";
echo "<td>".$assign['q2']."</td>";
echo "<td>".$assign['q3']."</td>";
echo "<td>".$assign['q4']."</td>";
echo "<td>".$assign['q5']."</td>";
echo "<td>".$assign['q6']."</td>";
echo "<td>".$assign['daate']."</td>";

echo "</tr>";
}

?>
</body>
</html>
