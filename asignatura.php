<?php

	$id = $_GET['id'];

$conexion = new mysqli("localhost","root","","proyectoFinal");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}


		$sql_asignatura = "SELECT * FROM asignaturas WHERE idasignatura ='".$id."'";
		$query_asignatura = mysqli_query($conexion, $sql_asignatura);
		while($row = mysqli_fetch_array($query_asignatura)){

		

			echo "<h1 onclick='peticionGet(".$row["idasignatura"].")' class='contenido-titulo text-center' role='button'>".$row['nombreAsignatura']."</h1>";
			echo "<p class='fs-3'>".$row['descripcionAsignatura']."</p>";
			echo "<div id='divTema'>";
			//echo "<ul>";
			echo	'<div class="row row-cols-1 row-cols-md-2 g-4">';
			$sql_temas = "SELECT * FROM temas WHERE asignaturas_idasignatura='".$row["idasignatura"]."'";
		    $query_temas = mysqli_query($conexion, $sql_temas);
		    while($tema = mysqli_fetch_array($query_temas)){
				//echo "<h5 class='fs-3' role='button' onclick='peticionGetTema(".$tema["idtema"].")' id='idtema'>".$tema['nombreTema']."</h5>";

				echo	 ' <div class="col">';
				echo	    '<div class="card">';
				#echo	      '<img src="..." class="card-img-top img-fluid" alt="'.$tema['nombreTema'].'">';
				echo	      '<div class="card-body">';
				echo	        '<h5 class="card-title">';
				echo				$tema['nombreTema'];
				echo	        '</h5>';
				echo	        '<p class="card-text">';
				echo				$tema['descripcionTema'];
				echo		    '</p>';
				echo	      '</div>';
				echo	      '<div class="card-footer text-center">';
				echo	      	"<h5 class='fs-5 btn btn-primary' role='button' onclick='peticionGetTema(".$tema["idtema"].")' id='idtema'>Ver lección</h5>";
				echo	      '</div>';
				echo	    '</div>';
				echo	  '</div>';
				
		    }
		    //echo "</ul>";
		    echo	'</div>';
		    echo "</div>";	
		    }

		

$conexion->close();
?>