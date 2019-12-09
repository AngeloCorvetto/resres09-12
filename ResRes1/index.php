
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Reserva de mesas -  Universidad Inacap</title>
        <meta name="description" content=""> 
		<?php include 'main-superior.php'?>
    </head>
	
	<!--Script para el login, el pop-up mediante boton -->
<script>
	// Create Events for creating the modals
if (document.addEventListener) {
    document.addEventListener("click", handleClick, false);
}
else if (document.attachEvent) {
    document.attachEvent("onclick", handleClick);
}

function handleClick(event) {
    event = event || window.event;
    event.target = event.target || event.srcElement;

    var element = event.target;

    // Climb up the document tree from the target of the event
    while (element) {
        if (element.nodeName === "BUTTON" && /akela/.test(element.className)) {
            // The user clicked on a <button> or clicked on an element inside a <button>
            // with a class name called "foo"
            openModalListen(element);
            break;
        } else if (element.nodeName === "BUTTON" && /close/.test(element.className)) {
            // The user clicked on a <button> or clicked on an element inside a <button>
            // with a class name called "foo"
            closeModalListen(element);
            break;
        } else if (element.nodeName === "DIV" && /close/.test(element.className)) {
            // The user clicked on a <button> or clicked on an element inside a <button>
            // with a class name called "foo"
            closeModalListen(element);
            break;
        }

        element = element.parentNode;
    }
}

function openModalListen(button) {
    openModal(button.id);
}

function closeModalListen(button) {
  var modalFooter = button.parentElement;
  var modalContent = modalFooter.parentElement;
  var modalElement = modalContent.parentElement;
  var backdrop = document.getElementById("modal-backdrop");
    closeModal(modalElement, backdrop);
}

// Open modal
function openModal(clicked_id) {
  var button = document.getElementById(clicked_id);
  var modal = button.getAttribute("data-modal");
  var modalElement = document.getElementById(modal);
  var backdrop = document.createElement('div');
  backdrop.id="modal-backdrop";
  backdrop.classList.add("modal-backdrop");
  document.body.appendChild(backdrop);
  var backdrop = document.getElementById("modal-backdrop");
  backdrop.className += " modal-open";
  modalElement.className += " modal-open";
}

// Close Modal
function closeModal (modalElement, backdrop) {
  modalElement.className = modalElement.className.replace(/\bmodal-open\b/, '');
      backdrop.className = backdrop.className.replace(/\bmodal-open\b/, '');
}
</script>

<style>
	#trigger {
}

.modal {
  color: #1f4e5f;
  width: 40%;
  margin: 50px auto;
  border-radius: 5px;
  text-align:left;
  -webkit-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
  box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
  z-index: 1050;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  transition: opacity .15s linear;
  opacity: 0;
  -webkit-transition: opacity .15s linear;
  -o-transition: opacity .15s linear;  
  opacity: 1;
  display:none;
  background: #fff;
  max-height: 560px;
}

.large {
  width: 65%;
}

.small {
  width: 25%;
}

small {
  text-align:center;
  color: #FFF;
}

.modal-body, .modal-footer, .modal-heading {  
  padding: 25px 20px;
}

.modal-heading {
  border-bottom: 1px solid #c8f4de;
}

.modal-heading h2 {
  margin: 0;
}

.modal-heading h2 i {
  margin-right: 10px;
}

.modal-heading .close {
  position: absolute;
  right: 20px;
  top: 17px;
  font-size: 28px;
}

.modal-heading .close:hover {
  cursor: pointer;
}

.modal-footer {
  border-top: 1px solid #c8f4de;
  position: relative;
  bottom: 0;
}

.modal-footer button, #trigger button {
  background-color: #649dad;
  border: 1px solid transparent;
  color: #ffffff;
  font-weight: bold;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#trigger button {
   width:auto;
   margin: 0px auto;
}

.modal-footer button:hover, #trigger button:hover {
  background-color: #ffffff;
  color: #009ac9;
  border-color: #009ac9;
  cursor: pointer;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #000;
    opacity: .5;
    z-index: 0;
    display:none;
}

.modal-open {
  display: block;
}
	
#trigger2 {
}

.modal {
  color: #1f4e5f;
  width: 40%;
  margin: 50px auto;
  border-radius: 5px;
  text-align:left;
  -webkit-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
  box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
  z-index: 1050;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  transition: opacity .15s linear;
  opacity: 0;
  -webkit-transition: opacity .15s linear;
  -o-transition: opacity .15s linear;  
  opacity: 1;
  display:none;
  background: #fff;
}

.large {
  width: 65%;
}

.small {
  width: 25%;
}

small {
  text-align:center;
  color: #FFF;
}

.modal-body, .modal-footer, .modal-heading {  
  padding: 25px 20px;
}

.modal-heading {
  border-bottom: 1px solid #c8f4de;
}

.modal-heading h2 {
  margin: 0;
}

.modal-heading h2 i {
  margin-right: 10px;
}

.modal-heading .close {
  position: absolute;
  right: 20px;
  top: 17px;
  font-size: 28px;
}

.modal-heading .close:hover {
  cursor: pointer;
}

.modal-footer {
  border-top: 1px solid #c8f4de;
  position: relative;
  bottom: 0;
}

.modal-footer button, #trigger button {
  background-color: #649dad;
  border: 1px solid transparent;
  color: #ffffff;
  font-weight: bold;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#trigger button {
   width:auto;
   margin: 0px auto;
}

.modal-footer button:hover, #trigger button:hover {
  background-color: #ffffff;
  color: #009ac9;
  border-color: #009ac9;
  cursor: pointer;
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #000;
    opacity: .5;
    z-index: 0;
    display:none;
}

.modal-open {
  display: block;
}

</style>
	
<!--Static Modal-->
<div id="static" class="modal" tabindex="-1" role="dialog">
  <div class="modal-content">
    <div class="modal-heading">
      <h2><i class="fa fa-user"></i>Reserva mesas</h2>
      <div class="close"><i class="icofont-close-circled"></i></div>
    </div>
    <div class="modal-body">
    	<form role="form" action="process/regreserva.php" method="post" enctype="multipart/form-data">
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

	
<body class="header-2 one-page" data-spy="scroll" data-target="#mainMenu" data-offset="70">
        <div class="wrapper">
			<?php include 'header.php'?>
            <div id="home" class="slide"> 
                <div class="slideshow owl-carousel">
                    <div class="item">
                        <img src="imagenes/mesas.reservas.jpg" alt="banner" title="banner" class="img-fluid"/>
                    </div>
                    <div class="item">
                        <img src="imagenes/banner-2.jpg" alt="banner" title="banner" class="img-fluid"/>
                    </div>
                </div>
                <div class="slide-detail">
                    <div class="container">
                        
                        <h4>Reserva mesas</h4>
                        <p>Reserva tu mesa y no pierdas tu tiempo, come seguro. </p>
                        <a class="btn-primary btn btn-wide page-scroll" href="#Restaurants">Restaurants</a>
                    </div>
                </div>	
            </div>
            <div id="Nosotros" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-12 commontop text-left">
                            <h4>Estudiantes</h4>
                            <div class="divider style-1 left">
                                <i class="icofont icofont-ui-press hr-icon left"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <div class="container text-center">
	<h2>Ten en consideracion...</h2>
	<div class="row">
		<div class="col-sm-4">
			<img src="fotos/inaca1.jpg" id="icon">
			<h4>El menu siempre es sorpresa</h4>
			<p>Las reservas para comer en las clases de restaurante tienen menu "sorpresa", ya que el menu es de acuerdo a lo que se este practicando en esa clase </p>
		</div>
		<div class="col-sm-4">
			<img src="fotos/Carne1.jpg" id="icon">
			<h4>No hay platos especiales</h4>
			<p>En las reservas no se pueden hacer platos especiales por lo que no es recomendable para vegetarianos, celiacos, veganos, o alguna alergia o intolerancia a algun alimento</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="fotos/inacap2.jpg" class="img-responsive">
			<h4>Alumnos, docentes y administrativos</h4>
			<p>Solo alumnos, docemtes y personal administrativo de Inacap apoquindo tiene derecho a realizar reservas</p>
		</div>
		<div class="col-md-6">
				<img src="fotos/carne2.jpg" class="img-responsive">
				<h4>Es completamente gratis</h4>
				<p>El servicio otorgado a personas que se registren es completamente gratis, el servicio suele incluir como minimo una entrada, un plato de fondo, un postre y algun bebestible</p>
			</div>
	</div>
</div>
</div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            <!-- Blog Start -->
            <div id="Restaurants" class="blog">
                <div class="bloggs">
                    <div class="container">
                        <div class="row">
                            <!-- Title Content Start -->
                            <div class="col-sm-12 commontop text-center">
                                <h4>Reservas</h4>
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="icofont icofont-ui-press hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                                <p>Haz tus reservas aqui</p>
                            </div>
                            <!-- Title Content End -->
							
							<?php
                  			$consulta= ejecutarSQL::consultar("select * from restaurants ORDER BY RAND() limit 6");
                  			$totalproductos = mysql_num_rows($consulta);
                  			if($totalproductos>0){
                    			$nums=1;
					  			while($fila=mysql_fetch_array($consulta))
								{
                        			echo '
										<div class="col-sm-4">
                                			<!-- Single Blog Start -->
                                			<div class="box">
                                    			
                                    			<div class="caption">
                                        			<h4>'.$fila['Nombre'].'</h4>
                                        			<p class="des">'.$fila['Descripcion'].'</p>
													<div id="trigger">
														<button id="staticbtn" data-modal="static" class="btn btn-theme-alt btn-md akela">Reservar<i class="fa fa-user"></i></button>
													<div>
                                    			</div>
                                			</div>	
                                			<!-- Single Blog End -->
                            			</div>
                         			';
						 			if ($nums%4==0)
									{
										echo '';
									}
									$nums++;
                     			}   
                  			}else{
                      			echo '<h2>No hay productos registrados en la tienda</h2>';
                  			}  
              				?>	
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
            <!-- Footer Start -->
            <?php include 'footer.php'?>
            <!-- Footer End  -->
        </div>
		<?php include 'main-footer.php'?>
    </body>

</html>
