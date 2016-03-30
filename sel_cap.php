<html>
    <head>
    	<link rel="stylesheet" href="../css/style.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet"> 
        <?php include('app/funciones.php'); 
  	 	 write_log("Seleccionando capturadora");
  	  	?>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Seleccionar capturadora</title>
    </head>
    <body>
    <div class="container">
    <div class="col-xs-12">
    <center>
    	<h1> Capturadoras </h1>
        <form action="capture_logic.php" method="GET">
            <b>Numero sucursal </b>
            <input type="text" name="sucnumber" />
            <input type="hidden" name="captures"  value="capturadora"/>
    	    <input type="submit" class="btn btn-success"  name="Siguiente" value="Siguiente">
        </form>
        
        <table class="table-striped table-hover table-condensed table-bordered">
            <tr>
                <td>Sucursal</td>
                <td>N° Capturadoras</td>
            </tr>
                <?php 
                    foreach($array as $key ){
                        echo '<tr>';
                        echo '<td><center><a href="capture_logic.php?sucnumber='.numSuc($key).'&captures=capturadora">'.str_replace(":captures","",$key).'</a></center></td>';
                        echo '<td><center>'. mclen($key). '</center></td>';
                        echo '</tr>';
                    }
                ?>
        </table>


        <a href="../index.php"><button type="button" class="btn btn-warning">Volver</button></a>  
             <script src="../js/jquery-2.2.2.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
    </center>
    </div>
    </div>
    </body>
</html>
