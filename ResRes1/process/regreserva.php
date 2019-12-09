<html>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
        <?php
        session_start();
		require_once '../library/ConfiguracionServer.php';
		require_once '../library/ConsultasSql.php';
        
        $nombreReserv= $_POST['Nombre'];
        $ApellidoReserv= $_POST['Apellido'];
        $CorreoReserv= $_POST['Correo'];
        $TelefonoReserv= $_POST['Telefono'];				
		$CantPersonasReserv= $_POST['CantPersonas'];				
		$FechaReserv= $_POST['Fecha'];	
        $HorarioReserv= $_POST['Horario'];
        $AdminnameReserv= $_POST['admin-name'];
		$Estado= "C0";
						
        if(!$nombreReserv==""){
                if(!$nombreReserv==""  ){
                    if(consultasSQL::InsertSQL("Reserva", "Nombre, Apellido, Correo, Telefono, CantPersonas, Fecha, Horario, Admin, CodigoEstado", "'$nombreReserv','$ApellidoReserv','$CorreoReserv','$TelefonoReserv','$CantPersonasReserv','$FechaReserv','$HorarioReserv','$AdminnameReserv','$Estado'")){
                       echo '
                            <img src="../fotos/inacap2.jpg" class="center-all-contens">
                            <br>
                            <h3>La reserva se realizo correctamente al sistema, solo debe esperar la confirmación del local</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../index.php" class="btn btn-primary btn-lg">Volver</a>
                            </p>';
                   }else{
                      echo '
                            <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                            <br>
                            <h3>Ha ocurrido un error. Por favor intente nuevamente</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
                   }   
                }else{
                    echo ' 
                        <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                         <br>
                         <h3>introduzca datos validos</h3>
                         <p class="lead text-cente">
                             La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                             <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                         </p>';
                }
        }else {
            echo '
                <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                <br>
                <h3>Error los campos no deben de estar vacíos</h3>
                <p class="lead text-cente">
                    La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                    <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                </p>';
        }
        ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>