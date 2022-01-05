    <?php include_once "include/header.php"; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
    <div class="baner " style="background-image: url(assets/images/tu.jpg);">
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
            <br>
            <div class="col-lg-5 col-md-7 mx-auto my-auto">
                    <form action="pagos.php" method="get"> 
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
                </div>
            <?php 
        if (empty($_GET['codigo'])) {
            
        }else{
            $codigo=$_GET['codigo'];
            $query = mysqli_query($conexion, "SELECT * FROM `pedidos` WHERE `clave`='$codigo' && `id_us`='$nombre'");
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
            <center><h1>Cargar ticket de pago</h1></center>

<div class="container">
    <?php
        $codigo=$_GET['codigo'];
        $sqlpago ="SELECT ticket FROM `pedidos` WHERE `clave`='$codigo' AND `id_us`='$nombre'";
        $consultapago = mysqli_query($conexion, $sqlpago);
        while($rowedit = mysqli_fetch_array($consultapago)){
        $ticket=$rowedit["ticket"];

         if ($ticket == null){
    ?>
    <br>
    <div class="row">
        <div class="col-lg-5 col-md-7 mx-auto my-auto">
            <div class="card">
                <div class="card-body px-lg-5 py-lg-5 text-center">

                    <form class="md-form" action="control/subirpago.php" method="post" enctype="multipart/form-data">
                        <main class="main_full">
                            <div class="container">
                                <div class="panel">
                                    <div class="button_outer">
                                        <div class="btn_upload">
                                            <input type="file" id="upload_file" name="archivo" required />
                                            Subir imagen
                                        </div>
                                        <div class="processing_bar"></div>
                                        <div class="success_box"></div>
                                    </div>
                                </div>
                                <div class="error_msg"></div>
                                <div class="uploaded_file_view" id="uploaded_view">
                                    <span class="file_remove">X</span>
                                </div>
                            </div>
                        </main>
                        <input type="text" name="codigo" value="<?php echo $codigo ?>" hidden="true">
                        <center>
                            <button type="submit" class="btn btn-success" class="button">Aceptar</button>
                        </center>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php
        }else{
    ?>
            
    <br>
    <div class="row">
         <div class="col-lg-5 col-md-7 mx-auto my-auto">
            <div class="card">
                    <div class="card-body px-lg-5 py-lg-5 text-center">
                        <p>Pago realizado</p>
                        <img src="https://img.icons8.com/color/144/000000/in-progress--v3.png"/>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }} ?>

            <?php
            }else{
                echo "<br><center> <font size='10' color='red'> No hay pedido con ese codigo </font></center>";
            }
        }

         ?>
        </div>


    </div>

    <script type="text/javascript">
        var btnUpload = $("#upload_file"),
            btnOuter = $(".button_outer");
        btnUpload.on("change", function(e){
            var ext = btnUpload.val().split('.').pop().toLowerCase();
            if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
                $(".error_msg").text("Not an Image...");
            } else {
                $(".error_msg").text("");
                btnOuter.addClass("file_uploading");
                setTimeout(function(){
                    btnOuter.addClass("file_uploaded");
                },3000);
                var uploadedFile = URL.createObjectURL(e.target.files[0]);
                setTimeout(function(){
                    $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
                },3500);
            }
        });
        $(".file_remove").on("click", function(e){
            $("#uploaded_view").removeClass("show");
            $("#uploaded_view").find("img").remove();
            btnOuter.removeClass("file_uploading");
            btnOuter.removeClass("file_uploaded");
        });
    </script>
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->
     

    <?php include_once "include/footer.php"; ?>
