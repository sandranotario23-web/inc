<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <div>
            <?php echo $titulo ?>
        </div>
        <div class="usuario">

        <img src="img/perfil.png" alt="Foto de perfil">

        <span>Invitado</span>

        <form action="logout.php" method="post">
            <input type="submit" value="Desconectar">
        </form>

    </div>
    </header>
    <div class="contenedor">