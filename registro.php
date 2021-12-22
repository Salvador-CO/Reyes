    <?php 
    require_once "conexion.php";
    include_once "include/header.php"; 

    $sqlpersonal = mysqli_query($conexion, "SELECT * FROM `preguntas` WHERE `categoria` = 'personal'");
    $sqlcontacto = mysqli_query($conexion, "SELECT * FROM `preguntas` WHERE `categoria` = 'contacto'");
    $sqlgenerales = mysqli_query($conexion, "SELECT * FROM `preguntas` WHERE `categoria` = 'generales'");
   
    ?>
    <!-- clasee
        class="slider_section" 
        class="container" este es el general tiene margenes
        class="about"
        class="title"
        class="about_box"
        class="blog_box"
        class="row"
     -->

    <link rel="stylesheet" type="text/css" href="assets/css/registro.css">
 
    <!-- Page Banner Section Start -->
    
    <div class="baner " style="background-image: url(assets/images/baner.jpg">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="background:rgba(0,0,0,0.4);margin-top: 10px;">
                    <font size="16" color="#fff"><i>Forma parte de nuestro gran equipo</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!--  -->
        
    <div class="root">
        <form action="registroFuncion.php" class="form-register" method="POST" >

            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">paso 1</li>
                    <li class="progressbar__option">paso 2</li>
                    <li class="progressbar__option">paso 3</li>
                    <li class="progressbar__option">paso 4</li>
                </ul>
            </div>

            <div class="form-register__body">
                <!-- personal -->
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información de personal <small>(Paso 1)</small></h2>
                    </div>
                    <div class="step__body">
                        <div class="parents_pre">

                        <!-- php -->
                        <?php 
                            while ($row = mysqli_fetch_assoc($sqlpersonal)) { 
                               $id_preg= $row['id_preg'];
                               $codigo= $row['codigo'];
                               $pregunta= $row['descripcion'];
                        ?>
                        <!--  -->
                        <div class="child_pre">     
                             <div class="titu_pre"><label for=" <?php echo $codigo ?> "><?php echo $pregunta ?></label></div>
                            <input type="text" class="step__input" required
                                id="<?php echo $codigo ?>" 
                                name="<?php echo $codigo ?>" 
                                placeholder="<?php echo $codigo ?>"/>
                          
                         
                        </div> 
                        
                        <!--  -->
                        
                        <?php } ?>
                        <!-- php -->
                        </div>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <!-- fin personal -->

                <!-- contacto -->
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Información de contacto <small>(Paso 2)</small></h2>
                    </div>
                    <div class="step__body">
                        <div class="parents_pre">
                        <!-- php -->
                        <?php 
                            while ($row = mysqli_fetch_assoc($sqlcontacto)) { 
                               $id_preg= $row['id_preg'];
                               $codigo= $row['codigo'];
                               $pregunta= $row['descripcion'];
                        ?>
                        <!--  -->
                         
                            <div class="child_pre">     
                             <div class="titu_pre"><label for=" <?php echo $codigo ?> "><?php echo $pregunta ?></label></div>
                            <input type="text" class="step__input" required
                                id="<?php echo $codigo ?>" 
                                name="<?php echo $codigo ?>" 
                                placeholder="<?php echo $codigo ?>"/>
                        
                            </div>
                        <!--  -->
                        
                        <?php } ?>
                        <!-- php -->
                        </div>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <!-- fin contacto -->

                <!-- genrales -->
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Información general<small> (Paso 3)</small></h2>
                    </div>
                    <div class="step__body">
                        <div class="parents_pre">
                        <!-- php -->
                        <?php 
                            while ($row = mysqli_fetch_assoc($sqlgenerales)) { 
                               $id_preg= $row['id_preg'];
                               $codigo= $row['codigo'];
                               $pregunta= $row['descripcion'];
                        ?>
                        <!--  -->
                         
                            
                            <div class="child_pre">     
                             <div class="titu_pre"><label for=" <?php echo $codigo ?> "><?php echo $pregunta ?></label></div>
                            <input type="text" class="step__input" required
                                id="<?php echo $codigo ?>" 
                                name="<?php echo $codigo ?>" 
                                placeholder="<?php echo $codigo ?>"/>
                        
                            </div>
                        <!--  -->
                        
                        <?php } ?>
                        <!-- php -->
                        </div>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>

                    </div>
                </div>
                <!-- fin de generales -->

                <div class="step" id="step-4">
                    <div class="step__header">
                        <h2 class="step__title">Información de cuenta <small>(Paso 4)</small></h2>
                    </div>

                    <div class="step__body">
                        <div class="parents_pre">
                          <div class="child_pre">
                           <div class="titu_pre"><label>Ingresar nombre de usuario:<strong>*</strong> </label></div> 
                          <input type="text" placeholder="Nombre de usuario" id="nomUs" name="nomUs" class="step__input" required>
                          </div>
                          <div class="child_pre"> 
                            <div class="titu_pre"><label>Datos del Asesor: 

                                <div class="tooltip_pre"><i class="far fa-question-circle fa-lg"></i>
                                  <span class="tooltiptext_pre">Si un asesor ya registrado te está ayudando a realizar tu afiliación, pídele su "Nombre de Usuario", de lo contrario puedes dejar el campo vacío.</span>
                                </div>
                            </label></div> 
                          <input type="text" placeholder="Opcional" id="asesor" name="asesor" class="step__input">
                          </div>
                          <div class="child_pre"> 
                            <div class="titu_pre"><label>Ingresar correo:<strong>*</strong></label></div> 
                          <input type="email" placeholder="Correo" id="correo" name="correo" class="step__input" required>
                          </div>
                          <div class="child_pre">
                          <div class="titu_pre"><label>Ingresar contraseña:<strong>*</strong></label></div>  
                          <input type="password" placeholder="Contraseña" id="clave" name="clave" class="step__input" required>
                          </div>  
                        
                        
                        
                        </div>
                    </div>

                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
                        <button type="submit" class="step__button">Registrarse</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--  -->
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->

    <?php include_once "include/footer.php"; ?>
