<?php 
    include_once "includes/header.php";
    $permiso = "colaboradores"; //cambiar el nombre
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

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Colaboradores</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
          Agregar nuevo colaborador
        </button>
        <br><br>
    </center>

     <!-- tabla -->
    <div class="card shadow mb-4" id="tabla" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Colaboradores</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM usuarios where tipo ='1' ";
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
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idus=$rowedit["id_us"];
                        $nomus = $rowedit["nom_us"];
                        $correous = $rowedit["correo"];
                        $claveus = $rowedit["clave"];
                        $tipous = $rowedit["tipo"];
                        $contador++;
                        ?>    
                        <tr >
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $nomus; ?></td>
                        <td><?php echo $correous; ?></td>
                        <td><?php echo $claveus; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a href="rol.php?id=<?php echo $idus; ?>" class="btn btn-info"><i class='fas fa-key'></i></a>
 
                        <a class="btn btn-danger btn-circle" href="control/colaborador.php?id=<?php echo $idus; ?>"  onclick="return confirm('¿Estás seguro de eliminar esta red?');" ><i class='fas fa-trash-alt'></i></a>


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
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo colaborador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" onsubmit="return NewColaborador();" method="post" novalidate>
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Nombre</label>
              <input type="text" class="form-control" id="nom" name="nom" placeholder="Nombre" required>
              <div class="invalid-feedback">
                Por favor ingrese nombre
              </div>
            </div>
            
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
              <div class="invalid-feedback">
                Por favor ingrese un correo
              </div>
            </div>

            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Contraseña</label>
              <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" required>
              <div class="invalid-feedback">
                Por favor ingrese una contraseña
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

