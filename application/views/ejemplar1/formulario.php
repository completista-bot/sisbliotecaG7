<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
<?php
   
    echo form_open('ejemplar1/evalua');
        $data_n = array(
            'name' => 'nombre',
            'class'=>'form-control',
            'id'=>'nombre',
        );
        echo form_label('Nombre:','nombre');
        echo form_input($data_n,"");
        $data_r = array(
            'name' => 'resumen',
            'class' => 'form-control',
            'id'=>'resumen',
        );
        echo form_label('Resumen:','resumen');
        echo form_input($data_r,"");

        echo form_label('Categoria:', 'categoria');
        echo form_dropdown('cate_id', $opciones);
        echo form_submit('Guardar', 'guardar');

    echo form_close();

?>
</nav>

