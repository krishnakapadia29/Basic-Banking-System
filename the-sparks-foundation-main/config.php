<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="sparks_bank";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn) 
{

	echo "";

}
else
{
	echo "not ok";
}

?>
</body>
</html>