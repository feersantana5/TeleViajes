<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Paquetes</title>

    <?php include "com/estilos.php" ?>
    <?php include "com/scripts.php" ?>

</head>

<body style="background: url(&quot;assets/img/intro-bg.jpg&quot;), #c9c9c9;">

<?php include "com/cabecera.php" ?>

<div class="container" style="margin-top: 8px;">
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="img-thumbnail w-100 d-block" src="assets/img/aurora4.jpg"
                                                   alt="Auroras"></div>
            <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="assets/img/disney.jpg"
                                            alt="Disney"></div>
            <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="assets/img/praga.jpg" alt="Praga">
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators" style="width: 100%; text-align: center; margin-left: 0; padding-top: 2em">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
    </div>
</div>

<div class="container" style="margin-top: 100px;">
    <h1>Los paquetes más populares</h1>
    <div class="card-group">

        <?php
        if (isset($products, $paquetes)) {
            foreach ($products as $product) {
                if ($product->type == "Paquetes") {
                    foreach ($paquetes as $paquete) {
                        if ($product->id == $paquete->id_product) {
                            if ($paquete->type == "Popular") { ?>

                                <div class="card" style="margin: 1em; border: black 3px; border">
                                    <img class="card-img-top w-100 d-block" src="assets/img/<?php echo $paquete->name ?>.jpg" alt="<?php echo $paquete->name ?>" style="  width: 200px; height: 500px;">
                                    <div class="card-body">
                                        <h4 class="card-title"
                                            style="color: rgb(34,33,33);"><?php echo $paquete->name ?></h4>
                                        <p class="card-text"
                                           style="color: rgb(21,21,21);"><?php echo $paquete->description ?></p>
                                        <p class="card-text" style="color: rgb(21,21,21);">
                                            &nbsp; <?php echo $paquete->date ?></p>
                                        <p class="text-center bg-info card-text" style="color: rgb(21,21,21);">
                                            Desde <?php echo $paquete->price ?> €</p>

                                        <form method="get" action="/addCart/<?php echo $product->id ?>" style="text-align: center">
                                            <input type="number" name="amount" value="1" min="1">
                                            <button class="fa fa-shopping-cart"
                                                    style="text-align: right;font-size: 20px;"></button>                                                    style="margin-left: 32%;">¡Reserva ya!
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            <?php }
                        }
                    }
                }
            }
        }
        ?>
    </div>

</div>
</div>
<div class="container" style="margin-top: 100px;">
    <h1>Paquetes Temáticos</h1>
    <div class="card-group">

        <?php
        if (isset($products, $paquetes)) {
            foreach ($products

                     as $product) {
                if ($product->type == "Paquetes") {
                    foreach ($paquetes

                             as $paquete) {
                        if ($product->id == $paquete->id_product) {
                            if ($paquete->type == "Magicos") { ?>
                                <div class="card" style="margin: 1em; border: black 3px; border">
                                    <img class="card-img-top w-100 d-block" src="assets/img/<?php echo $paquete->name ?>.jpg" alt="<?php echo $paquete->name ?>"
                                                       style="  width: 200px; height: 500px;">
                                    <div class="card-body">
                                        <h4 class="card-title"
                                            style="color: rgb(34,33,33);"><?php echo $paquete->name ?></h4>
                                        <p class="card-text"
                                           style="color: rgb(21,21,21);"><?php echo $paquete->description ?></p>
                                        <p class="text-left card-text"
                                           style="color: rgb(21,21,21);"><?php echo $paquete->date ?></p>
                                        <p class="text-center bg-info card-text" style="color: rgb(21,21,21);">
                                            Desde <?php echo $paquete->price ?>
                                            €</p>
                                        <form method="get" action="/addCart/<?php echo $product->id ?>" style="text-align: center">
                                            <input type="number" name="amount" value="1" min="1" style="display: inline-block">
                                            <button class="fa fa-shopping-cart" style="text-align: right;font-size: 20px;"></button>
                                        </form>
                                    </div>
                                </div>
                            <?php }
                        }
                    }
                }
            }
        } ?>
    </div>
</div>


<?php include "com/pieDePagina.php" ?>

</body>

</html>
