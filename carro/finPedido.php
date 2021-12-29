    <?php include_once "include/header.php"; 
    if(!isset($_GET['clavePedido'])  ){
        ?>
        <script type="text/javascript">
           alert("NO tines clave de pedido");
           window.location.href = "tienda.php";
        </script>
        <?php 
    }else{
      $clavePedido=$_GET['clavePedido'];
         
    }
    ?>
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
                    <font size="16" color="#fff"><i>Pedido realizado con éxito</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="section" >
        <div class="container" style="color: #000; font-size: 18px;">
         <h1>Felicidades has realizado tú pedido exitosamente.</h1> 
         <h3>A continuación puedes descargar los detalles de tu pedido así como ver la forma de pago para posteriormente cargar el comprobante, un asesor se pondrá en contacto lo más pronto posible. </h3> <h1>
         Tu codigo de pedido es: <?php echo $clavePedido; ?> </h1>
         <center>
         <a class="btn btn-info" href="pdf/generar.php?codigo=<?php echo $clavePedido?>" ><i class="fas fa-file-pdf"></i> Descargar pdf</a>
         <a href="tienda.php" type="button" class="btn btn-danger"><i class="fas fa-store"></i> ir a la tienda</a>
         <a href="pagos.php" type="button" class="btn btn-success"><i class="fas fa-pager"></i> Cargar Tiket de pago</a>

       </center>
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