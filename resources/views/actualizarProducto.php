<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/" target="_top">
    <title>Actualizar Producto</title>

    <?php include "com/estilos.php" ?>
    <?php include "com/scripts.php" ?>

</head>
<body class="fondo">

<?php include "com/cabecera.php"; ?>


<?php
if (isset($id)){
$product = \App\Products::where('id', $id)->first();
$tipoControlador = $product->type;
?>

<section class="main">

    <article>
        <h1 class="titulo"> Edite el producto de tipo: <?php echo $tipoControlador ?> </h1>


        <form method="post" action="procesar_producto_actualizado" class="form">
            <?= csrf_field() ?>
            <input type="hidden" name="idProducto" value="<?php echo $product->id ?>">
            <input type="hidden" name="typeProducto" value="<?php echo $product->type ?>">

            <table>
                <tbody>

                <?php if ($tipoControlador == 'Paquetes') {
                    $paquete = \App\Paquetes::where('id_product', $id)->first();
                    ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $paquete->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $paquete->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $paquete->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $paquete->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $paquete->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $paquete->type ?>">
                        </th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Cruceros') {
                    $cruise = \App\Cruceros::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $cruise->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $cruise->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $cruise->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $cruise->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $cruise->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $cruise->type ?>">
                        </th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Actividades') {
                    $activity = \App\Actividades::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $activity->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $activity->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $activity->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $activity->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $activity->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $activity->type ?>">
                        </th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Escolares') {
                    $escolares = \App\Escolares::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $escolares->name ?>">
                        </th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $escolares->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $escolares->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $escolares->date ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $escolares->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $escolares->type ?>">
                        </th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Universitarios') {
                    $universitarios = \App\Universitarios::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText"
                                   value="<?php echo $universitarios->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $universitarios->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText"
                                   value="<?php echo $universitarios->price ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText"
                                   value="<?php echo $universitarios->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText"
                                   value="<?php echo $universitarios->stock ?>"></th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText"
                                   value="<?php echo $universitarios->type ?>"></th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Vuelos') {
                    $vuelos = \App\Vuelos::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $vuelos->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $vuelos->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $vuelos->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $vuelos->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $vuelos->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $vuelos->type ?>">
                        </th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Ancianos') {
                    $ancianos = \App\Ancianos::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $ancianos->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $ancianos->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $ancianos->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $ancianos->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $ancianos->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $ancianos->type ?>">
                        </th>
                    </tr>
                    </tr>

                <?php } elseif ($tipoControlador == 'Familias') {
                    $familias = \App\Familia::where('id_product', $id)->first(); ?>
                    <tr>
                        <p>
                        <th><label>Nombre del producto:</label></th>
                        <th><input type="text" name="name" class="inputText" value="<?php echo $familias->name ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <p>
                        <th><label>Descripción:</label></th>
                        <th><input type="text" name="description" class="inputText"
                                   value="<?php echo $familias->description ?>"></th>
                        </p>
                    </tr>
                    <tr>
                        <th><label>Precio del Producto en €: </label></th>
                        <th><input type="number" name="price" class="inputText" value="<?php echo $familias->price ?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label>Fecha: </label></th>
                        <th><input type="text" name="date" class="inputText" value="<?php echo $familias->date ?>"></th>
                    </tr>
                    <tr>
                        <th><label>Stock: </label></th>
                        <th><input type="number" name="stock" class="inputText" value="<?php echo $familias->stock ?>">
                        </th>
                    </tr>
                    <tr>
                    <tr>
                        <th><label>Subtipo de Producto: </label></th>
                        <th><input type="text" name="subtype" class="inputText" value="<?php echo $familias->type ?>">
                        </th>
                    </tr>
                    </tr>
                <?php } ?>


                <?php } ?>

                </tbody>
                <tfoot id="btns">
                <th>
                    <button  type="reset" onclick="window.location.href='shopAdmin'" id="botonesUno">Cancelar</button>
                </th>
                <th></th>
                <th>
                    <button type="submit" value="Editar" id="botonesdos">Crear</button>
                </th>
                </tfoot>

            </table>
        </form>
    </article>
</section>
<?php include "com/pieDePagina.php"; ?>

</body>
</html>

