<?php
include_once "../conexionLocal.php";

$nombre=$_POST['nombre'];
$siglas=$_POST['siglas'];

$query="UPDATE Centro SET Nombre='$nombre', Siglas='$siglas' WHERE Nombre=$nombre";

$resultado=mysql_query($query);
if($resultado) {
	//success
	echo"Actualizado con exito, redireccionando";
	
} else { 
    //failure
    echo " Se produjo un error en la actualizacion, redireccionando";
   
}   
