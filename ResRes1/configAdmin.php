<?php
    require_once './library/ConfiguracionServer.php';
    require_once './library/ConsultasSql.php';
    require_once './process/securityPanel.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include './main-superior.php'?>
	
	
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Reserva de mesas -  Universidad Inacap</title>
        <meta name="description" content="">
	
		<link rel="stylesheet" href="./css2/bootstrap.min.css">
	

	
</head>
<style>
	.form-control {
		font-size: 11px !important;
	}	
	
	select.form-control:not([size]):not([multiple]) {
    height: calc(2.85rem + 2px);
	}
</style>
<body  class="header-2 one-page" data-spy="scroll" data-target="#mainMenu" data-offset="70">
			<?php include 'header.php'?>
    <section id="prove-product-cat-config" style="margin-top: 100px;">
        <div class="container">
            <div class="page-header">
              <h1>Panel de administración reservas<small class="tittles-pages-logo"> Inacap<a></small></h1>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#Productos" role="tab" data-toggle="tab" style="margin-top:-22px">Reservas</a></li>
              <li role="presentation"><a href="#Admins" role="tab" data-toggle="tab">Admin</a></li>
			  <li role="presentation"><a href="#Time" role="tab" data-toggle="tab">Horarios</a></li>
            </ul>
            <div class="tab-content">
                <!--==============================Panel reservas ===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Productos">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-4">
                        <br><br>
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Cancelar solicitud de reserva</h2>
                             <form action="process/delreserva.php" method="post" role="form">
                                 <div class="form-group">
                                     <label>Reservas</label>
                                     <select class="form-control" name="prod-reserva">
                                         <?php 
                                             $productoc=  ejecutarSQL::consultar("select * from Reserva");
                                             while($prodc=mysql_fetch_array($productoc)){
                                                 echo '<option value="'.$prodc['CodigoReserva'].'">Por '.$prodc['Nombre'].' '.$prodc['Apellido'].' para '.$prodc['CantPersonas'].'     personas, para la fecha '.$prodc['Fecha'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>
                         </div>
                    </div>
					
					<div class="col-xs-12 col-sm-8">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Reservas sin confirmar</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Apellido</th>
                                          <th class="text-center">Fecha</th>
										  <th class="text-center" style="min-width: 120px;">Horario</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $productos=  ejecutarSQL::consultar("select * from Reserva");
                                        $upr=1;
									    
                                        while($prod=mysql_fetch_array($productos)){
											if($prod['CodigoEstado']=='C0'){
												echo '
                                                <div id="update-product">
                                                  <form method="post" action="process/updateReserva.php" id="res-update-product-'.$upr.'">
                                                    <tr>
                                                        <td style="display:none;">
                                                          <input class="form-control" type="hidden" name="CodigoActual" required="" value="'.$prod['CodigoReserva'].'">
                                                          <input class="form-control" type="text" name="CodigoNuevo" maxlength="30" required="" value="'.$prod['CodigoReserva'].'">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="Nombre" required="" value="'.$prod['Nombre'].'"></td>
                                                        <td><input class="form-control" type="text" name="Apellido" required="" value="'.$prod['Apellido'].'"></td>
                                                        <td style="display:none;"><input class="form-control" type="text-area" name="Correo" required="" value="'.$prod['Correo'].'"></td>
                                                        <td style="display:none;"><input class="form-control" type="text-area" name="Telefono" required="" value="'.$prod['Telefono'].'"></td>
														<td><input class="form-control" type="text-area" name="Fecha" required="" value="'.$prod['Fecha'].'"></td>
														<td><input class="form-control" type="text-area" name="Horario" required="" value="'.$prod['Horario'].'"></td>
														<td>';
                                                            $categoriac3=  ejecutarSQL::consultar("select * from estado where CodigoEstado='".$prod['CodigoEstado']."'");
                                                            while($catec3=mysql_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['CodigoEstado'];
                                                                $nameCat=$catec3['Nombre'];
                                                            }
                                                      echo '<select class="form-control" name="Estado">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from estado");
                                                                while($catec2=mysql_fetch_array($categoriac2)){
                                                                    if($catec2['CodigoEstado']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['CodigoEstado'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
														
                                                    </tr>
                                                  </form>
                                                </div>
                                                ';
                                            $upr=$upr+1;
											}else{
												echo '';
											}
                                            
                                        }
                                      ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
					
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar reservas</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Apellido</th>
                                          <th class="text-center">Correo</th>
                                          <th class="text-center">Telefono</th>
										  <th class="text-center">Fecha</th>
										  <th class="text-center">Horario inicio</th>
										  <th class="text-center" style="min-width: 150px;">Estado reserva</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $productos=  ejecutarSQL::consultar("select * from Reserva");
                                        $upr=1;
									    
                                        while($prod=mysql_fetch_array($productos)){
											if($prod['CodigoEstado']=='C1'){
												echo '
                                                <div id="update-product">
                                                  <form method="post" action="process/updateReserva.php" id="res-update-product-'.$upr.'">
                                                    <tr>
                                                        <td style="display:none">
                                                          <input class="form-control" type="hidden" name="CodigoActual" required="" value="'.$prod['CodigoReserva'].'">
                                                          <input class="form-control" type="text" name="CodigoNuevo" maxlength="30" required="" value="'.$prod['CodigoReserva'].'">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="Nombre" required="" value="'.$prod['Nombre'].'"></td>
                                                        <td><input class="form-control" type="text" name="Apellido" required="" value="'.$prod['Apellido'].'"></td>
                                                        <td><input class="form-control" type="text-area" name="Correo" required="" value="'.$prod['Correo'].'"></td>
                                                        <td><input class="form-control" type="text-area" name="Telefono" required="" value="'.$prod['Telefono'].'"></td>
														<td><input class="form-control" type="text-area" name="Fecha" required="" value="'.$prod['Fecha'].'"></td>
														<td><input class="form-control" type="text-area" name="Horario" required="" value="'.$prod['Horario'].'"></td>
														<td>';
                                                            $categoriac3=  ejecutarSQL::consultar("select * from estado where CodigoEstado='".$prod['CodigoEstado']."'");
                                                            while($catec3=mysql_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['CodigoEstado'];
                                                                $nameCat=$catec3['Nombre'];
                                                            }
                                                      echo '<select class="form-control" name="Estado">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from estado");
                                                                while($catec2=mysql_fetch_array($categoriac2)){
                                                                    if($catec2['CodigoEstado']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['CodigoEstado'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
														
                                                    </tr>
                                                  </form>
                                                </div>
                                                ';
                                            $upr=$upr+1;
											}else{
												echo '';
											}
                                            
                                        }
                                      ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
					
					<div class="col-xs-12 col-lg-12" style="margin-top: 50px;">
						                        <div class="panel panel-info" style="margin-top: 50px;">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Ingresar reservas manuales</h3></div>
                          <div class="table-responsive">
						<form role="form" action="process/regreserva.php" method="post" enctype="multipart/form-data" style="max-width: 95%;padding: 10px;">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
                    	<label>Nombre</label>
                        <input type="text" class="form-control"  placeholder="Nombre"  name="Nombre" required>
                    </div>
      	      		<div class="form-group">
                    	<label>Apellido</label>
                        <input type="text" class="form-control"  placeholder="Apellido" name="Apellido" required>
                    </div>
            		<div class="form-group">
                    	<label>Correo</label>
                    	<input type="text" class="form-control"  placeholder="Correo"  name="Correo" required>
                    </div>
            		<div class="form-group">
                    	<label>Telefono</label>
                    	<input type="text" class="form-control"  placeholder="Télefono"  name="Telefono" required>
                    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
                    	<label>Cantidad de personas</label>
                        <input type="text" class="form-control"  placeholder="Cantidad de personas" required   name="CantPersonas">
                    </div>
					<div class="form-group">
                    	<label>Fecha</label>
                        <input type="date" class="form-control"  placeholder="Fecha" required  name="Fecha">
                    </div>
					<div class="form-group">
                                            <label>Horario</label>
					<?php
					                                       $categoriac3=  ejecutarSQL::consultar("select * from Horarios");
                                                            while($catec3=mysql_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['Codigo'];
                                                                $nameCat=$catec3['Opc1'];
                                                            }
					                                             echo '<select class="form-control" name="Horario">';
                                                                 echo '<option value="'.$Opc1.'">'.$Opc1.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from Horarios");
                                                                while($catec2=mysql_fetch_array($categoriac2)){
                                                                    if($catec2['Codigo']==$codeCat){
                                                                        echo '<option value="'.$catec2['Opc1'].'">'.$catec2['Opc1'].'</option>';
                                                                    }else{
                                                                      echo '<option value="'.$catec2['Opc1'].'">'.$catec2['Opc1'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>';
					?>
						</div>
			</div>
				<input type="hidden"  name="admin-name" value="Admin">
                <p class="text-center"><button type="submit" class="btn btn-primary" style="margin-left: 13px;margin-top: 10px;">Reservar</button></p>
                <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;"></div>
			</div>
        </form>
					</div>
                </div>
                </div>

            </div>
        </div>
		  <!--==============================Panel Admins===============================-->
          <div role="tabpanel" class="tab-pane fade" id="Admins">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-admin">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar administrador</h2>
                                <form action="process/regAdmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="admin-name" placeholder="Nombre" maxlength="9" pattern="[a-zA-Z]{4,9}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input class="form-control" type="password" name="admin-pass" placeholder="Contraseña" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar administrador</button></p>
                                    <br>
                                    <div id="res-form-add-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-admin">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar administrador</h2>
                                <form action="process/deladmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Administradores</label>
                                        <select class="form-control" name="name-admin">
                                            <?php 
                                                $adminCon=  ejecutarSQL::consultar("select * from administrador");
                                                while($AdminD=mysql_fetch_array($adminCon)){
                                                    echo '<option value="'.$AdminD['Nombre'].'">'.$AdminD['Nombre'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar administrador</button></p>
                                    <br>
                                    <div id="res-form-del-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12"></div>
                    </div>
                </div>
		  <!--==============================Panel time ===============================-->
          <div role="tabpanel" class="tab-pane fade" id="Time">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-admin">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar time</h2>
                                <form action="process/regTime.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Opcion</label>
                                        <input class="form-control" type="text" name="Time" placeholder="Opcion" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar Time</button></p>
                                    <br>
                                    <div id="res-form-add-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-admin">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar time</h2>
                                <form action="process/deltime.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Time</label>
                                        <select class="form-control" name="Time">
                                            <?php 
                                                $adminCon=  ejecutarSQL::consultar("select * from Horarios");
                                                while($AdminD=mysql_fetch_array($adminCon)){
                                                    echo '<option value="'.$AdminD['Codigo'].'">'.$AdminD['Opc1'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar registro</button></p>
                                    <br>
                                    <div id="res-form-del-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12"></div>
                    </div>
                </div>
				</div>
    </section>
	<!-------------------------------------------------------------------->
			<!-- FOOTER -->
		
		<?php include 'main-footer.php'?>
		<?php include 'footer.php'?>
</body>
</html>