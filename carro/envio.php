    <?php include_once "include/header.php"; ?>
    <!-- clasee
        class="slider_section" 
        class="container" este es el general tiene margenes
        class="about"
        class="title"
        class="about_box"
        class="blog_box"
        class="row"
     -->

    
    <!-- Page Banner Section Start -->
    <div class="baner " style="background-image: url(assets/images/);">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="background:rgba(0,0,0,0.4);margin-top: 10px;">
                    <font size="16" color="#fff"><i>Confirma datos de envio</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="section" >
        <div class="container" style="color: #000; font-size: 18px;">
        
        <form class="needs-validation" novalidate style="text-align: center;" method="POST" action="control/sipedido.php">

          <div class="form-row">

            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Ingresa tu nombre completo <strong>*</strong></label>
              <input type="text" class="form-control" id="validationCustom01" name="nom" placeholder="Nombre completo"  required>
              <div class="invalid-feedback">
                Por favor ingrese su nombre.
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Ingresa un numero de contacto <strong>*</strong></label>
              <input type="text" class="form-control" id="validationCustom02" name="tel" placeholder="Celular"   required>
              <div class="invalid-feedback">
                Por favor ingrese un numero de contacto.
              </div>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Ingresa tu direccion de envio completa <strong>*</strong></label>
              <input type="text" class="form-control" id="validationCustom03" name="direccion" placeholder="calle, numero, barrio, colonia/pueblo, delegacion, ciudad y codigo postal" required>
              <div class="invalid-feedback">
                Por favor ingresa tu direccion completa.
              </div>
            </div>
          </div>

          <div class="form-row">
            <?php 
            $query = mysqli_query($conexion, "SELECT sum(cantidad) as c, sum(total) as t FROM carrito WHERE `id_us`= '$nombre'");
            $dato = mysqli_fetch_array($query);
            $ccarro=$dato['c'];
            $c=$ccarro." productos";
            $tcarro=$dato['t'];
              ?>
            <div class="col-md-6 mb-3">
              <label for="validationCustom04">Cantidad de prodcutos</label>
              <input type="text" class="form-control" id="validationCustom04" name="cantidad" value="<?php echo $c ?>" required readonly>
              <div class="valid-feedback">
                Productos listos
              </div>
            </div>               
             
            <div class="col-md-6 mb-3">
                <label for="validationCustom05">Total a pagar</label>
                <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend3">$</span>
                </div>
                <input type="text" class="form-control" id="validationCustom05" name="pago" value="<?php echo $tcarro ?>" required readonly>
                <div class="valid-feedback">
                        Total listo
                </div>
                </div>
            </div>
          </div>
          <input type="text"  id="usuario" name="usuario" value="<?php echo $nombre ?>" required hidden>
        <center > 
            <button class="btn btn-outline-primary" type="submit">Continuar con la compra</button>
        </center>  
     
        </form>


     
        </div>
    </div>
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->

    <?php include_once "include/footer.php"; ?>
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