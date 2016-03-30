<html>
    <head>
    	
 		<link rel="stylesheet"  href="../css/style.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet">
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
         <?php include('app/funciones.php'); 
  			  write_log("Observar MAC");
  	  		?> 
        <title>Capturadora</title>
    </head>
    <body>
    <center>
    	<h1>Capturadoras</h1>
            <h1>
            <?php echo "Sucursal: "; 
                    if(isset($_GET['SUC']))
                        echo $_GET['SUC']
			;?> 
             </h1>
            <?php 
            	if(verificar_id($_GET['SUC'],$_GET['MAC'],$_GET['ID'])){	
            ?>
            	
            
			<form action='app/manage_captures.php?action=<?php 
				if(isset($_GET['action'])) {
					$tipo=$_GET['action'];
					if($tipo=="add" && isset($_GET['SUC'])) {
						echo $tipo."&SUC=".$_GET['SUC'];									
					} else if($tipo=="edit" && isset($_GET['MAC']) && isset($_GET['SUC']) && isset($_GET['ID']) ) {
						echo $tipo ."&MAC=".$_GET['MAC']."&SUC=". $_GET['SUC']. "&ID=".$_GET['ID'];					
					}
                }
			?>' method="post">
           <h2><?php if(isset($_GET['ID']))
                        echo "Capturadora N°". $_GET['ID']; 
                ?>
            </h2>
			<input maxlength='17' type='text' name='mac' value="<?php 
                        if(isset($_GET['MAC'])) 
                            echo $_GET['MAC']; 
                    ?>"/>
			<input  type="submit" class="btn btn-success" value="<?php 
                        if(isset($_GET['action']) && $_GET['action']==edit) {
                             echo "Editar capturadora";
								 
                        }else if(isset($_GET['action']) && $_GET['action']==add){	
                             echo "Agregar capturadora";
					    } ?>"/>		
		</form>
		<?php 
			
			}else {
					write_log("Error! parametros no válidos");
					echo "<div class='alert alert-danger'>Parametros no válidos</div>". "<br>";}
			echo "<a href='#' onclick='history.back();'><button class='btn btn-warningver'>Volver</button></a>"; 
		?>
		
    
            <script src="../js/jquery-2.2.2.min.js"></script>
			
    <script src="js/bootstrap.min.js"></script>
    </center>
    </body>
</html>
