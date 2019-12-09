<?php
session_start();
include_once '../library/ConfiguracionServer.php';
include_once '../library/ConsultasSql.php';

sleep(1);
$nameAdmin= $_POST['Time'];

if(!$nameAdmin==""){
                    if(consultasSQL::InsertSQL("Horarios", "Opc1", "'$nameAdmin'")){
                       echo '
                            <img src="../assets/img/correctofull.png" class="center-all-contens">
                            <br>
                            <h3>El ingreso del nuevo time se ingreso correctamente</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver</a>
                            </p>
							<script>
        					setTimeout(function(){
        					url ="configAdmin.php";
        					$(location).attr("href",url);
        					},1000);
							window.location.replace("../configAdmin.php")
    						</script>
							';
                   	}else {
            			echo '
                <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                <br>
                <h3>Error los campos no deben de estar vacíos</h3>
                <p class="lead text-cente">
                    La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                    <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                </p>
						<script>
        	setTimeout(function(){
        	url ="configAdmin.php";
        	$(location).attr("href",url);
        	},1000);
			window.location.replace("../configAdmin.php")
    	</script>
				';
        }}
        ?>