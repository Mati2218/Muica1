<?php
session_start();
?>
<html>
	<head>
		<title>BIENVENIDOS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body >
		<?php
			include('conexion.php');
				if(isset($_POST['submit'])){
                    $entro=false;
					$usuario=$_POST['usuario'];
					$clave=$_POST['clave'];

                    $registros = "SELECT usuario,clave FROM artistas WHERE usuario ='$usuario' AND clave='$clave'";
                    foreach($conexion->query($registros) as $fila) {  
                       
						$_SESSION["usuario"]=$fila['usuario'];
						echo '<script>alert("usuario correcto"); </script>';
					echo '<script>window.location="index2.php"; </script>';	
                    }
                   $conexion= null;
                    if (!$entro){
                        echo '<script>alert("usuario incorrecto"); </script>';
						echo '<script>window.location="index.php"; </script>';	
                    }
				}
		
		?>
</body>
</html>