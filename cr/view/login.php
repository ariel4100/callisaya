<section class="container my-5 py-5 d-flex justify-content-center align-items-center ">   
    <!--Form LOGIN-->
    <div class="card wow fadeInRight elegant-color w-50 p-4" data-wow-delay="0.3s">
        <div class="card-body">
            <!--Header-->
            <div class="text-center">
                <h3 class="white-text my-4"><i class="fa fa-user white-text"></i>  Iniciar sesion</h3>
                <hr class="hr-light">
            </div>
            <!--Body-->
            <form method="POST" id="frmLogin">
                <div class="md-form">
                    <i class="fa fa-envelope prefix white-text active"></i>
                    <input type="text" id="user" name="user" class="white-text form-control">
                    <label for="form1" class="active">Nombre de usuario</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-lock prefix white-text active"></i>
                    <input type="password" id="pass" name="pass" class="white-text form-control">
                    <label for="form2">Contraseña</label>
                </div>
            </form>
            <div class="text-center mt-4">
                <a id="btnLogin"  class="btn btn-primary btn-block">Entrar</a>
                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#centralModalInfo">Registrate</button>
                <hr class="hr-light mb-3 mt-4">
                <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 tw-ic"><i class="fa fa-twitter white-text"></i></a>
                    <a class="p-2 m-2 li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                    <a class="p-2 m-2 ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                </div>
            </div>
        </div>
    </div>
    <!--/.FIN Form LOGIN-->
    
  
    <!-- MODAL REGISTRO DE USUARIO -->
    <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                <p class="heading lead"><i class="fa fa-user"></i> Nuevo Registro</p>
        
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
        
                <!--Body-->
                <div class="modal-body">
                    <form method="POST" id="frmReg">
                        <!-- Grid row -->
                        <div class="form-row">
                            <!-- Default input -->
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre de usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario">
                            </div>
                            <!-- Default input -->
                            <div class="form-group col-md-6">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- Default input -->
                            <div class="form-group col-md-4">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba su apellido">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nacimiento">Nacimiento</label>
                                <input type="text" class="form-control" id="nacimiento" name="nacimiento" placeholder="Nacimiento">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Direccion de email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                            </div>
                        </div>
                        <!-- fin Grid row -->
                    </form>
                </div>
        
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a id="btnReg" class="btn btn-primary">Registrar</a>
                    <a class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, Gracias</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- FIN MODAL DE RESITRO DE USUARIOS-->               
</section>