<?php 
 include("estilos.php");

?>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Biblioteca</a>
    </nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="collapse navbar-collapse" >
      
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url() ?>">INICIO&nbsp;&nbsp;</a>
        </li>
        
        <li class="nav-item active">
          <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabusuarios') ?>">USUARIOS&nbsp;&nbsp;</a>
        </li>
       
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/ejemplar') ?>">EJEMPLAR&nbsp;&nbsp;</a>
        </li>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabejemplar') ?>">LISTA DE EJEMPLARES&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/categoria') ?>">CATEGORIA&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('Welcome/tabcategoria') ?>">CATEGORIAS&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item active">
            <a class="flex-sm-fill text-sm-center nav-link " href="<?php echo base_url('biblioteca/salir') ?>">SALIR&nbsp;&nbsp;</a>

    </li>

      </ul>
      
    </div>
  
</nav>

