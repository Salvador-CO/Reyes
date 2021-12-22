<?php 
	require_once "conexion.php";
		
		if (!empty($_POST["nomUs"]) && !empty($_POST["correo"]) && !empty($_POST["clave"])) {
			
			$nomUs=$_POST['nomUs'];
			$correo=$_POST['correo'];
			$c1=$_POST['clave'];
			if (!empty($_POST["asesor"])) {
				$asesor=$_POST['asesor'];
			}else{
				$asesor="libre";
			}			 
			$estado="en espera";
		
			$query=mysqli_query($conexion,"INSERT INTO `cliente`(`nom_us`, `correo`, `clave`, `afiliado`, `estado`) VALUES ('$nomUs','$correo','$c1','$asesor','$estado')");
			if ($query) {
				//parte dos
	            $sqlIDus = mysqli_query($conexion, "SELECT `nom_us` FROM `cliente` 
	            											WHERE `nom_us`='$nomUs' && `correo` = '$correo'");
	            $idUsuario = $sqlIDus->fetch_assoc();
	            if(isset($idUsuario['nom_us'])){
	            	$sqlpreguntas = mysqli_query($conexion, "SELECT * FROM `preguntas`");
                    $idUs=$idUsuario['nom_us'];
                    while ($row = mysqli_fetch_assoc($sqlpreguntas)) { 
			           $codigo= $row['codigo'];     
			           if (empty($_POST[$codigo])) {
			           		echo "erro en preguntas";
			            }else{
			            	$respuesta= trim($_POST[$codigo]);
			                $insertPre=mysqli_query($conexion,"INSERT INTO `respuestas`(`cod_pregunta`, `respuesta`, `id_cliente`) VALUES ('$codigo','$respuesta','$idUs')");
			            }
			        } //fin del while
			        if ($insertPre) {
			        	header("Location: registro.php");
			        }
                }else{
                	echo "problemas";
                }

			}else{
				echo "problemas en el registro";
			}

        
        }else{
        	 header("Location: registro.php");
        }



		

?>
