<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/funciones.js"></script>
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
	<title>Mi perfil</title>
</head>
<body>
	<div class="wrapper">
		  
			<?php 
				include 'includes/header.php';
			?>
<nav class="main-nav navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand btn btn-primary" href="#">Mi perfil</a>
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
          if($datosUsuario['tipoUsuario']=='admin'){
			echo '<a class="btn btn-primary" aria-current="page" href="../proyectofinal/usuarios.php?usuario='.$datosUsuario['usuario'].'">Usuarios</a>';
          }
          ?>
          
        </li>
      </ul>
      <a href="cerrarSesion.php" class="d-flex btn btn-primary">Cerrar Sesion</a>
    </div>
  </div>
</nav>
		  <div id="divContenedor" class="contenido container">
		  	<div lass="tema">
			    <h1 class="contenido-titulo text-center">Perfil</h1>
			    <?php
			    	include 'includes/conexion.php';

			    	$idusuario = $datosUsuario['idlogin'];

			    	$sql = 'SELECT * FROM login WHERE idlogin="'.$idusuario.'"';
			    	$query = mysqli_query($conexion, $sql);
	                while($row = mysqli_fetch_array($query)){

	                	echo '<h3 class="contenido-cuerpo fs-3">Bienvenido '.$row['nombre'].'</h3>';
			    ?>

			    <?php } ?>

		    </div>
		    <div id="divTema" class="tema">

		    </div>
		  </div>
	  	<section class="side asignaturas container">
			<div>
				<h2>Panel de control</h2>
			</div>
			<div class="container">
				<?php
					if($datosUsuario['tipoUsuario']=='admin'){
?>
				<h4>Usuarios</h4>
				<ul>
	                <li class="list-group list-group-flush">
	                	<a class='list-group-item' role='button' onclick='peticionGet("usuarios")'>Gestionar usuarios</a>
	                </li>
	            </ul>
<?php
					}
				?>
				
			</div>
			<div class="container">
				<h4>Escolar</h4>
	            <ul>
	                <li class="list-group list-group-flush">
	                	<a class='list-group-item' role='button' onclick='peticionGet("asignaturas")' id='verAsignaturas'>Administrar asignaturas</a>

	                	<a class='list-group-item' role='button' onclick='peticionGet("temas")' id='verTemas'>Administrar temas</a>

	                	<a class='list-group-item' role='button' onclick='peticionGet("ejercicios")' id='verEjercicios'>Administrar ejercicios</a>
	                </li>
	            </ul>
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
<script type="text/javascript" src="js/funciones.js"></script>
</html>