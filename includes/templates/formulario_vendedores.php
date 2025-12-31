<fieldset>
    <legend>Informacion General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre Vendedor(a)" value="<?php echo sanitizarHTML($vendedor->nombre); ?>">

    <label for="apeliido">Apellido:</label>
    <input type="text" id="apeliido" name="vendedor[apeliido]" placeholder="apeliido Vendedor(a)" value="<?php echo sanitizarHTML($vendedor->apeliido); ?>">
</fieldset>

<fieldset>
    <legend>Informacion Extra</legend>

    <label for="telefono">Telefono:</label>
    <input type="text" id="telefono" name="vendedor[telefono]" placeholder="telefono Vendedor(a)" value="<?php echo sanitizarHTML($vendedor->telefono); ?>">

</fieldset>