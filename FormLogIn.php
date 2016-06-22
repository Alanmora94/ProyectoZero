<?php
session_start();


if (!isset($_SESSION['usuario'])) {

 ?>


<form>
    
<label>Nombre: </label><input type='text' name='nombre' id='nombre'><br>
<label>mail: </label><input type='mail' name='mail' id='mail'><br>
<label>Password: </label><input type='password' name='clave' id='clave'><br>
<input type='checkbox' name='recordarme' id='recordarme'><label>Recordar  </label>
<input type='reset' name='Limpiar' id='Limpiar' value='Cancelar'>
<button onclick='Logeo()'>Ingresar</button>
</form>

<?php

}else{
?>

<button onclick='Deslogeo()'>Deslogearse</button>

<?php
}

?>
