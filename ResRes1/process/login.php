<?php
    session_start();
	include '../library/ConfiguracionServer.php';
	include '../library/ConsultasSql.php';
    sleep(2);
    $nombre=$_POST['nombre-login'];
    $clave=md5($_POST['clave-login']);
    $radio=$_POST['optionsRadios'];
    if(!$nombre==""&&!$clave==""){
        $verAdmin=ejecutarSQL::consultar("select * from administrador where Nombre='$nombre' and Clave='$clave'");
        if($radio=="option2"){
            $AdminC=mysql_num_rows($verAdmin);
            if($AdminC>0){
                $_SESSION['nombreAdmin']=$nombre;
                $_SESSION['claveAdmin']=$clave;
                echo '<script> location.href="../index.php"; </script>';
            }else{
              echo '<img src="./fotos/inacap2.jpg" class="center-all-contens"><br>Error nombre o contraseña invalido'; 
            }
        }
        if($radio=="option1"){
            $UserC=mysql_num_rows($verUser);
            if($UserC>0){
                $_SESSION['nombreUser']=$nombre;
                $_SESSION['claveUser']=$clave;
                echo '<script> location.href="../index.php"; </script>';
            }else{
                echo '<img src="./fotos/inacap2.jpg" class="center-all-contens"><br>Error nombre o contraseña invalido';
            }
        }

    }else{
        echo '<img src="./fotos/inacap2.jpg" class="center-all-contens"><br>Error campo vacío<br>Intente nuevamente';
    }