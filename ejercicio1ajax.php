
    
<?php 

include_once('estructura/encabezado.php');
include_once('basedatos.php');
?>



<script type="text/javascript">

$(document).ready(function(){
    $('#select').on('change',function(){
        var ropaTipo=$(this).val();
        if(ropaTipo){
            $.ajax({
                type:'POST',
                url:'ajaxDate.php',
                data:'tipo='+ropaTipo,
                success:function(html){
                    $('#select2').html(html);

                }
            });
        }else{
            $('#select2').html('<option value="">Seleccionar tipo primero</option>');
        }
    });

   
});


</script>
<?php
//obtener los tipos
$query = $conexion->query("SELECT * FROM indumentaria GROUP BY tipo;");

//contar el total de filas
$rowCount = $query->num_rows;
?>
<div class="container">
    <div class="row">
        <div class="offset-4 col-4">
<select class="form-select form-select-lg mb-3" name="select" id="select">
    <option value="">Seleccionar tipo</option>
    <?php
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['tipo'].'">'.$row['tipo'].'</option>';
        }
    }else{
        echo '<option value="">No disponible</option>';
    }
    ?>
</select>

<select class="form-select form-select-lg mb-3" name="select2" id="select2">
    <option value="">Seleccione tipo primero</option>
</select>
    </div>
</div>
</div>
<?php

    include_once('estructura/pie.php');

    ?>