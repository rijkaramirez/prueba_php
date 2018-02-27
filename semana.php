<html>
<head>
	<tittle> EJEMPLO DE USO CASE </tittle>
</head>

<body>

ejemplo de un CASE

<br><br>

<?php 
	
	$dia = 12;
		switch ($dia) {
			case 1:
				echo "el dia es lunes";
				break;

			case 2:
				echo "el dia es martes";
				break;

			case 3:
				echo "el dia es miercoles";
				break;

			case 4:
				echo "el dia es jueves";
				break;

			case 5:
				echo "el dia es viernes ";
				break;
			
			case 6:
				echo "el dia es sabado";
				break;

			case 7:
				echo "el dia es domingo";
				break;

			case 8:
				echo "la variable contiene otro valor";
				echo "distinto a los dias de la semana";
				break;

			default:
				# code...
				break;
		}






?>
<body/>
<html/>