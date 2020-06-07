<!doctype html>
<html lang="en">
	<head>

       <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<title>Ventas</title>
            <link rel="stylesheet" type="text/css" href="estilos.css">
		</head>
		<body style="background-color:#DFE0E1">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light  ">
          <a class="navbar-brand" href="#">dōTERRA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="Index.html">Salir <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://youtu.be/wjOY4WXd3O0">Video</a>
              </li>
            </ul>
          </div>
        </nav>
		<div class="jumbotron" style="background-color:#000000">
            <font color="White">
              <h1 class="display-4">Acerca de dōTERRA</h1>
              <p class="lead">Los aceites esenciales son compuestos arom&aacuteticos vol&aacutetiles naturales que se encuentran en las semillas, la corteza, los tallos, las ra&iacuteces, las flores y otras partes de las plantas, se encargan de protegerlas y juegan un importante papel en la polinizaci&oacuten.</p>
              <hr class="my-4">
              <p>doTERRA, un derivado latino que significa "Don de la Tierra".</p>
            </font>
        </div>
        <hr color="gray" size=3>
        <br/>

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Recursos/doterra1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="Recursos/doterra2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="Recursos/doterra3.jpg"  class="d-block w-100" alt="...">
            </div>
          </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>

                  <?php
            if(isset($_GET['producto']))
            {
                $con=mysqli_connect("localhost", "root", "", "ventas");
                if(!$con)
	            {
		            die("Error en la conexión");
	            }
                $producto=$_GET['producto'];
                $precio=$_GET['Precio'];
                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
                $consulta=$con->query($query);
                $con->close();
        ?>
        <br><br>
        <div class="tabla">
                <table class="table-striped table-light table-hover"align="center" >
                    <tr>
                        <td>
                            <p><h2>Producto</h2></p>
                        </td>

                        <td>
                            <p><h2>Precio</h2></p>
                        </td>
                    </tr>
                    <?php
                        $con=mysqli_connect("localhost", "root", "", "ventas");
                        if(!$con)
	                    {
		                    die("Error en la conexión");
	                    }
                        $quer="SELECT * FROM `carrito` WHERE 1";
                        $pro=$con->query($quer);
                        $con->close();

                        While($row=mysqli_fetch_assoc($pro))
                        {
                            echo"
                               <tr>
                                   <td>
                                       <p>".$row['producto']."</p>
                                   </td>

                                   <td>
                                       <p>"."$".$row['precio']."</p>
                                   </td>
                                </tr>
                            ";
						}
                    ?>

                    <tr>
                        <td>
                            <p><h1>Total</h1></p>
                        </td>


                    <?php
                   
                        $con=mysqli_connect("localhost", "root", "", "ventas");
                        if(!$con)
	                    {
		                    die("Error en la conexión");
	                    }
                        $quer="SELECT * FROM `carrito` WHERE 1";
                        $pro=$con->query($quer);
                        $con->close();
                        While($row=mysqli_fetch_assoc($pro))
                        {
                            $total=$total+$row['precio'];
						}
                        echo"
                            <td>
                                  <p>"."$".$total."</p>
                            </td>";
                    ?>
                    </tr>
                </table>
        <?php
			}
        ?>
        </div>

        <br/><br/><br/>    
            <div class="container">   
                <div class="card-deck mt-3">

                  <div class="card text-center border-info">
                    <div class="card-body">
                    <img src="Recursos/menta.png" class="card-img-top" alt="La imagen no se encuentra disponible en estos momentos">
                      <h4 class="card-title">Peppermint</h4>
                      <p class="card-text">Promueve la función respiratoria saludable y la respiración despejada*
                        Promueve la salud digestiva*
                        Repele los insectos naturalmente<br>Tamaño:15 mL<br>
                        Precio:$29.33</p>
                      <a href="?producto=Peppermint & Precio=29.33" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>          

                  <div class="card text-center border-info">
                    <div class="card-body">
                    <img src="Recursos/melaleuca.png" class="card-img-top" alt="La imagen no se encuentra disponible en estos momentos">
                      <h4 class="card-title">Melaleuca</h4>
                      <p class="card-text">El aceite de Árbol de Té, es mejor conocido por sus cualidades purificantes, que lo hacen útil
                      para limpiar la piel, las superficies del hogar y purificar el aire.<br>Tamaño:15 mL<br>
                      Menudeo:$28.00
                      </p>
                      <a href="?producto=Melaleuca&Precio=28.00" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>          
  
                  <div class="card text-center border-info">
                    <div class="card-body">
                    <img src="Recursos/on-guard.jpg" class="card-img-top" alt="La imagen no se encuentra disponible en estos momentos">
                      <h4 class="card-title">On Guard</h4>
                      <p class="card-text">Como uno de los aceites más populares de doTERRA, On Guard es una potente mezcla patentada que apoya la salud 
                      de la función inmunitaria* y posee propiedades limpiadoras.<br>Tamaño:15 mL<br>
                      Precio:$45.33</p>
                      <a href="?producto=On_guard&Precio=45.33" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>          

                </div>
              </div>  
        <br/><br/><br/>
		</body>
</html>
