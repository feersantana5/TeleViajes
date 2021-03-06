<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro</title>

    <?php include "com/estilos.php" ?>
    <?php include "com/scripts.php" ?>

</head>

<body>

<?php include "com/cabecera.php" ?>

<div class="row register-form"
     style="background: url(&quot;assets/img/Aurora-Borealis-Iceland-Skogafoss-image.jpg&quot;) center / auto;">
    <div class="col-md-8 offset-md-2">
        <form method="post" class="custom-form" action="procesar_registro">
            <?= csrf_field() ?>
            <h1>Formulario de Registro</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="nameUser-input-field">Nombre de
                        Usuario*</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nombreDeUsuario"
                                                          required></div>
            </div>

            <?php
            if (isset($nombreDeUsuarioExistente)) {
                echo "<script>window.alert('Nombre de Usuario existente, inténtelo de nuevo.')</script>";
            }
            ?>

            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nombre*</label>
                </div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nombre" required></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"
                                                          for="surname-input-field">Apellidos*</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="apellidos" required>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email *</label>
                </div>
                <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" required></div>
            </div>

            <?php
            if (isset($emailExistente)) {
                echo "<script>window.alert('Email existente, inténtelo de nuevo.')</script>";
            }
            ?>

            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label"
                                                          for="pawssword-input-field">Contraseña</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="contra1" required>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repetir
                        Contraseña</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="contra2" required>
                </div>

                <?php
                if (isset($contraseñaIncorrecta)) {
                    echo "<script>window.alert('Las contraseñas no coinciden, inténtelo de nuevo.')</script>";
                }
                ?>

            </div>
            <label style="display: inline">Los campos marcados con * son obligatorios</label>
            <button class="btn btn-light submit-button" type="submit">Enviar Registro</button>
        </form>
    </div>
</div>

<?php include "com/pieDePagina.php" ?>

</body>

</html>
