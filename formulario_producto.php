<form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="precio_venta" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio_venta" name="precio_venta" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen" required>
    </div>
    <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar"></input>
</form>