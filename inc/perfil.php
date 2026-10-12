<?php
$titulo = "Perfil";
$usuario = "Invitado";

include("header.php");
include("nav.php");
?>
<div class="contenido">

<h1>Datos de la cuenta</h1>

<form>
    <label for="nombreUsuario">Nombre de usario</label>
    <input type="text" id="nombreUsuario" />
    <label for="contraseña">Contraseña</label>
    <input type="password" id="contraseña" />
</form>
<br />
<h1>Datos personales</h1>
<form>
    <label for="nombre">Nombre completo</label>
    <input type="text" id="nombre" />
    <label for="pais">País</label>
    <input type="text" id="pais" />
    <label for="telefono">Telefono</label>
    <input type="text" id="telefono" />
    <label for="correo">Correo</label>
    <input type="email" id="correo" />
    <br /><br />
    <label for="avatar">Avatar</label>
    <input type="file" id="avatar" />
    <br /><br />
    <input type="submit" id="avatar" value="Guardar" />
</form>

</div>
<?php
include("footer.php");
?>