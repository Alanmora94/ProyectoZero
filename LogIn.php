<?php 
session_start();

if (isset($_POST['accion']) == 'inicio') {
    
    if (isset($_COOKIE['usuario'])) {
    
    $_SESSION['usuario'] = $_COOKIE['usuario'];

    }
}else{




        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
        $mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
        $clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;
        $recordar = isset($_POST['recordar']) ? $_POST['recordar'] : NULL;


        if ($nombre == "admin" && $clave == "1234") {

            $_SESSION['usuario'] = 'admin';

        }else{

            $_SESSION['usuario'] = 'invitado';
        }

        if ($recordar == "true") {
            
            setcookie('usuario', $_SESSION['usuario'], time()+36000);
        }else
            {
            setcookie("usuario", "", time()-36000);
                
            }

}

$retorno = "favor de logearse...";

if (isset($_SESSION['usuario'])) {
    
    $retorno = $_SESSION['usuario'];
}

echo $retorno;



 ?>