<?php include_once "includes/header.php"; ?>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">
    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Nuestras redes sociales</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
          Agregar nueva red
        </button>
        <br><br>
    </center>
     <!-- tabla -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Redes sociales</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM redes ";
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
                            <th scope="col">Nombre Red</th>
                            <th scope="col">Link</th>
                            <th scope="col">Icono</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idvr=$rowedit["id"];
                        $nomred = $rowedit["nom_red"];
                        $link = $rowedit["link"];
                        $icono = $rowedit["icono"];
                        $contador++;
                        ?>    
                        <tr >
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $nomred; ?></td>
                        <td><?php echo $link; ?></td>
                        <td><center><i style="font-size: 36px;" class="<?php echo $icono; ?>"></i></center></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a class="btn btn-danger btn-circle" href="control/eliminarred.php?idred=<?php echo $idvr?>"  onclick="return confirm('¿Estás seguro de eliminar esta red?');" ><i class='fas fa-trash-alt'></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Agrega nueva red</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" action="control/redSub.php" method="post" novalidate>

          <div class="form-row">

            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Nombre de la red</label>
              <input type="text" class="form-control" id="validationCustom01" name="nomred" placeholder="Nombre"  required>
              <div class="invalid-feedback">
                Por favor ingrese un nombre
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Icono para la red </label>
               <select class="custom-select fab" name="iconos" required> 
                <option value="">Seleccione un icono</option>
                <option class="fab" value="fas fa-envelope-square">  &#xf4d5; Email </option>  
                  <option class="fab" value="fab fa-facebook">&#xf09a; Facebook </option>
                  <option class="fab" value="fab fa-instagram">&#xf16d; Instagram</option>
                  <option class="fab" value="fab fa-youtube">&#xf167; YouTube</option>
                  <option class="fab" value="fab fa-twitter-square">&#xf081; Twitter</option>
                  <option class="fab" value="fab fa-whatsapp">&#xf232; WhatsApp</option>
                  <option class="fab" value="fab fa-linkedin">&#xf08c; LinkedIn</option>
                  <option class="fab" value="fab fa-snapchat">&#xf2ab; Snapchat</option>
                  <option class="fab" value="fab fa-skype">&#xf17e; Skype</option>
                  <option class="fab" value="fab fa-pinterest">&#xf0d2; Pinterest</option>
                  <option class="fab" value="fab fa-telegram">&#xf2c6; Telegram</option>
                </select>
              <div class="invalid-feedback">
                por favor seleccione un icono
              </div>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Link de la red</label>
              <input type="text" class="form-control" id="validationCustom03" name="link" placeholder="Link" required>
              <div class="invalid-feedback">
                Por favor ingrese un link
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

