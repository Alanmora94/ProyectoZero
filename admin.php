<?php 

    $accion = isset($_POST['accion']) ? $_POST['accion'] : NULL;


    switch ($accion) {
        case 'FormLogin':
            
            include("partes/FormLogin.php");

            break;
        
    }


 ?>