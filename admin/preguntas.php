<?php 
    include_once "includes/header.php";
    $permiso = "preguntas";
    $sqlper = mysqli_query($conexion, 
      "SELECT `estado` FROM `detalle_permisos` WHERE `nom_permiso`='$permiso' && `id_usuario` = '$id'");
    $per = $sqlper->fetch_assoc();
    if(isset($per['estado']) && $per['estado']=='no' && $id != 1 ){
        ?>
        <script type="text/javascript">
          alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Sin permiso para esta seccion</font></b><br><img src="img/alto.png" width="30%" alt=""></center>',
          'onok': function(){ window.location.href = "index.php"; }}).show();
        </script>
        <?php 
    }
?>
<!-- Contenido de la página de inicio -->
<div class="container-fluid">
    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Preguntas</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
          Agregar nueva pregunta
        </button>
        <br><br>
         
    </center>
     <!-- tabla -->
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Preguntas en el servidor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive" id="tabla">
                <?php
                $sql1 ="SELECT * FROM preguntas ORDER BY `id_preg` ASC";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                             
                            <th scope="col">id</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Categoria</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idpre=$rowedit["id_preg"];
                        $codigo = $rowedit["codigo"];
                        $des = $rowedit["descripcion"];
                        $tipo = $rowedit["tipo"];
                        $cat = $rowedit["categoria"];
                        ?>    
                        <tr >
                        <td><?php echo $idpre; ?></td>
                        <td><?php echo $codigo; ?></td>
                        <td><?php echo $des; ?></td>
                        <td><?php echo $tipo; ?></td>
                        <td><?php echo $cat; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a class="btn btn-danger btn-circle" href="control/pregunta.php?idpre=<?php echo $idpre?>"  onclick="return confirm('¿Estás seguro de eliminar esta red?');" ><i class='fas fa-trash-alt'></i></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php }?> <!-- fin del else -->
            </div>
        </div>
    </div>
    <!-- Fin de la tabla  -->

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega nueva pregunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" onsubmit="return newpregunta();" method="post" novalidate>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Codigo de la pregunta</label>
               <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo Ej: P1"  required>
              <div class="invalid-feedback">
                Por favor ingrese un codigo
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Tipo de pregunta</label>
               <select class="custom-select fab" name="tipo" id="tipo" required> 
                  <option value="">Seleccione un tipo</option>
                  <option value="1" > Abierta </option>  
                  <option value="2" disabled style="color:grey;">Cerrada </option>
                  <option value="3" disabled style="color:grey;">Opcion múltiple </option>
                </select>
              <div class="invalid-feedback">
                por favor seleccione un tipo
              </div>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom02">Categoria de la pregunta</label>
               <select class="custom-select fab" name="cate" id="cate" required> 
                  <option value="">Seleccione una categoria</option>
                  <option value="personal" >Personal </option>  
                  <option value="contacto" >Contacto </option>
                  <option value="generales" >Generales</option>
                </select>
              <div class="invalid-feedback">
                por favor seleccione una categoria
              </div>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Pregunta</label>
              <textarea class="form-control" id="pregunta" name="pregunta" rows="5" required></textarea>
               <div class="invalid-feedback">
                Por favor ingrese la pregunta
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Registrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- validacion -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
<?php include_once "includes/footer.php"; ?>

