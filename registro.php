<?php
	include "conexion.php";

		$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$telefono=$_POST['telefono'];
	$ciudad=$_POST['ciudad'];
	$direccion=$_POST['direccion'];


	if (buscaRepetido($usuario,$clave,$conexion)== 1){
		echo '<script>alert("EL USUARIO YA EXISTE"); </script>';
		echo '<script>window.location="index.php"; </script>';
	}else{
		$insertar ="INSERT INTO artistas(telefono,ciudad,direccion,usuario,clave) VALUES ('$telefono','$ciudad','$direccion','$usuario','$clave')";
		 $resultado = mysqli_query($conexion,$insertar);;
		echo '<script>alert("REGISTRADO"); </script>';
		echo '<script>window.location="index.php"; </script>';
	}
	

	function buscaRepetido($user,$pass,$conexion){
		$insertar="SELECT * FROM artistas WHERE usuario='$user'and 
				clave='$pass'";
		$resultado = mysqli_query($conexion,$insertar);
		if (mysqli_num_rows($resultado) > 0) {
			return 1;
		}else{
			return 0;
		}
	}		

?>