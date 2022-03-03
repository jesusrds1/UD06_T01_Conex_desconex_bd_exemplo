<?php

	//Conexión

	$conexionBD = @mysqli_connect('localhost', 'usuarioIAW', '1234');



	if (!$conexionBD) {

		echo('Erro número ' . mysqli_connect_errno() . ' ao establecer a conexión: ' . mysqli_connect_error() . '.');

	} else {

		echo('Conexión establecida con éxito<br/>');

	



		//Selección da BD

		if (!mysqli_select_db($conexionBD, 'IAW')) {

			echo('Erro número ' . mysqli_errno($conexionBD) . ' ao seleccionar a BD: ' . mysqli_error($conexionBD) . '.');

		} else {

			echo('Selección da BD realizada con éxito.<br/>');

		}



		//Desconexión

		if (!@mysqli_close($conexionBD)) {

			echo('Erro número ' . mysqli_errno($conexionBD) . ' ao pechar a conexión: ' . mysqli_error($conexionBD) . '.');

		} else {

			echo('Conexión pechada con éxito');

		}



	}

?>