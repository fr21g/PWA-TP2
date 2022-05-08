
    
<?php 

include_once('estructura/encabezado.php');
?>

<div class="container text-center" style="width:700px;" >
<div class="row my-1" >
<div class="col border border-3 p-3" style="background-color:greenyellow; height: 62px; ">Header</div>
</div>    
<div class="row clearfix">

    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 offset-xl-3 offset-lg-3 border border-3 p-5" style="background-color:hotpink ; height: 140px;">1</div>
    <div class="col-xl-3  col-lg-3 col-md-3 col-sm-6 border border-3 p-5" style="background-color:hotpink ; height: 140px;">2</div>
    <div class="col-xl-3 d-none d-lg-block "></div>

    <div class="col-xl-3   col-lg-3 col-md-3 col-sm-6 border border-3 p-5" style="background-color:hotpink ; height: 140px;">3</div>

    <div class="offset-xl-6 offset-lg-6 col-md-3 col-sm-6 border border-3 p-5" style="background-color:hotpink ; height: 140px;">4</div>
</div>
<div class="row my-1">
    <div class="col d-none d-md-block d-lg-none border border-3 p-4" style="background-color:orange; height:75px;">Tablet</div>
</div>
<div class="row my-1">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-auto  border border-3 order-lg-4  p-5" style="background-color:#00FFFF; height: 140px;">a</div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  m-auto border border-3 order-lg-3  p-5" style="background-color:#00FFFF; height: 140px;">b</div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 m-auto  border border-3 order-lg-2  p-5" style="background-color:#00FFFF; height: 140px;">c</div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  m-auto border border-3 order-lg-1  p-5" style="background-color:#00FFFF; height: 140px;">d</div>
</div>

<div class="row ">
    <div class="col d-none d-lg-block   border border-3 p-4" style="background-color:orange; height:75px;">Desktop</div>
</div>
<div class="row ">
    <div class="col d-none d-sm-block d-md-none border border-3 p-3" style="background-color:orange; height: 69px;">Mobile</div>
</div>

<div class="row my-1">
    <div class="col d-none d-lg-block order-md-1 order-lg-1"></div>
    <div class="col d-sm-none d-md-block border border-3 p-4 order-md-3 order-lg-2" style="background-color:grey; height:85px">:(</div>
    <div class="col border border-3 p-4 order-md-2 order-lg-3" style="background-color:grey; height:85px">:D</div>
    <div class="col d-none d-lg-block order-md-4 order-lg-4"></div>
</div>

<div class="row " >
    <div class="col d-none d-sm-block border border-3 p-1" style="background-color:greenyellow; height: 40px;">Footer</div>
</div>


</div>



<?php
    include_once('estructura/pie.php');

    ?>