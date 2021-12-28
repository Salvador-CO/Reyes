<form action="control/producto.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Agregar producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
        <input type="text" class="form-control" id="accion" name="accion" value="agregar" hidden>
        

      </div>
      <div class="modal-body">
			<div id="datos_ajax_register"></div>
		  <div class="form-group">
            <label for="nombre0" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="moneda0" class="control-label">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" required maxlength="10">
          </div>
		  <div class="form-group">
            <label for="capital0" class="control-label">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" required maxlength="50"> 
          </div>
		  <div class="form-group">
            <label for="continente0" class="control-label">Descripcion</label>
            <input type="text" class="form-control" id="des" name="des" required  >
          </div>
      <div class="form-group">
            <label for="continente0" class="control-label">Estado</label>
            <select class='input select' name="estado" id="estado" required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
              </select>
          </div>
      <div class="form-group">
            <label for="continente0" class="control-label">Estado</label>
            <input class='input img' type="file" accept="image/png,image/jpeg" name="foto" id="foto" required>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- modal actualizar -->
<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar país:</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>
          <div class="form-group">
            <label for="codigo" class="control-label">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required maxlength="2">
      <input type="hidden" class="form-control" id="id" name="id">
          </div>
      <div class="form-group">
            <label for="nombre" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="45">
          </div>
      <div class="form-group">
            <label for="moneda" class="control-label">Moneda:</label>
            <input type="text" class="form-control" id="moneda" name="moneda" required maxlength="3">
          </div>
      <div class="form-group">
            <label for="capital" class="control-label">Capital:</label>
            <input type="text" class="form-control" id="capital" name="capital" required maxlength="30"> 
          </div>
      <div class="form-group">
            <label for="continente" class="control-label">Continente:</label>
            <input type="text" class="form-control" id="continente" name="continente" required maxlength="15">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- modal eliminar -->
<form id="eliminarDatos">
<div class="modal fade" id="dataDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <input type="text" class="form-control" id="accion" name="accion" value="eliminar" >

      <input type="hidden" id="id_pais" name="id_pais">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
</form>
