<?php 
    include_once "includes/header.php";
    $permiso = "eventos"; //cambiar el nombre
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
<!-- CKeditor -->
<script src="../assets/ckeditor/ckeditor.js"></script>


<!-- Contenido de la página de inicio -->
<div class="container-fluid">
    <!-- formulario -->
        <div class='form-overlay'></div>
        <div class='icon fa fa-pencil' id='form-container'>
          <span class='icon fa fa-close' id='form-close'></span>
          <div id='form-content'>
            <div id='form-head'>
            <h1 class='pre'>Nuevo Evento</h1>
            <p class='pre'></p>
            </div>
            <br>
            <form action="control/guardar_event.php" method="post" enctype="multipart/form-data">
                <div class="form-group">      
                  <label>Nombre del evento: </label>
                  <input class='input name' name='nombre' id='nombre' placeholder='Nombre' type='text'>
                </div>
                <div class="from-group">
                    <label>Descripción del evento:</label>
                    <input class='input name' name='descripcion' id='descripcion' placeholder='Descripción' type='text'>
                </div>
                <div class="from-group">
                    <label>Lugar del evento:</label>
                    <input class='input name' name='lugar' id='lugar' placeholder='Lugar' type='text'>
                </div>
                <div class="from-group">
                    <label>Fecha del evento:</label>
                    <input class='input name' name='fecha' id='fecha' placeholder='Fecha' type='date'>
                </div>
                <div class="from-group">
                    <label>Hora del evento:</label>
                    <input class='input name' name='hora' id='hora' placeholder='Hora' type='time'>
                </div>
                <br>
                <div class="form-group" style="align-items: center; display: flex; justify-content: center;">
                    <input class='input submit' type='submit' value='Guardar' >
                </div>
            </form>
          </div>
        </div>
        <!-- formulario -->

    <!-- tabla -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Eventos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM eventos ";
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $id=$rowedit["id"];
                        $titulo=$rowedit["nombre"];
                        $contenido = $rowedit["descripcion"];
                        $foto = $rowedit["lugar"];
                        $fecha = $rowedit["fecha"];
                        $hora = $rowedit["hora"];
                        
                        ?>    
                        <tr >
                        <td><?php echo $titulo; ?></td>
                        <td><?php echo strip_tags(substr($contenido,0,50)); echo "..."; ;?></td>
                        <td><?php echo $foto; ?></td>
                        <td><?php echo $fecha; ?></td>
                        <td><?php echo $hora; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a class="btn btn-danger btn-circle" href="control/eliminarevento.php?id=<?php echo $id?>"  onclick="return confirm('¿Estás seguro de eliminar evento?');" ><i class='fas fa-trash-alt'></i></a>
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