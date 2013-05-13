<?php

?>
<script>
$().ready(function(){
	$('.dataTable').hide().dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			 "oLanguage": {
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron registros",
            "sInfo": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
            "sInfoFiltered": "(filtered from _MAX_ total records)",
						"sSearch": "Buscar:",
						"oPaginate": {
							"sFirst": "Primera página",
							"sLast": "Última página",
							"sNext": "Siguiente",
							"sPrevious": "Anterior"
						}
        },
				"aoColumns": [ 
					null,
					null,
					null,
					{ "bSortable": false }
				] 
	}).show();
});
</script>
<div id="topOptions" class="pull-right">
	<a class="btn btn-small" href="?modulo=productos_form"><i class="icon-plus"></i> Registrar producto</a>
</div>
<h2>Productos</h2>
<table class="table table-bordered table-striped table-condensed font9 dataTable no100">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
                        <th>Descripci&oacute;n</th>
			<th>Precio unitario</th>
                     
<!--                        <th>Tipo</th>-->
                        
                        
                        
		</tr>
                
                  <?php
        include_once '../ControladorProducto.php';  
        $TablaProductos = new ControladorProducto();
      echo  $TablaProductos->tablaProductos();
        
        ?>
        
	</thead>
        
      
</table>