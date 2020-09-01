<?php 
 include("estilos.php");
?>
<?php 
 include("menu.php");

?>


<?php


$consulta = "SELECT * FROM usuario";

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    			

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style>  
      
  </head>
  <body>
    <h1 class="text-center">Datatables</h1>
      
    <h3 class="text-center">Consumiendo datos desde MySQL - PHP - Foreach</h3>
    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                <th>ID</th>
               <th>LOGIN</th>
               <th>PASSWORD</th>
               <th>CODIGO</th>
               <th>NOMBRES</th>
               <th>APELLIDOS</th>
               <th>CORREO</th>
               <th>DIRECCION</th>
               <th>TELEFONO</th>
               <th>ESADMIN</th>
               <th>Editar</th>
               <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php
                        foreach($registros as $reg){
                    ?>
                    <tr>
                    <td><?php echo $reg->usua_id; ?></td>
                  <td><?php echo $reg->usua_login; ?></td>
                  <td><?php echo $reg->usua_password; ?></td>
                  <td><?php echo $reg->usua_codigo; ?></td>
                  <td><?php echo $reg->usua_nombres; ?></td>
                  <td><?php echo $reg->usua_apellidos; ?></td>
                  <td><?php echo $reg->usua_direccion; ?></td>
                  <td><?php echo $reg->usua_email; ?></td>
                  <td><?php echo $reg->usua_telefono; ?></td>
                  <td><?php echo $reg->usua_esadmin; ?></td>
                  <td><a href="<?php echo base_url();?>ctrlusuarios/index?id=<?php echo $reg->usua_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a></td>
                  <td> <a href="<?php echo base_url();?>ctrlusuarios/eliminar?id=<?php echo $reg->usua_id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a></td>
      
                  
                    </tr>
                    <?php
                        }
                    ?>
                        
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>
      
      
  </body>
</html>



<br>
<div class="row">
  <div class=" col-sm-8.2 p-3 bg-white " id="div">
     <h1 class="text-muted text-center font-weight-bold">Lista de Usuarios</h1>
      <table class="table table-bordered table-active">
      <thead class="thead-dark">
  
            <tr>
               <th>ID</th>
               <th>LOGIN</th>
               <th>PASSWORD</th>
               <th>CODIGO</th>
               <th>NOMBRES</th>
               <th>APELLIDOS</th>
               <th>CORREO</th>
               <th>DIRECCION</th>
               <th>TELEFONO</th>
               <th>ESADMIN</th>
               <th colspan='2'>OPCIONES</th>
            </tr>
		</thead>
		<tbody>
	    	<?php foreach($registros as $reg): ?>
               <tr>
                  <td><?php echo $reg->usua_id; ?></td>
                  <td><?php echo $reg->usua_login; ?></td>
                  <td><?php echo $reg->usua_password; ?></td>
                  <td><?php echo $reg->usua_codigo; ?></td>
                  <td><?php echo $reg->usua_nombres; ?></td>
                  <td><?php echo $reg->usua_apellidos; ?></td>
                  <td><?php echo $reg->usua_direccion; ?></td>
                  <td><?php echo $reg->usua_email; ?></td>
                  <td><?php echo $reg->usua_telefono; ?></td>
                  <td><?php echo $reg->usua_esadmin; ?></td>
                  <td>

                     <a href="<?php echo base_url();?>ctrlusuarios/index?id=<?php echo $reg->usua_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                     <a href="<?php echo base_url();?>ctrlusuarios/eliminar?id=<?php echo $reg->usua_id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a>

                  </td>
               </tr>
               <?php endforeach; ?>
			
		   </tbody>
	   </table>
   </div>
</div>
