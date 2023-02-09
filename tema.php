<?php

	$id = $_GET['id'];

$conexion = new mysqli("localhost","root","","proyectoFinal");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}


$sql_tema = "SELECT * FROM temas WHERE idtema ='".$id."'";
$query_tema = mysqli_query($conexion, $sql_tema);
while($row = mysqli_fetch_array($query_tema)){

	echo "<h1 class='text-center contenido-titulo'>".$row['nombreTema']."</h1>";
	echo "<h4 class=''>".$row['descripcionTema']."</h4>";
	echo '<button class="btn btn-primary" onclick="location.href=`reportes/generarReporte.php?id='.$id.'`">Descargar ejercicios</button>';
	$sql_ejercicios = "SELECT * FROM ejercicios WHERE temas_idtema='".$row['idtema']."'";
    $query_ejercicios = mysqli_query($conexion, $sql_ejercicios);
    while($ejercicio = mysqli_fetch_array($query_ejercicios)){


	echo	'<div class="card my-5">';
	echo		'<div class="card-body">';
	echo			'<p class="card-text">'.$ejercicio['descripcion'].'</p>';
	echo		'</div>';
	echo		'<div class="card-body">';
	echo			'<pre><code><p class="card-text text-break text-wrap">'.$ejercicio['ejercicio'].'</p></pre></code>';
	echo		'</div>';
#	echo		'<img src="data:image/jpeg;base64,'.base64_encode($ejercicio['ejercicio']).'" class="imagen card-img-bottom p-3 rounded mx-auto d-block" alt="'.$row['nombreTema'].'">';
	echo '<div class="card-footer text-muted">';
    echo			'<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ejercicio'.$ejercicio['idejercicio'].'">Ver respuesta</button>';
    echo '</div>';
	
	echo	'</div>';

	echo '<!-- Modal -->';
	echo '<div class="modal fade modal-lg" id="ejercicio'.$ejercicio['idejercicio'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
	echo '  <div class="modal-dialog">';
	echo '    <div class="modal-content">';
	echo '      <div class="modal-header">';
	echo '        <h1 class="modal-title fs-5" id="exampleModalLabel">Respuesta del ejercicio</h1>';
	echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
	echo '      </div>';
	echo '      <div class="modal-body">';
	echo '        <pre><code>'.$ejercicio['respuesta'].'</code></pre>';
	echo '      </div>';
	echo '      <div class="modal-footer">';
	echo '        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>';
	echo '     </div>';
	echo '    </div>';
	echo '  </div>';
	echo '</div>';
	/*
    	if($ejercicio['tipoEjercicio'] == 'Ejemplo'){
    		echo "<h4>".$ejercicio['tipoEjercicio']." </h4>";
			echo "<p class='fs-3'>".$ejercicio['descripcion']." </p>";
			echo '<img src="data:image/jpeg;base64,'.base64_encode($ejercicio['ejercicio']).'" alt="Texto Alternativo para la imágen" class="img-fluid" id="'.$row['nombreTema'].'" width="500px" height="300px">';
			echo "<code class='fs-3'>".$ejercicio['respuesta']." </code>";
    	}
    	if($ejercicio['tipoEjercicio'] == 'Ejercicio'){
    		echo "<h4>".$ejercicio['tipoEjercicio']." </h4>";
			echo "<p class='fs-3'>".$ejercicio['descripcion']." </p>";
			echo '<img src="data:image/jpeg;base64,'.base64_encode($ejercicio['ejercicio']).'" alt="Texto Alternativo para la imágen" class="img-fluid" id="Identificador para la imágen" width="500px" height="300px">';
			echo "<pre><code class='fs-3'>".$ejercicio['respuesta']." </code></pre>";
    	}
		*/
    }
}



$conexion->close();
?>