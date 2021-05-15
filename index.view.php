<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Contacto</title>

</head>

<body>
    
    <div class="container-sm wrap">
        <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre " value="<?php if(!$enviado && isset($nombre)){ echo $nombre; } ?>">   
            </div>
           
            <div>
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo " value="<?php if(!$enviado && isset($correo)){ echo $correo; } ?>">
            </div>

            <div>
                <label for="texto">Mensaje</label>
                <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Escribe tu mensaje aquí"><?php if(!$enviado && isset($mensaje)){ echo $mensaje; } ?></textarea>
            </div>
            <br>
            
            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>    
                <div class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>
            
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>

</html>