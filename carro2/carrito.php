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
                    <font size="16" color="#fff"><i>Productos agregados</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="section" style="border: 1px solid; " >
        <div class="container" style="border: 1px solid; ">
            <!-- tabla -->
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Productos agregados al carrito</h6>
        </div>
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
                        <tr>
                             
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                            <th></th>
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
                        <tr >
                        <td><?php echo $codigo; ?></td>
                        <td><?php echo $des; ?></td>
                        <td><?php echo $tipo; ?></td>
                        <td><?php echo $cat; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a class="btn btn-danger btn-circle" href="control/carro.php?opcion=2&id=<?php echo $idpre?>"  onclick="return confirm('¿Estás seguro de eliminar esta producto?');" ><i class='fas fa-trash-alt'></i></a>
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
    <center>
        <a href="#" type="button" class="btn btn-outline-primary">Proceder a la compra</a>
        <a href="tienda.php" type="button" class="btn btn-outline-primary">ir a la tienda</a>
        </center> 
        </div>
    </div>
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->

    <?php include_once "include/footer.php"; ?>
