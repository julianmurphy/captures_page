<html>
    <head>
    	 <link rel="stylesheet"  href="../css/style.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>Capturadoras</title>
        <?php 
  	  		write_log("Listando capturadoras de la sucursal");
  	  	?>
    <script>    
        function FunctionConfirm(mac,sucursal,id){
            return confirm("Desea quitar la capturadora\n N° " + id+ "\n MAC  " + mac + "\n Sucursal " + sucursal+"?");
        }            
    </script>

    </head>
    <body>
    <center>
    	<h1>Capturadoras</h1>
   <h1> <?php echo "Sucursal " . $sucursal; ?></h1>
		<table class="table-striped table-hover table-condensed table-bordered">
			<tr>
			<?php  ksort($array); 
				foreach($array as $key => $valor){
                    $suc_key = str_replace(':captures','',$key);					
                    echo "<tr class=\"n\">";

                    echo "<td><center>". $suc_key ."</center></td>" . "\n";

					echo "<td><center>".$valor ."</center></td>". "\n";

                    echo "<td><center><a href='../vermac.php?action=edit&MAC=$valor&SUC=$sucursal&ID=$key' >Editar</a></center></td>". "\n"; 
                    
                    echo "<td><center><a href='manage_captures.php?action=remove&MAC=$valor&SUC=$sucursal&ID=$key' onclick='return FunctionConfirm(\"$valor\",\"$sucursal\",\"$key\");'>Quitar</a></center></td>". "\n";

					echo "</tr>";
				}
			    
        	?>
			</tr>
		</table>
        </br>
        <?php 
        echo "<a href='../vermac.php?action=add&SUC=$sucursal'><button type='button' class='btn btn-success btn-md'>Agregar</button></a>            " .
        "<a href='suc_select.php'><button type='button' class='btn btn-warning btn-md'>Volver</button></a>"    ?>
        <script src="../js/jquery-2.2.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        
    
</body>
</html>
