<?php
session_start();
include_once '../library/ConfiguracionServer.php';
include_once '../library/ConsultasSql.php';

sleep(1);
$nameAdmin= $_POST['admin-name'];
$passAdmin= md5($_POST['admin-pass']);

if(!$nameAdmin=="" && !$passAdmin==""){
    $verificar=  ejecutarSQL::consultar("select * from administrador where Nombre='".$nameAdmin."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("administrador", "Nombre, Clave", "'$nameAdmin','$passAdmin'")){
            echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Administrador añadido éxitosamente</p>
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
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El nombre que ha ingresado ya existe.<br>Por favor ingrese otro nombre</p>';
    }
}else {
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Error los campos no deben de estar vacíos</p>';
}