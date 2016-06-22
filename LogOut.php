<?php 
session_start();
session_unset();
session_destroy();

setcookie("usuario", "", time()-36000);

echo "Deslogeado...";

 ?>