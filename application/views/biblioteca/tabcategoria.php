   <?php 
   include("estilos.php");
   ?>
   <?php 
 include("menu.php");

?>

   <br>
   <div class="container">
   <div class="row ">
   <div class=" col-sm-8.2 p-3 bg-white " id="div">
      <h1 class="text-muted text-center font-weight-bold">CATEGORIAS</h1>
         
            

         <table class="table table-bordered table-active">
         <thead class="thead-dark">

               <tr>
                  <th>Cate_id</th>
                  <th>Cate_nombre</th>
                  <th colspan='2'>OPCIONES</th>
               </tr>
         </thead>
         <tbody>
            <?php foreach($registros as $reg): ?>
                  <tr>
                     <td><?php echo $reg->cate_id; ?></td>
                     <td><?php echo $reg->cate_nombre; ?></td>
                     <td>
                        <a href="<?php echo base_url();?>ctrlcategoria/index?cate_id=<?php echo $reg->cate_id;?>" class="btn btn-primary"><li class="fa fa-edit"></li>&nbspEditar</a>
                        <a href="<?php echo base_url();?>ctrlcategoria/eliminar?cate_id=<?php echo $reg->cate_id;?>" class="btn btn-danger"><li class="fa fa-trash"></li>&nbspEliminar</a>
                     </td>
                  </tr>
                  <?php endforeach; ?>
            
            </tbody>
         </table>
      </div>
   </div>
   </div>