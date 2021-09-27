<?php
/*

	require 'reclamo_inst.php';

	$fecha = date('Y-m-d');

	$datos = array('usuario_id'=>'1',
					'titulo'=>'Reclamo de Prueba',
					'descripcion_breve'=>'Quier over si funciona',
					'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
					'origen_id'=>'5',
					'perdida_id'=>'4',
					'categoria_e_id'=>'6',
					'elemento_id'=>'2',
					'sub_elemento_id'=>'1',
					'categoria_f_id'=>'22',
					'importancia'=>'MEDIA',
					'riesgo_suspension'=>'MEDIA',
					'matricula_total'=>'200',
					'matricula_afectada'=>'50',
					'prioridad'=>'BAJA',
					'fecha_inicio'=>$fecha,
					'codigo'=>'Codigo1234',
					'cueanexo'=>'260010400');


	$nuevoReclamo = new Reclamo_inst($datos);
	$resultado = $nuevoReclamo->guardar_reclamo();
	if($resultado ){
		echo 'Se gurdaron los datos';
	}
	else {
		echo 'No se guardo una mierda';
	}*/
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Regiones', 'Alta', 'Media', 'Baja'],
          ['I', 1000, 400, 200],
          ['II', 1170, 460, 250],
          ['III', 660, 1120, 300],
          ['IV', 660, 1120, 300],
          ['V', 660, 1120, 300],
          ['VI', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Reclamos',
            subtitle: 'Distribucion de reclamos de escuelas por regiones.',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
