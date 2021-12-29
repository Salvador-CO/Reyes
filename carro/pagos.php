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
                    <font size="16" color="#fff"><i>Pagos</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="section"   >
        <div class="container" style="color: #000; font-size: 20px;">
             <form action="pagos.php" method="POST"> 
                <div class="form-row align-items-center" >
                    <div class="col-auto">
                      <label  for="inlineFormInput">Ingresa codigo de pedido:</label>
                      <input style="border-bottom: medium solid" type="text" class="form-control mb-2" id="codigo" name="codigo" placeholder="Ingresa codigo">
                    </div>
                     
                    <div class="col-auto" style="margin-top: 45px;">

                      <button type="submit" class="btn btn-outline-info btn-lg ">Buscar <i class="fas fa-search"></i></button>
                    </div>
                </div>  
            </form>
            <?php 
        if (empty($_POST['codigo'])) {
            
        }else{
            $codigo=$_POST['codigo'];
            $query = mysqli_query($conexion, "SELECT * FROM `pedidos` WHERE `clave`='$codigo'  ");
            $dato = mysqli_fetch_array($query);
            $numero = mysqli_num_rows($query);
            if ($numero>=1) {
            ?>

            <div class="card shadow mb-4" >
                 
                <div class="card-body">
                    <div class="table-responsive" id="tabla">
                        <?php
                        $sql1 ="SELECT Nombre, productos, total, pago FROM `pedidos` WHERE `clave`='$codigo' ";
                        $consultap = mysqli_query($conexion, $sql1);
                        if($consultap->num_rows === 0) {
                        ?>
                        <p>No has agregado ningun producto</p>
                        <?php
                        } else {
                        ?>
                        <table class="table table-bordered"   width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                     
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Productos</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Estado de pago</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 
                                while($rowedit = mysqli_fetch_array($consultap)){
                                $nom=$rowedit["Nombre"];
                                $pro = $rowedit["productos"];
                                $total = $rowedit["total"];
                                $pagoes = $rowedit["pago"];
                                ?>    
                                <tr >
                                <td><?php echo $nom; ?></td>
                                <td><?php echo $pro; ?></td>
                                <td>$ <?php echo $total; ?></td>
                                <td><?php echo $pagoes; ?></td>
  
                                 
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                         
                        <?php }?> <!-- fin del else -->
                    </div>
                </div>
            </div>
            <center><h1>Cargar tiket de pago</h1></center>

            <?php
            }else{
                echo "<br><center> <font size='10' color='red'> no hay pedido con ese codigo </font></center>";
            }
        }

         ?>
        </div>


    </div>
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->
     

    <?php include_once "include/footer.php"; ?>
