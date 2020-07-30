<?php
  include('estilos.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>7</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">

  <style type="text/css">
    .password-icon {
    float: right;
    margin: -25px 10px 0 0;
    text-align: center;
      display: block;
      margin-left: auto;
      margin-right: auto
  }
    
  </style>

<body class="full-cover-background" style="background-image:url(https://www.altairmagazine.com/wp-content/uploads/2019/12/Biblioteca-6051338334_c9277f3dfc_o.jpg);">
  <img src="https://3.bp.blogspot.com/-s8J42Lo5eZg/WjbnmDENh6I/AAAAAAAAC0c/hyoFDeTRkHA6OF5cUHFJ-a6e-oV_nbK3gCLcBGAs/s400/logo_unap.png" width=300px height=100px>
  <div class="container">
    <h1 style="color: #fff;text-align: center;">PROYECTO BIBLIOTECA GRUPO 7</h1>
    <br>


  <div class="card" >
  <div class="card-body">
        <form action="<?php echo base_url('Biblioteca/evaluar')?>" method="post">
          <p class="text-center" style="margin-top: 17px;">
             <img src="https://www.solvetic.com/uploads/tutorials/monthly_07_2018/0b1f1825c201181261fa7c0af8bcf29a.png" width=350px height=150px>
         </p>
         <h4 class="text-center all-tittles" style="margin-bottom: 30px;">Inicia Sesión</h4>

            <label for="usuario">USUARIO:</label>
            <input type="text" name="usuario" class="form-control" placeholder="Ingrese usuario" required >
<br>

           <label for="password">CONTRASEÑA</label>
           <input type="password" name="password" class="form-control password1" value="" placeholder="Ingrese contraseña" required/>
            <span class="fa fa-fw fa-eye password-icon show-password"></span>

<br>
            <div class="group-material">
                <select class="form-control" required >
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="estudiante">Estudiante</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div><br>
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">REGISTRARSE <i class="fas fa-cash-register"></i></button>
            <button class="btn btn-success" type="submit" style="top: 90%;position: absolute;float: left;left: 85%;color: #fff">INGRESAR <i class="fas fa-sign"></i></button>
      </form>

  
<div class="modal" id="myModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">REGISTRARSE</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
              
<div class="container">
  <div class="card container "style="width: 100%;height: auto;">
    <div class="card-body">
                  <form name="registro" id="register-form" action="<?php echo base_url();?>ctrlusuarios/guardar?id=0" method="post" role="form" style="display: block;">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i>Usuario</label>
                        <input type="text" class="form-control" name="usua_login" placeholder="Escriba su usuario" required >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Contraseña</label>
                        <input type="password" name="usua_password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-birthday-cake"></i> Codigo</label>
                        <input type="text" class="form-control" name="usua_codigo" placeholder="ingrese su codigo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i> Nombres</label>
                        <input type="text" class="form-control" name="usua_nombres" placeholder="nombres">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i> Apellidos</label>
                        <input type="text" class="form-control" name="usua_apellidos" placeholder="apellidos">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i> Direccion</label>
                        <input type="text" class="form-control" name="usua_direccion" placeholder="direccion">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-at"></i> Email</label>
                        <input type="email" class="form-control" name="usua_email" placeholder="email@Ejemplo.com">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i>Telefono</label>
                        <input type="number" class="form-control" name="usua_telefono" placeholder="telefono/celular">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i> esAdmin</label>
                        <input type="text" class="form-control" name="usua_esadmin"placeholder="esAdmin">
                    </div>

                    <button type="submit" class="btn btn-primary" value="save">Registrar</button>
                </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
