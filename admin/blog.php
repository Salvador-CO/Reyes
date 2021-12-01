<?php include_once "includes/header.php"; ?>
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
            <h1 class='pre'>Nueva Publicación</h1>
            <p class='pre'></p>
            </div>
            <br>
            <form action="control/guardar_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">      
                  <label>Titulo del Post: </label>
                  <input class='input name' name='titulo' id='titulo' placeholder='Titulo' type='text'>
                </div>
                <div class="from-group">
                    <label>Contenido de Post:</label>
                    <textarea class='input name' rows="6" id="body" name="contenido" required>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </textarea>
                </div>
                <div class="from-group">
                    <input class='input img' type="file" accept="image/png,image/jpeg" name="archivo" id="archivo" required>                    
                </div>
                <div class="form-group" style="align-items: center; display: flex; justify-content: center;">
                    <input class='input submit' type='submit' value='publicar' >
                </div>
            </form>
          </div>
        </div>
        <!-- formulario -->

    <!-- tabla -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Entradas del blog</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM blog ";
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
                            <th scope="col">Titulo</th>
                            <th scope="col">Contenido</th>
                            <th scope="col">Archivo</th>
                            <th scope="col">Fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $id=$rowedit["id"];
                        $titulo=$rowedit["titulo"];
                        $contenido = $rowedit["contenido"];
                        $foto = $rowedit["file"];
                        $fecha = $rowedit["date"];
                        $ruta = $rowedit["file"];
                        
                        ?>    
                        <tr >
                        <td><?php echo $titulo; ?></td>
                        <td><?php echo strip_tags(substr($contenido,0,100)); echo "..."; ;?></td>
                        <td><?php echo $foto; ?></td>
                        <td><?php echo $fecha; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a class="btn btn-danger btn-circle" href="control/eliminarpost.php?id=<?php echo $id?>&ruta=<?php echo $ruta ?>"  onclick="return confirm('¿Estás seguro de eliminar esta imagen?');" ><i class='fas fa-trash-alt'></i></a>
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
 <script>
  CKEDITOR.replace( 'body' );
</script>