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
        $query = mysqli_query($conexion, "SELECT * FROM `pedidos` WHERE `clave`='$clavePedido'");
        $dato = mysqli_fetch_array($query);
          $clave=$dato['clave'];
          $Nombre=$dato['Nombre'];
          $direccion=$dato['direccion'];
          $telefono=$dato['telefono'];
          $productos=$dato['productos'];
          $total=$dato['total'];
          $pago=$dato['pago'];
          $estado=$dato['estado'];
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
                    <font size="16" color="#fff"><i>Revisa tu pedido</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->   
    <div class="section" >
        <div class="container" style="color: #000; font-size: 18px;">
        <center><h1>Datos personales</h1></center>
          <h2>Nombre:  <?php echo $Nombre; ?> </h2> 
          <h2>Direccion:  <?php echo $direccion; ?> </h2> 
          <h2>Telefono:  <?php echo $telefono; ?> </h2> 
           
        <center><h1>Lista de productos</h1></center>
          <!-- tabla -->
    <div class="card shadow mb-4" >
        
        <div class="card-body">
            <div class="table-responsive" id="tabla">
                <?php
                $sql1 ="SELECT * FROM carrito where id_us ='$nombre' ";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr align="center">
                             
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idpre=$rowedit["id"];
                        $codigo = $rowedit["producto"];
                        $des = $rowedit["cantidad"];
                        $tipo = $rowedit["precio"];
                        $cat = $rowedit["total"];
                        ?>    
                        <tr align="center">
                        <td><?php echo $codigo; ?></td>
                        <td><?php echo $des; ?></td>
                        <td><?php echo $tipo; ?></td>
                        <td style="text-align: right;">$<?php echo $cat; ?></td>
                      
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr align="center">
                    
                            <th scope="col" colspan="2">Totales</th>
                            <th scope="col"  ><?php echo $productos; ?></th>
                            <th scope="col" style="text-align: right;">$ <?php echo $total; ?></th>
                        </tr>
                    </tfoot>
                </table>
                <?php }?> <!-- fin del else -->
            </div>
        </div>
    </div>
    <!-- Fin de la tabla  --> 
          <center> 
          <form action="control/confirmarPedido.php" method="POST">
            <h1>Codigo del pedido</h1> <h4>Recuerda este código para posteriormente cargar tu pago</h4> 

            <input class="form-control" type="text" name="codigo_pro" value="<?php echo $clave; ?>" style=" width: auto; text-align: center;" readonly>
            <input class="form-control" type="text" name="nom_us" value="<?php echo $nombre; ?>" style=" width: auto; text-align: center;" hidden>

            <button class="btn btn-outline-success" type="submit">Confirmar compra</button>
            
          </form>
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