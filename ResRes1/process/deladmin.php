<?php
session_start();
include_once '../library/ConfiguracionServer.php';
include_once '../library/ConsultasSql.php';

sleep(1);
$nameAd= $_POST['name-admin'];
$consA=  ejecutarSQL::consultar("select * from administrador where Nombre='$nameAd'");
$totalA = mysql_num_rows($consA);

if($totalA>0){
    if(consultasSQL::DeleteSQL('administrador', "Nombre='".$nameAd."'")){
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Administrador eliminado éxitosamente</p>
			<script>
        		setTimeout(function(){
        		url ="configAdmin.php";
        		$(location).attr("href",url);
				},1000);
				window.location.replace("../configAdmin.php")
    		</script>
		';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El nombre del administrador no existe</p>';
}

