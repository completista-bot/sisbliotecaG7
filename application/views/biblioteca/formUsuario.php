<?php 
 include("estilos.php");
  //var_dump($registros);
?>
<?php 
 include("menu.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
    <title>CREAR USUARIO</title>
</head>
<body>
    <header class="container " >
        <br>
        <div class="card container "style="width: 700px;height: auto;">
          <div class="card-body">

        <form method="post"  action="<?php echo base_url();?>ctrlusuarios/guardar?id=<?php echo $registros->usua_id;?>"  >
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-id-card-alt"></i>Usuario</label>
                        <input type="text" class="form-control" name="usua_login" value="<?php echo $registros->usua_login;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Contraseña</label>
                        <input type="password" class="form-control" name="usua_password" value="<?php echo $registros->usua_password;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-id-card-alt"></i>Codigo</label>
                        <input type="text" class="form-control" name="usua_codigo"  value="<?php echo $registros->usua_codigo;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Nombres</label>
                        <input type="text" class="form-control" name="usua_nombres" value="<?php echo $registros->usua_nombres;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-id-card-alt"></i>Apellidos</label>
                        <input type="text" class="form-control" name="usua_apellidos" value="<?php echo $registros->usua_apellidos;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Direccion</label>
                        <input type="text" class="form-control" name="usua_direccion" value="<?php echo $registros->usua_direccion;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-id-card-alt"></i>Email</label>
                        <input type="text" class="form-control" name="usua_email" value="<?php echo $registros->usua_email;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Telefono</label>
                        <input type="text" class="form-control" name="usua_telefono" value="<?php echo $registros->usua_telefono;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Admin</label>
                        <input type="text" class="form-control" name="usua_esadmin" value="<?php echo $registros->usua_esadmin;?>">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Registrar</button>
                </form>

          </div>
        </div>
    </header>
</body>
</html>
