<?php
$user=array("Majo","Josue");
$pass=array(206213,741236);

$estado=false;
$nombre=$_POST['nombre'];
$password=$_POST['pass'];

$tam=count($user);
for($x=0; $x<$tam; $x++)
{
	if($user[$x]==$nombre && $pass[$x]==$password)
	{
		$estado=true;
	}
}
if($estado)
{
	header("location:Ventas.php");
}
else 
{
	echo "Incorrect User";
}
?>