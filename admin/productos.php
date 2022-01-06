<?php include_once "includes/header.php"; 
$permiso = "productos"; //cambiar el nombre
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
    }?>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <!-- Page Heading -->
   <?php include("includes/modalProducto/modal_agregar.php");?>
 
    <div class="container-fluid">
	 
		<div class='col-xs-6'>	
			<h3> Lista de productos</h3>
		</div>
		<div class='col-xs-6'>
			<h3 class='text-center'>		
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
			</h3>
		</div>	
	<!-- tabla -->
    <div class="card shadow mb-4" id="tabla" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM producto";
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
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $id=$rowedit["id"];
                        $nom = $rowedit["nom_p"];
                        $precio = $rowedit["precio"];
                        $cantidad = $rowedit["cantidad"];
                        $des = $rowedit["descripcion"];
                        $img = $rowedit["imagen"];
                        $estado = $rowedit["estado"];
                         if ($estado=="activo") {
                            $es="<font color='green'><b>Activo</b></font>";
                          }else if($estado=="inactivo"){
                            $es="<font color='red'><b>Inactivo</b></font>";
                          }else{
                            $es="<font color='#9A7D0A '><b>En espera</b></font>";
                          }
                        ?>    
                        <tr >
                        <td><?php echo $id; ?></td>
                        <td><?php echo $nom; ?></td>
                        <td><?php echo $precio; ?></td>
                        <td><?php echo $cantidad; ?></td>
                        <td><?php echo $des; ?></td>
                        <td align="center"> 
                        	<img src="../<?php echo $img; ?>" width="35px">
                        </td>
                        <td><?php echo $es; ?></td>
                        <td>
                            <!-- 
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id']?>" data-codigo="<?php echo $row['countryCode']?>" data-nombre="<?php echo $row['countryName']?>" data-moneda="<?php echo $row['currencyCode']?>" data-capital="<?php echo $row['capital']?>" data-continente="<?php echo $row['continentName']?>"><i class='glyphicon glyphicon-edit'></i> Modificar</button> -->
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
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
<script type="text/javascript" src="js/productos.js"></script>

