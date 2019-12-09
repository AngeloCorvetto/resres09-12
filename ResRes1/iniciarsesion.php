
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Reserva de mesas -  Universidad Inacap</title>
        <meta name="description" content="STEAM - Restaurant, food and Drinks HTML5 website template is Modern, Clean and Professional site template. Prefect for RESTAURANT, Bakery, Cafe, Bar, Catering, food business and for personal chef portfolio website."> 

		<?php include 'main-superior.php'?>
    </head>

	
<body class="header-2 one-page" data-spy="scroll" data-target="#mainMenu" data-offset="70">
        <div class="wrapper">
            <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
           <![endif]-->  

            <!--  Header Start  -->
            <?php include 'header.php'?>
            <!-- Header End   -->

            <!-- About Start -->
            <div id="about" class="about" style="margin-top: 100px;">
                <div class="container">
                    <div class="row">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-12 commontop text-left">
                            <h4>Iniciar sesión</h4>
                            <div class="divider style-1 left">
                                <i class="icofont icofont-ui-press hr-icon left"></i>
                                <span class="hr-simple right"></span>
                            </div>
                                <form action="process/login.php" method="post" role="form" class="FormCatElec" data-form="login">
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>
                  </div>
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                  </div>
                 <div class="radio" style="display:none;">
                    <label>
                        <input type="radio" name="optionsRadios" value="option2" checked>
                         Administrador
                    </label>
                 </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            <!-- Footer Start -->
			<?php include 'footer.php'?>
            <!-- Footer End  -->
        </div>
		<?php include 'main-footer.php'?>
    </body>

</html>
