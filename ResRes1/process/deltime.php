<?php
require_once '../library/ConfiguracionServer.php';
require_once '../library/ConsultasSql.php';

sleep(1);
$nitProve= $_POST['Time'];
$cons=  ejecutarSQL::consultar("select * from Horarios where Codigo='$nitProve'");
$totalprove = mysql_num_rows($cons);

if(!$totalprove==""){
    if(consultasSQL::DeleteSQL('Horarios', "Codigo='".$nitProve."'")){
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Registro eliminado éxitosamente</p>
			<script>
        	setTimeout(function(){
        	url ="configAdmin.php";
        	$(location).attr("href",url);
        	},1000);
			window.location.replace("../configAdmin.php")
    		</script>
		';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>
			<script>
        	setTimeout(function(){
        	url ="configAdmin.php";
        	$(location).attr("href",url);
        	},1000);
			window.location.replace("../configAdmin.php")
    		</script>
	   '; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El registro no existe</p>
			<script>
        	setTimeout(function(){
        	url ="configAdmin.php";
        	$(location).attr("href",url);
        	},1000);
			window.location.replace("../configAdmin.php")
    		</script>
	';
}