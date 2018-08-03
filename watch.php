<?php

mysql_connect ("localhost","qroot","password");
mysql_select_db("qroot");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>watch video </title>
</head>
<body>
<?php

if(isset($_GET['id'] ))
{
               $i = $_GET['id'];

	$sql= mysql_query("SELECT * FROM 'videos' WHERE id='$i' ");
	while($row=mysql_fetch_assoc($sql))
{
	$name= $row['name'];
	$url=$row['url'];
}
echo "you are watching ".$name."<br/>";
echo "<embeded src='$url' width='560' height='315' > </embeded>";
}

else
{
	echo "Error!";
}


?>
</body>
</html>
