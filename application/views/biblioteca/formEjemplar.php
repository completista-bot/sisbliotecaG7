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

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">

<?php 
    echo form_open('ctrlejemplar/guardar');
    
    $data_t = array(
        'name' => 'ejem_titulo',
        'class'=>'form-control',
        'id'=>'ejem_titulo',
    );
    echo form_label('Titulo:','ejem_titulo');
    echo form_input($data_t,"");

    $data_e = array(
        'name' => 'ejem_editorial',
        'class' => 'form-control',
        'id'=>'editoejem_editorialrial',
    );
    echo form_label('Editorial:','ejem_editorial');
    echo form_input($data_e,"");

    $data_p = array(
        'name' => 'ejem_paginas',
        'class' => 'form-control',
        'id'=>'ejem_paginas',
    );
    echo form_label('Paginas:','ejem_paginas');
    echo form_input($data_p,"");

    $data_i = array(
        'name' => 'ejem_isbn',
        'class' => 'form-control',
        'id'=>'ejem_isbn',
    );
    echo form_label('lsbn:','ejem_isbn');
    echo form_input($data_i,"");

    $data_I = array(
        'name' => 'ejem_idioma',
        'class' => 'form-control',
        'id'=>'ejem_idioma',
    );
    echo form_label('Idioma:','ejem_idioma');
    echo form_input($data_I,"");

    $data_p = array(
        'name' => 'poejem_portadartada',
        'class' => 'form-control',
        'id'=>'ejem_portada',
    );
    echo form_label('Portada:','ejem_portada');
    echo form_input($data_p,"");

    $data_d = array(
        'name' => 'ejem_digital',
        'class' => 'form-control',
        'id'=>'ejem_digital',
    );
    echo form_label('Digital:','ejem_digital');
    echo form_input($data_d,"");

    $data_a = array(
        'name' => 'ejem_audio',
        'class' => 'form-control',
        'id'=>'ejem_audio',
    );
    echo form_label('Audio:','ejem_audio');
    echo form_input($data_a,"");

    $data_r = array(
        'name' => 'ejem_resumen',
        'class' => 'form-control',
        'id'=>'ejem_resumen',
    );
    echo form_label('Resumen:','ejem_resumen');
    echo form_input($data_r,"");

    $data_t = array(
        'name' => 'ejem_tipo_id',
        'class' => 'form-control',
        'id'=>'ejem_tipo_id',
    );
    echo form_label('Tipo:','ejem_tipo_id');
    echo form_input($data_t,"");
    echo "<br>";
    $opciones = array(
        '1'=>'libros',
        '2'=>'Revistas',
        '3'=>'Articulos'
    ); 
    echo form_label('Categoria:', 'ejem_cate_id');
    echo form_dropdown('ejem_cate_id', $opciones);
    echo "<br>";

    echo "<br>";
    $data_v = array(
        'name' => 'ejem_valoracion',
        'class' => 'form-control',
        'id'=>'ejem_valoracion',
    );
    echo form_label('Valoracion:','ejem_valoracion');
    echo form_input($data_v,"");

    $data_a = array(
        'name' => 'ejem_anio',
        'class' => 'form-control',
        'id'=>'ejem_anio',
    );
    echo form_label('Año:','ejem_anio');
    echo form_input($data_a,"");

    $data_p = array(
        'name' => 'ejem_nprestamos',
        'class' => 'form-control',
        'id'=>'ejem_nprestamos',
    );
    echo form_label('Prestamos:','ejem_nprestamos');
    echo form_input($data_p,"");

    

    echo "<br>";
    $estilos1=array('class'=>'btn btn-primary');
    echo form_submit('Guardar', 'registrar', $estilos1);

    echo form_close();
?>
</nav>

            </div>
        </div>
    </header>  
</body>
</html>