<?php
$conexion = new mysqli("localhost","root","","gatos");



if($conexion->connect_error){
die("Error de conexion: ".$conexion->connect_error);


}


?>