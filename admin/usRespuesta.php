<?php include_once "includes/header.php"; ?>
<?php 
	
	if (!isset($_GET['idus'])) {
		        ?>
        <script type="text/javascript">
          alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Sin permiso para esta seccion</font></b><br><img src="img/alto.png" width="30%" alt=""></center>',
          'onok': function(){ window.location.href = "index.php"; }}).show();
        </script>
        <?php
	}
		$id=$_GET['idus'];
		$sql1 ="SELECT * FROM cliente WHERE id = '$id'";

		$sql2 ="SELECT nom_us FROM cliente WHERE id = '$id'";
			$sqlnom_us = mysqli_query($conexion,$sql2);
			$nom_us = $sqlnom_us->fetch_assoc();
			$nomUs=$nom_us['nom_us'];
?>
<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <!-- Page Heading -->
     
    <div class="titu">
	    <h1>Respuestas para el usuario: <?php echo $nomUs; ?> </h1>
	</div>
	 
     
    	<div class="titu"><h2>Datos de la Cuenta</h2></div>
    	<!-- tabla cuanta -->
    	<div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM cliente WHERE id = '$id' ";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                <table class="table table-bordered " width="100%" cellspacing="0">
                    <thead >
                        <tr style="color: #fff; background: #000;" align="center">
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Afiliado por</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idus=$rowedit["id"];
                        $nomus = $rowedit["nom_us"];
                        $correous = $rowedit["correo"];
                        $claveus = $rowedit["clave"];
                        $per = $rowedit["afiliado"];
                        $es = $rowedit["estado"];

                        ?>    
                        <tr style="color: #000; background: #F0F8FF;" align="center">
                        <td><?php echo $idus; ?></td>
                        <td><?php echo $nomus; ?></td>
                        <td><?php echo $correous; ?></td>
                        <td><?php echo $claveus; ?></td>
                        <td><?php echo $per; ?></td>                 
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php }?> <!-- fin del else -->
        </div>
		<!-- Fin de la tabla cuenta -->
        <div class="parents">
			
	    	<div class="child"><!-- tabla personal -->	    
	    		<div class="titu">
	    		    <h2>Datos personales</h2>
	    		</div>
	    	<div class="table-responsive">
	                <?php
	                $sql1 ="SELECT p.descripcion, r.respuesta FROM respuestas r INNER JOIN preguntas p ON r.cod_pregunta = p.codigo WHERE r.id_cliente = '$nomUs' && p.categoria = 'personal'";
	                $consultap = mysqli_query($conexion, $sql1);
	                if($consultap->num_rows === 0) {
	                ?>
	                <p>no hay datos q mostrar</p>
	                <?php
	                } else {
	                ?>
	                
	                <?php
			        	while($rowedit = mysqli_fetch_array($consultap)){
				            $pre=$rowedit["descripcion"];
				            $res = $rowedit["respuesta"];
			            ?>  
			            <div class="container" style="color:#000; margin:0; background: #F0F8FF;">
					    	<div class="row"> 
								<div class="col-sm-12 " style="font-size: 1.3em; font-weight: 400;"> <?php echo $pre; ?> </div>
							</div>
							<div class="row" style="margin-left: 5px;"> 
								<div class="col-sm-12 " style="font-size: 1em; font-weight: 750; background: #F4F6F7  ;"> <i class="far fa-registered"></i> <?php echo $res; ?> </div>
							</div>
						</div> 
	                <?php } ?>
	                    
	                <?php }?> <!-- fin del else -->
	        </div> 
			</div><!-- Fin de la tabla personal -->

			<div class="child"><!-- tabla contacto -->		    
	    		<div class="titu">
	    		    <h2>Datos de contacto</h2>
	    		</div>
	    	<div class="table-responsive">
	                <?php
	                $sql1 ="SELECT p.descripcion, r.respuesta FROM respuestas r INNER JOIN preguntas p ON r.cod_pregunta = p.codigo WHERE r.id_cliente = '$nomUs' && p.categoria = 'contacto'";
	                $consultap = mysqli_query($conexion, $sql1);
	                if($consultap->num_rows === 0) {
	                ?>
	                <p>no hay datos q mostrar</p>
	                <?php
	                } else {
	                ?>
	                
	                <?php
			        	while($rowedit = mysqli_fetch_array($consultap)){
				            $pre=$rowedit["descripcion"];
				            $res = $rowedit["respuesta"];
			            ?>  
			            <div class="container" style="color:#000; margin:0; background: #F0F8FF;">
					    	<div class="row"> 
								<div class="col-sm-12 " style="font-size: 1.3em; font-weight: 400;"> <?php echo $pre; ?> </div>
							</div>
							<div class="row" style="margin-left: 5px;"> 
								<div class="col-sm-12 " style="font-size: 1em; font-weight: 750; background: #F4F6F7  ;"> <i class="far fa-registered"></i> <?php echo $res; ?> </div>
							</div>
						</div> 
	                <?php } ?>
	                    
	                <?php }?> <!-- fin del else -->
	        </div> 
	    	</div><!-- Fin de la tabla contacto -->
    	</div>

    	<div class="titu"><h2>Datos generales</h2></div>

    	<!-- tabla generales -->
    	<div class="table-responsive">
                <?php
                $sql1 ="SELECT p.descripcion, r.respuesta FROM respuestas r INNER JOIN preguntas p ON r.cod_pregunta = p.codigo WHERE r.id_cliente = '$nomUs' && p.categoria = 'generales'";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                
                <?php
		        	while($rowedit = mysqli_fetch_array($consultap)){
			            $pre=$rowedit["descripcion"];
			            $res = $rowedit["respuesta"];
		            ?>  
		            <div class="container" style="color:#000; margin:0; background: #F0F8FF;">
				    	<div class="row"> 
							<div class="col-sm-12 " style="font-size: 1.3em; font-weight: 400;"> <?php echo $pre; ?> </div>
						</div>
						<div class="row" style="margin-left: 5px;"> 
							<div class="col-sm-12 " style="font-size: 1em; font-weight: 750; background: #F4F6F7  ;"> <i class="far fa-registered"></i> <?php echo $res; ?> </div>
						</div>
					</div> 
                <?php } ?>
                    
                <?php }?> <!-- fin del else -->
        </div> 
        <br>
        <center>
        <div class="container" style="border: 1px solid;">
        	<?php 
        		if ($es=='activo') {
        			?>
        			 
        			<button type="button" class="btn btn-info btn-lg" onclick="window.location.href = 'clientes.php';">Regresar  <i class="fas fa-backward"></i></button>

					<button type="button" class="btn btn-outline-danger btn-lg"	onclick="inactivo('<?php echo $nomUs; ?>')">Negar <i class="fas fa-user-times"></i></button>
        			<?php
        		} 
        			?><?php
        		
        		if ($es=='inactivo') {
        			?><button type="button" class="btn btn-outline-success btn-lg" onclick="activo('<?php echo $nomUs; ?>')">Permitir <i class="far fa-thumbs-up"></i></button>

        <button type="button" class="btn btn-info btn-lg" onclick="window.location.href = 'clientes.php';">Regresar  <i class="fas fa-backward"></i></button>
				<?php
        		} 
    	 
        	 ?>
        
		</div>
		</center>
    	<!-- Fin de la tabla generales -->
    	<!--  
    	<div class="parents">
     
		    <div class="child">
		    	 
		    </div>
		     <div class="child">
		     <div class="titu">
		 		
		    </div>
		    </div>
		</div>
     -->
</div>
<!-- /.container-fluid -->
<script type="text/javascript">
	function activo(id) {
		var usuario = id;
		var es = "activo";
		alertify.confirm('Conceder permiso', 'Deseas aceptar al usuario: '+''+usuario, 
				function(){ 
					var dataen = 'us='+usuario+'&estado='+es;
		            $.ajax({
		                type:'POST',
		                url:'control/validarUs.php',
		                data:dataen,
		                success:function(r){
		                    if (r=1) {
		                        window.location.href = 'clientes.php';
		                    }else{
		                        alertify.error("fallo el servidor");
		                    }
		                }
		            });
					}
                , function(){ alertify.error('Operacion cancelada')});
	}

	function inactivo(id) {
		var usuario = id;
		var es = "inactivo";
		alertify.confirm('Negar permiso', 'Deseas negar el permiso al usuario: '+''+usuario, 
				function(){ 
					var dataen = 'us='+usuario+'&estado='+es;
		            $.ajax({
		                type:'POST',
		                url:'control/validarUs.php',
		                data:dataen,
		                success:function(r){
		                    if (r=1) {
		                        window.location.href = 'clientes.php';
		                    }else{
		                        alertify.error("fallo el servidor");
		                    }
		                }
		            });
				}
                , function(){ alertify.error('Operacion cancelada')});
	}
</script>

<?php include_once "includes/footer.php"; ?>

