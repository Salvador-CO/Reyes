 <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                         <br>
                         <br>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li> <a href="index.html">Inicio</a></li>
                            <li> <a href="about.html">Conocenos</a></li>
                            <li> <a href="recipe.html">Galeria</a></li>
                            <li> <a href="blog.html">Blog</a></li>
                            <li> <a href="contact.html">Iniciar sesion</a></li>
                            <li> <a href="contact.html">Registro</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                         <br>
                         <br>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2021 Todos los derechos.</p>
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="salir.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script>
     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="assets/js/login.js"></script>
    <script src="assets/librerias/alertifyjs/alertify.js"></script>
    <script src="assets/js/registro.js"></script>
    
    
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
        #owl-demo .item{
            margin: 3px;
        }
        #owl-demo .item img{
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>