
    
<?php 

include_once('estructura/encabezado.php');
?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<style>
    p{
        color:white;
    }
</style>
<div class="container">
    <div class="container">
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Consejo 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Consejo 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Consejo 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu4">Consejo 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu5">Consejo 5</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home">
                <p class="mt-5 col-8 font-monospace">
                Aunque muchas personas ven como un capricho el hecho de utilizar ropa en las mascotas, lo cierto es que en muchos casos puede ser beneficioso. 
                El pelo tiene la capacidad de proteger al animal de temperaturas extremas; pero al igual que los humanos, las mascotas pueden sentir frío o calor, en especial cuando el cambio de temperaturas se produce de manera brusca. En el mercado existen una gran variedad de prendas especialmente creadas para perros y gatos; el truco para elegir ropa para tu mascota adecuadamente está en optar por aquellas prendas que mejor se adapten al animal.
                </p>
            </div>
            <div class="tab-pane fade" id="menu1">
                <h3 class="mt-5 mb-3 text-uppercase">La comodidad</h3>
                <p class="col-8 font-monospace">
                Es fundamental que la ropa no limite los movimientos del animal, haciéndolo sentir incómodo. Para ello es importante conocer la talla exacta. Se puede calcular midiendo el largo de su espalda, el contorno de su pecho y del cuello, o simplemente llevándolos en el momento de hacer la compra.
                </p>
            </div>
            <div class="tab-pane fade" id="menu2">
                <h3 class="mt-5 mb-3 text-uppercase">La tela</h3>
                <p class="col-8 font-monospace">
                El tipo de tela elegido para la ropa de nuestras mascotas es realmente importante. Existen prendas realizadas con telas hipoalergénicas como por ejemplo el jersey de algodón. Siempre se recomienda que el algodón esté presente, ya sea en toda la prenda o al menos en su parte interior, ya que muchas otras telas pueden llegar a provocar alergia o picazón.
                </p>
            </div>
            <div class="tab-pane fade" id="menu3">
                <h3 class="mt-5 mb-3 text-uppercase">La época del año</h3>
                <p class="col-8 font-monospace">
                Si tu perro o gato pasa mucho tiempo al aire libre durante el invierno, se aconseja optar por un abrigo. En cambio, si durante las épocas más frías del año el animal suele quedarse en casa y buscas una prenda para el verano, la mejor opción será elegir una más ligera y fina.
                </p>
            </div>
            <div class="tab-pane fade" id="menu4">
                <h3 class="mt-5 mb-3 text-uppercase">Las costuras</h3>
                <p class="col-8 font-monospace">
                Mientras que muchas prendas vienen con costuras bien realizadas, otras no cuentan con buenas terminaciones. Esto puede molestar a los animales, haciendo que su cuello se irrite por el roce. Por eso antes de elegir ropa para tu mascota deberás revisar las costuras en cuello y puños
                </p>
            </div>
            <div class="tab-pane fade" id="menu5">
                <h3 class="mt-5 mb-3 text-uppercase">La durabilidad</h3>
                <p class="col-8 font-monospace">
                Al igual que los niños, los animales suelen jugar y ensuciarse. En el momento de elegir deberás tener en cuenta que la ropa para mascotas pueda lavarse sin problema alguno. Se recomienda evitar telas que se puedan reducir tras el lavado, además la prenda deberá ser fácil de colocar y sacar para evitarle molestias.
                </p>
            </div>
        </div>
       
        </div>
       

        <?php
    include_once('estructura/pie.php');

    ?>