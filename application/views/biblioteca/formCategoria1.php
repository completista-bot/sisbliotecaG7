<?php 
 include("estilos.php");

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
        <form method="post"  action="<?php echo base_url();?>ctrlcategoria/guardar?cate_id=0"  >

                    <td>
                    <a href="<?php echo base_url();?>Ejemplar/crear?cate_id=0" class="btn btn-primary"><li class="fa fa-edit"></li>Categorias</a>
                    </td>


                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-id-card-alt"></i>Cate_id</label>
                        <input type="number" class="form-control" name="cate_id " >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-users"></i> Cate_Nombre</label>
                        <input type="text" class="form-control" name="cate_nombre" >
                    
                    </div>
                    
                    <button type="submit" class="btn btn-primary" value="save">Registrar</button>
                </form>

          </div>
        </div>
    </header>
</body>
</html>