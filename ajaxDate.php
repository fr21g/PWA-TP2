<?php
//include conexion con base de datos
include_once('basedatos.php');

if(isset($_POST["tipo"]) && !empty($_POST["tipo"])){
    //obtener colores
    $query = $conexion->query("SELECT color FROM indumentaria WHERE tipo = '".$_POST['tipo']."'");
    
    //contar filas
    $rowCount = $query->num_rows;
    
    //lista de colores
    if($rowCount > 0){
        echo '<option value="">seleccione color</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['color'].'">'.$row['color'].'</option>';
        }
    }else{
        echo '<option value="">Color no disponible</option>';
    }
}

?>