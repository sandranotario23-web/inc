<?php
$titulo = "Generar Pedido";


include("header.php");
include("nav.php");
?>
<div class="contenido">
    <input type="submit" value="Comprobar ofertas" />
    <br />
    <input type="submit" value="Finalizar pedido" />
    <table>
        <td>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Alérgenos</th>
            <th>Cantidad Total</th>
            <th>Ofertas</th>
        </td>
        <td>
            <!-- Aqui van los datos -->
        </td>
    </table>
</div>



<?php
include("footer.php");
?>