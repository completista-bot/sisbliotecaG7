<?php

        echo form_open('Ejemplar/evalua');
        echo form_label('Categoria:','categoria');
        echo form_dropdown('cate_id',$opciones);
        echo form_submit('Guardar','Guardar');


    echo form_close();
?>      