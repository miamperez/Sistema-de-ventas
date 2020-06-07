<?php
	$con=mysqli_connect("localhost", "root", "", "ventas");
	if(!$con)
	{
		die("No hay conexión");
	}
	$nombre= $_POST["nombre"];
	$pass= $_POST["pass"];

	$query=mysqli_query($con, "SELECT * FROM usuarios WHERE User = '".$nombre."' AND pass = '".$pass."'");
	$nr=mysqli_num_rows($query);
	if($nr==1)
	{
			$con=mysqli_connect("localhost", "root", "", "ventas");
            if(!$con)
	        {
	            die("Error en la conexión");
			}
            $quer="DELETE FROM `carrito` WHERE 1";
            $pro=$con->query($quer);
		header("location:Ventas.php");
	}
	else if($nr==0)
	{
		header("location:Index.html"); 
	}
?>