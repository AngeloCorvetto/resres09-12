<?php
require_once '../library/ConfiguracionServer.php';
require_once '../library/ConsultasSql.php';

 sleep(1);
 
 $prodreserva= $_POST['prod-reserva'];
 $cons=  ejecutarSQL::consultar("select * from Reserva where CodigoReserva='$prodreserva'");
 $totalreserva = mysql_num_rows($cons);
 if($totalreserva>0){
    if(consultasSQL::DeleteSQL('Reserva', "CodigoReserva='".$prodreserva."'")){
        echo '<img src="./img/correcto.png" class="center-all-contens"><br><p class="lead text-center">La reserva se elimino con éxito</p>
		<script>
        	setTimeout(function(){
        	url ="configAdmin.php";
        	$(location).attr("href",url);
        	},1000);
			window.location.replace("../configAdmin.php")
    	</script>
		
		';
    }else{
        echo '<img src="./img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
 }else{
     echo '<img src="./img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código de reserva no existe</p>
	 		<script>
        	setTimeout(function(){
        	url ="configAdmin.php";
        	$(location).attr("href",url);
        	},1000);
			window.location.replace("../configAdmin.php")
    	</script>
	 ';
 }