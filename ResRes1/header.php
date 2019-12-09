<?php 
    error_reporting(E_PARSE);
		session_start(); 
?>
<header>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div id="logo">
                                <a href="index.php"><img id="logo_img" class="img-fluid" src="imagenes/logo-blanco.png" alt="logo" title="logo" /></a>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9 col-12 paddleft" style="margin-top: 9px;">
                            <!-- Inicio main menu  -->
                            <div id="menu">	
                                <nav class="navbar navbar-expand-md">
                                    <div class="navbar-header">
                                        <span class="menutext d-block d-md-none">Menu</span>
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggler" type="button"><i class="icofont icofont-navigation-menu"></i></button>
                                    </div>
                                    <div id="mainMenu" class="collapse navbar-collapse navbar-ex1-collapse padd0">
                                        <ul class="nav navbar-nav">
                                            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#Nosotros">Nosotros</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#Restaurants">Reservar mesa</a></li>
											<?php
                            				if(!$_SESSION['nombreAdmin']=="")
											{
                                				echo ' 
                                    				<li class="nav-item"><a class="nav-link" href="configAdmin.php">Administración</a></li>
                                    				<li class="nav-item"><a class="nav-link" href="process/logout.php">'.$_SESSION['nombreAdmin'].' - Cerrar sesión <i class="fa fa-user"></i></a></li>
                                 					';
                            				}else
											{
                                				echo ' 
                                    				<li class="nav-item"><a class="nav-link" href="iniciarsesion.php">Login <i class="fa fa-user"></i></a></li>
                                 					';
                            				}
                        					?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </header>