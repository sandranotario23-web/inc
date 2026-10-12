<?php
    $titulo = "Inicio";
    $mensaje = "¡Bienvenido/a a mySushi! ";
    $usuario = "Invitado ";

    include("header.php");
    include("nav.php");
?>
<div class="contenido">

<form>
    <label for="usuario">Usuario</label>
    <input type="text" id="usuario" />
    <br /><br />
    <label for="contraseña">Contraseña</label>
    <input type="text" id="contraseña" />
    <br /><br />
    <input type="submit" id="conectar" value="Conectar" />

</form>

</div>
<?php
    include("footer.php");
?>