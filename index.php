<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<script>
	        function peticionGet(id) {
	            xmlhttp = new XMLHttpRequest();

	            //alert(filtro);
	            //var idAsignatura = id;
	        
	            var url = "asignatura.php";
	            xmlhttp.open('GET', url+"?id="+id, true);
	            xmlhttp.send(null);
	            xmlhttp.onreadystatechange = function () {

	                if (xmlhttp.readyState == 4) {//estado Listo!
	                    if (xmlhttp.status == 200) {//Recarga exitosa
	                        document.getElementById('divContenedor').innerHTML = xmlhttp.responseText;
	                    } else {
	                        alert("Error ->" + xmlhttp.responseText);
	                    }
	                }
	            };
	        }
	        function peticionGetTema(id) {
	            xmlhttp = new XMLHttpRequest();

	            //alert(filtro);
	            //var idAsignatura = id;
	        
	            var url = "tema.php";
	            xmlhttp.open('GET', url+"?id="+id, true);
	            xmlhttp.send(null);
	            xmlhttp.onreadystatechange = function () {

	                if (xmlhttp.readyState == 4) {//estado Listo!
	                    if (xmlhttp.status == 200) {//Recarga exitosa
	                        document.getElementById('divTema').innerHTML = xmlhttp.responseText;
	                    } else {
	                        alert("Error ->" + xmlhttp.responseText);
	                    }
	                }
	            };
	        }
	    </script>
	    <script defer src="js/bootstrap.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/sidebar.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />

		<?php
			$usuario = $_GET['usuario'];


			include 'includes/conexion.php';
			$sql_datosUsuario = "SELECT * FROM login WHERE usuario = '".$usuario."'";
            $query_datosUsuario = mysqli_query($conexion, $sql_datosUsuario);
            $datosUsuario = mysqli_fetch_array($query_datosUsuario);
		?>

		<title>Proyecto Final</title>
	</head>
	<body class="todo">
	<!-- Comienzo -->
		
		<!-- Sidebar -->
		<div class="wrapper">
		  
			<?php 
				include 'includes/header.php';
				#include 'includes/navbar.php';
				?>
<nav class="main-nav navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-primary" aria-current="page" href="../proyectofinal/index.php?usuario=<?php echo $datosUsuario['usuario'] ?>">Inicio
          </a>
          <?php
          if($datosUsuario['tipoUsuario']!=='alumno'){
			echo '<a class="btn btn-primary" aria-current="page" href="../proyectofinal/perfil.php?usuario='.$datosUsuario['usuario'].'">Panel de control</a>';
          }
          ?>
          
        </li>
      </ul>
      <a href="cerrarSesion.php" class="d-flex btn btn-primary">Cerrar Sesion</a>
    </div>
  </div>
</nav>
			<?php/*
				switch ($datosUsuario['tipoUsuario']) {
					case 'admin':
						include 'includes/navbarAdmin.php';
						break;
					case 'maestro':
						include 'includes/navbarMaestro.php';
					break;
					case 'alumno':
						include 'includes/navbarAlumno.php';
						break;
					default:
						header("Location: cerrarSesion.php");
						break;
				}*/
			?>
		  <div id="divContenedor" class="contenido container">
		  	<div id="divTema" class="tema">
			    <h1 class="contenido-titulo text-center">Página principal</h1>
			    <p class="contenido-cuerpo fs-3">
			      Bienvenido a la plataforma de apoyo para las materias de la carrera de INTEL de la Universidad de Guadalajara.
			    </p>
			    <p class="contenido-cuerpo fs-3">
			    	Aquí podrás encontrar gran variedad de ejercicios así como ejemplos resueltos sobre diferentes temas relacionados a la carrera que son subidos por los mismos profesores que dan las clases.
			    </p>
		    </div>
		  </div>
	  	<section class="side asignaturas container">
			<div>
				<h2>Asignaturas</h2>
			</div>

			<div>
				<?php
				    
				    include 'includes/conexion.php';
				     
				    $sql_asignaturas = "SELECT * FROM asignaturas";
	                $query_asignaturas = mysqli_query($conexion, $sql_asignaturas);
	                while($row = mysqli_fetch_array($query_asignaturas)){
	        	?>
	        	
	            <ul>
	                <li class="list-group list-group-flush">
	                	<?php echo "<a class='list-group-item' role='button' onclick='peticionGet(".$row["idasignatura"].")' id='idAsignatura'>".$row['nombreAsignatura']."</a>"/*.$row["descripcionAsignatura"]*/?>
	                </li>
	            </ul>
	        	<?php } ?>
			</div>
		</section>
		  
		</div>
		<!-- Fin Sidebar -->
		<section>
			<div class="main-footer">
			  <?php 
			  	include 'includes/footer.php' 
			  ?>
			</div>
		</section>
	</body>
</html>