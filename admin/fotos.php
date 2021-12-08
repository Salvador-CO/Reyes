<?php 
    include_once "includes/header.php";
    $permiso = "imagenes";
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





<link rel="stylesheet" type="text/css" href="css/formulario.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


<!-- Contenido de la página de inicio -->
<div class="container-fluid">
        <!-- formulario -->
        <div class='form-overlay'></div>
        <div class='icon fa fa-pencil' id='form-container'>
          <span class='icon fa fa-close' id='form-close'></span>
          <div id='form-content'>
            <div id='form-head'>
            <h1 class='pre'>Carga tus imagenes</h1>
            <p class='pre'></p>
            </div>
            <br>
            <form action="control/subirfoto.php" method="post" enctype="multipart/form-data">
              <input class='input name' name='descri' id='descri' placeholder='descripción' type='text'>
              <select class='input select' name="estado" id="estado">
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
              </select>
             
              <select class='input select' name="uso" id="uso">
                <option value="galeria">Galeria</option>
                <option value="slider">Slider</option>
                <option value="ambos">Ambos</option>
              </select>
              <input class='input img' type="file" accept="image/png,image/jpeg" name="foto" id="foto" required>
              <input class='input submit' type='submit' value='Cargar Imagen' >
            </form>
          </div>
        </div>
        <!-- formulario -->
    <!-- fin del registro -->

    <!-- tabla -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Imagenes en el servidor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM imagenes ";
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
                            <th scope="col">Descripción</th>
                            <th scope="col">estado</th>
                            <th scope="col">uso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idvr=$rowedit["id_img"];
                        $des = $rowedit["descripcion"];
                        $estado = $rowedit["estado"];
                        $ruta = $rowedit["ruta"];
                        $uso = $rowedit["uso"];

                          if (empty($des)) {
                            $des="sin mensje";

                          }
                          if ($estado==1) {
                            $es="<font color='green'><b>Activo</b></font>";
                          }else{
                            $es="<font color='red'><b>Inactivo</b></font>";
                          }
                        ?>    
                        <tr >
                        <td><?php echo $idvr; ?></td>
                        <td><?php echo $des; ?></td>
                        <td><?php echo $es; ?></td>
                        <td><?php echo $uso; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a class="btn btn-danger btn-circle" href="control/eliminarfoto.php?idfoto=<?php echo $idvr?>&ruta=<?php echo $ruta?>"  onclick="return confirm('¿Estás seguro de eliminar esta imagen?');" ><i class='fas fa-trash-alt'></i></a>
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

 

<?php include_once "includes/footer.php"; ?>

 <script src="js/formulario.js"></script>