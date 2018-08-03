<?php
$con=mysql_connect('localhost','qroot','password') or die(mysql_error());
mysql_select_db('qroot') or die ("cannot select db");

$sql="SELECT *FROM session";

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


<table width="600" border=1 >
<tr>
<th>Session Name</th><br/>
<th>Session Date</th><br/>
<th>Session Time</th>
<th>Place</th>

</tr>
</form

<?php

while($session=mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$session['name']."</td>";
echo "<td>".$session['sdt']."</td>";
echo "<td>".$session['stm']."</td>";
echo "<td>".$session['place']."</td>";

echo "</tr>";
}

?>
</body>
</html>
