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
  
    <title>CREAR EJEMPLAR</title>
</head>
<body>
    <header class="container " >
        <br>
        <div class="card container "style="width: 700px;height: auto;" method="post">
          <div class="card-body">


          <form method="post"  action="<?php echo base_url();?>ctrlejemplar/guardar?ejem_id=0">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-heading"></i>Titulo</label>
                        <input type="text" class="form-control" name="ejem_titulo">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-newspaper"></i>Editorial</label>
                        <input type="text" class="form-control" name="ejem_editorial">
                    </div>
     
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-pager"></i>Paginas</label>
                        <input type="number" class="form-control" name="ejem_paginas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i>Isbn</label>
                        <input type="text" class="form-control" name="ejem_isbn">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-language"></i> Idioma</label>
                        <input type="text" class="form-control" name="ejem_idioma">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-portrait"></i> Portada</label>
                        <input type="text" class="form-control" name="ejem_portada">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-digital-tachograph"></i> Digital</label>
                        <input type="text" class="form-control" name="ejem_digital">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-volume-up"></i> Audio</label>
                        <input type="text" class="form-control" name="ejem_audio">
                    </div>
     
                    <div class="form-group">  
                        <label for="exampleInputEmail1"><i class="fas fa-file"></i> Resumen</label>
                        <input type="text" class="form-control" name="ejem_resumen">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-i-cursor"></i> Tipo</label>
                        <input type="number" class="form-control" name="ejem_tipo_id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-sign-language"></i> Cate</label>
                        <input type="number" class="form-control" name="ejem_cate_id">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user-clock"></i> valoracion</label>
                        <input type="text" class="form-control" name="ejem_valoracion">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-calendar-day"></i> Año</label>
                        <input type="number" class="form-control" name="ejem_anio">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fab fa-buffer"></i> Prestamos</label>
                        <input type="number" class="form-control" name="ejem_nprestamos">
                    </div>

                    <button type="submit" class="btn btn-primary" value="save">Registrar</button>
                </form>

          </div>
        </div>
    </header>
</body>
</html>