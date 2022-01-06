<?php 
    include_once "includes/header.php";

    $permiso = "pedidos"; //cambiar el nombre
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

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="scss/estilos.scss">

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Pedidos Registrados</h1>
        <!-- Button trigger modal -->
        
        <br><br>
    </center>

     <!-- tabla -->
    <div class="card shadow mb-4" id="tabla" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Colaboradores</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM pedidos ";
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
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Pago</th>
                            <th scope="col">Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $clave=$rowedit["clave"];
                        $nombre = $rowedit["Nombre"];
                        $telefono = $rowedit["telefono"];
                        $pago = $rowedit["pago"];
                        $estado = $rowedit["estado"];
                         
                        ?>    
                        <tr >
                        <td><?php echo $clave; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $telefono; ?></td>
                        <td><?php  
                            if ($pago=="pendiente") {
                            $pago="<b>Pendiente</b>";
                            ?>
                            <span class="badge badge-warning badge-pill px-25"><?php echo $pago ?></span> 
                            <?php
                            }else if($pago!="pendiente"){
                            $pago="<b>Pagado</b>";
                            ?>
                            <span class="badge badge-success badge-pill px-25"><?php echo $pago ?></span>
                            <?php 
                            }
                            ?></td>
                            <td>
                            <?php  if ($estado=="cerrado") {
                            $pago="<b>Cerrado</b>";
                            ?>
                            <span class="badge badge-danger badge-pill px-25"><?php echo $pago ?></span> 
                            <?php
                            }else if($estado!="cerrado"){
                            $pago="<b>Abierto</b>";
                            ?>
                            <span class="badge badge-success badge-pill px-25"><?php echo $pago ?></span>
                            <?php 
                            }
                            ?>
                            </td>
                        <td>
                            <center>
                                <a href="ticket.php?clave=<?php echo $clave?>" class="btn btn-info btn-circle"><i class="fas fa-file-alt" title="Orden de pedido"></i> </a>
                            </center>
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

