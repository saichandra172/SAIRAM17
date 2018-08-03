<?php
session_start();
if(!isset($_SESSION['sess_user']))
{
header('location:login.php');
}
else
{
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<h2>welcome,<?=$_SESSION['sess_user']; ?> ! <a href="logout.php">Logout</a> </h2>
<p>
Thank You... Hope you find it intresting...!!
</p>
</body>
</html>
<?php
}
?>
