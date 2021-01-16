<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Administración</title>

    <?php include "com/estilos.php"?>
    <?php include "com/scripts.php"?>

</head>

<body>

<?php include "com/cabecera.php"?>

<script>
    function get_numTransc() {
        $('#numTransc').load('getnumTransc');
        setTimeout(get_numTransc, 3000);
    }
</script>


<aside id="lateralShop">
    <article>
        <h5>  Información actualizada en tiempo real:</h5>

            <header>
                Productos:
                <script>
                    numero_productos();
                    setTimeout(numero_productos,1000);
                </script>
                <p id="products">
            </header>

        <header>
            Ventas:
            <script>
                get_numTransc();
                setTimeout(getnumTransc,1000);
            </script>
            <p id="numTransc">
        </header>



        </p>
    </article>
</aside>



<section>
        <article>
        <h1>Lista de Productos </h1>
            <a href="crearProducto" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#4ddb94;color:rgb(255,255,255);margin-top:12px;">Crear Productos</a>
            <table id="example"  class="table table-striped  table-bordered" width="100%" bgcolor="#a9a9a9">
            <thead>
            <tr>
                <th>Id</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Subtipo</th>
                <th>Precio €</th>
                <th>Stock</th>
                <th>Fecha</th>
            </tr>
            </thead>
            <tbody>

        <?php
        if (isset($products, $paquetes)){
                foreach ($products as $product){
                if($product->type == "Paquetes"){
                    foreach ($paquetes as $paquete){
                        if($product->id == $paquete->id_product) {
                            ?>

        <tr>
            <td><?php echo $paquete->id_product ?></td>
            <td><?php echo $product->type ?></td>
            <td><?php echo $paquete->name ?></td>
            <td><?php echo $paquete->description ?></td>
            <td><?php echo $paquete->type ?></td>
            <td><?php echo $paquete->price ?> €</td>
            <td><?php echo $paquete->stock ?></td>
            <td><?php echo $paquete->date ?></td>

            <form method="get">
                <input type="hidden" name="idProducto" value="<?php echo $product->id ?>">
                <td>
                    <button class="basura" type="submit" formaction="shopAdmin/actualizarProducto">
                        <img src="assets/img/editar.png" alt="editar" height="30" width="30"> Editar
                    </button>
                </td>
                <td>
                    <button class="basura" type="submit" formaction="shopAdmin/eliminarProducto">
                        <img src="assets/img/basura.png" alt="eliminar" height="30" width="30" > Eliminar
                    </button>
                </td>
            </form>
        </tr>
                    <?php }}}}} ?>
            <tbody>
        </table>
    </article>


    <article>
        <h1> Lista de Transacciones </h1>
    </article>

</section>

<?php include "com/pieDePagina.php"?>

</body>

</html>
