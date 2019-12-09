<?php
require_once '../library/ConfiguracionServer.php';
require_once '../library/ConsultasSql.php';

sleep(1);

$codeOldProdUp=$_POST['CodigoActual'];
$codeProdUp=$_POST['CodigoNuevo'];
$NombreUp=$_POST['Nombre'];
$ApellidoUp=$_POST['Apellido'];
$CorreoUp=$_POST['Correo'];
$TelefonoUp=$_POST['Telefono'];
$Fecha=$_POST['Fecha'];
$Horario=$_POST['Horario'];
$EstadoUp=$_POST['Estado'];

if(consultasSQL::UpdateSQL("Reserva","CodigoReserva='$codeProdUp',Nombre='$NombreUp',Apellido='$ApellidoUp',Correo='$CorreoUp',Telefono='$TelefonoUp',Fecha='$Fecha',Horario='$Horario',CodigoEstado='$EstadoUp'", "CodigoReserva='$codeOldProdUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 1 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },1000);
		window.location.replace("../configAdmin.php")
    </script>
	
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 1 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },1000);
		window.location.replace("../configAdmin.php")
    </script>
 ';
}