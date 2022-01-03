<?php include_once "includes/header.php"; ?>
<?php 
	
	if (!isset($_GET['clave'])) {
		        ?>
        <script type="text/javascript">
          alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Sin permiso para esta seccion</font></b><br><img src="img/alto.png" width="30%" alt=""></center>',
          'onok': function(){ window.location.href = "index.php"; }}).show();
        </script>
        <?php
	}

?>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="titu">
    	<?php 	 
		$id=$_GET['clave'];
    	?>
	    <h1>Orden de Pedido N° <?php echo $id; ?>  </h1>
	</div>
	 
	<div class="page-content container">
	    <div class="container px-0">
	        <div class="row mt-4">
	            <div class="col-12 col-lg-10 offset-lg-1">
	            	<?php
	                $sql1 ="SELECT * FROM pedidos WHERE clave='$id' ";
	                $consultap = mysqli_query($conexion, $sql1);
	                if($consultap->num_rows === 0) {
	                ?>
	                <p>no hay datos q mostrar</p>
	                <?php
	                } else {
	                ?>
	                <div class="row">
	                    <div class="col-12">
	                        <div class="text-center text-150">
	                            <i class="fas fa-digital-tachograph fa-1x  mr-1"></i>
	                            <span class="text-default-d3">Datos del pedido</span>
	                        </div>
	                    </div>
	                </div>
	                <!-- .row -->

	                <hr class="row brc-default-l1 mx-n1 mb-4" />
	                <?php
	                    while($rowedit = mysqli_fetch_array($consultap)){
	                    $id=$rowedit["clave"];
	                    $nombre=$rowedit["Nombre"];
	                    $direccion = $rowedit["direccion"];
	                    $telefono = $rowedit["telefono"];
	                    $productos = $rowedit["productos"];
	                    $total = $rowedit["total"];
	                    $pagos = $rowedit["pago"];
	                    $estado = $rowedit["estado"];
	                    $ticket = $rowedit["ticket"];
	                        
	                 ?>    
	                <div class="row">
	                    <div class="col-sm-6">
	                        <div>
	                            <span class="text-sm text-grey-m2 align-middle">Nombre:</span>
	                            <span class="text-600 text-110 text-blue align-middle"> <?php echo $nombre ?></span>
	                        </div>
	                        <div class="text-grey-m2">
	                            <div class="my-1">
	                            	<span class="text-sm text-grey-m2 align-middle">Direccion:</span>
	                                <span class="text-600 text-110 text-blue align-middle"> <?php echo $direccion ?></span>
	                            </div>
	                        </div>
	                        <div>
	                        	<div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <span class="text-sm text-grey-m2 align-middle">Telefono:</span> <span class="text-600 text-110 text-blue align-middle"> <?php echo $telefono ?></span></div>
	                        </div>
	                        
	                    </div>
	                    <!-- /.col -->

	                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
	                        <hr class="d-sm-none" />
	                        <div class="text-grey-m2">
	                             
	                          <?php  if ($pagos=="pendiente") {
	                            $pago="<b>Pendiente</b>";
	                          ?>
	                          <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Estado del pago:</span> <span class="badge badge-warning badge-pill px-25"><?php echo $pago ?></span></div>
	                          <?php
	                          }else if($pagos!="pendiente"){
	                            $pago="<b>Pagado</b>";
	                            ?>
	                           <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Estado del pago:</span> <span class="badge badge-success badge-pill px-25"><?php echo $pago ?></span></div>
	                            <?php 
	                          }
	                      		?>
	                        </div>
	                    </div>
	                    <!-- /.col -->
	                </div>

	                <div class="mt-4">
	                     <div class="table-responsive">
	                     	<table class="table table-bordered">
			                    <thead class="thead-dark">
			                        <tr>
			                            <th scope="col">Clave</th>
			                            <th scope="col">Nombre</th>
			                            <th scope="col">Productos</th>
			                            <th scope="col">Total</th>
			                            <th scope="col">Pago</th>
			                            <th scope="col">Estado</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                        <tr>
				                        <td><?php echo $id; ?></td>
				                        <td><?php echo $nombre; ?></td>
				                        <td><?php echo $productos; ?></td>
				                        <td><?php echo $total; ?></td>
				                        <td>
					                        <?php  if ($pagos=="pendiente") {
				                            $pago="<b>Pendiente</b>";
				                          	?>
				                           	<span class="badge badge-warning badge-pill px-25"><?php echo $pago ?></span> 
				                          	<?php
				                          	}else if($pagos!="pendiente"){
				                            $pago="<b>Pagado</b>";
				                            ?>
				                            <span class="badge badge-success badge-pill px-25"><?php echo $pago ?></span>
				                            <?php 
				                          	}
				                      		?>
			                      		</td>
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
			                        </tr>
			                    </tbody>
			                </table>
	                     </div>
	                    <div class="row border-b-2 brc-default-l2"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-5 col-md-7 mx-auto my-auto">
            <div class="card">
                <div class="card-body px-lg-5 py-lg-5 text-center">
                	<?php if ($ticket == null){
                		echo "No se ha cargado comprobante";
                	}else{
                		if ($pagos=="pendiente") {
                		?>
                		<img class="zoom" src="pagos/<?php echo $ticket ?>" alt="profile-image" width="300px" height="600px">
	                    <center>
	                    	<div class="button" onclick="aceptar('<?php echo $id; ?>')">
								<div class="container">
									<div class="tick"  >
									</div>
								</div>
							</div>
						</center>
                		<?php 
                	}else{
                		?>
                		<img class="zoom" src="pagos/<?php echo $ticket ?>" alt="profile-image" width="300px" height="600px">
	                    <center>
	                    	<button type="button" class="btn btn-danger" class="button" onclick="cancelar('<?php echo $id; ?>')">Cancelar pago</button>
						</center>
                		<?php
                	}

                }?>
                </div>
            </div>
        </div>
    </div>
</div>
	            <?php } }?>
<br>
<!-- /.container-fluid -->
<script type="text/javascript">

	//boton de palomita
	let button = document.querySelector('.button');
	let buttonText = document.querySelector('.tick');

	const tickMark = "<svg width=\"58\" height=\"45\" viewBox=\"0 0 58 45\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"#fff\" fill-rule=\"nonzero\" d=\"M19.11 44.64L.27 25.81l5.66-5.66 13.18 13.18L52.07.38l5.65 5.65\"/></svg>";

	buttonText.innerHTML = "Aceptar";

	button.addEventListener('click', function() {

	  if (buttonText.innerHTML !== "Aceptar") {
	    buttonText.innerHTML = "Aceptar";
	  } else if (buttonText.innerHTML === "Aceptar") {
	    buttonText.innerHTML = tickMark;
	  }
	  this.classList.toggle('button__circle');
	});

	//imagen
	$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
	});

	//Aceptar pago
	function aceptar(id) {
		var clave = id;
		var pago = "pagado";
		alertify.confirm('Aceptar pago', 'Deseas aceptar el pago del pedido: '+''+clave, 
				function(){ 
					var dataen = 'clave='+clave+'&pago='+pago;
		            $.ajax({
		                type:'POST',
		                url:'control/aceptarpedido.php',
		                data:dataen,
		                success:function(r){
		                    if (r=1) {
		                        window.location.href = 'ticket.php?clave='+clave;
		                    }else{
		                        alertify.error("fallo el servidor");
		                    }
		                }
		            });
				}
                , function(){ alertify.error('Operacion cancelada');window.location.href = 'ticket.php?clave='+clave;});
	}

	//Cancelar pago
	function cancelar(id) {
		var clave = id;
		var pago = "pendiente";
		alertify.confirm('Cancelar pago', 'Deseas cancelar el pago del pedido: '+''+clave, 
				function(){ 
					var dataen = 'clave='+clave+'&pago='+pago;
		            $.ajax({
		                type:'POST',
		                url:'control/cancelarpedido.php',
		                data:dataen,
		                success:function(r){
		                    if (r=1) {
		                        window.location.href = 'ticket.php?clave='+clave;
		                    }else{
		                        alertify.error("fallo el servidor");
		                    }
		                }
		            });
				}
                , function(){ alertify.error('Operacion cancelada');window.location.href = 'ticket.php?clave='+clave;});
	}
</script>

<?php include_once "includes/footer.php"; ?>

