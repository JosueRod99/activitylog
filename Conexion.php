<?php
		class Conexion{


			function conectarse(){
			
				$enlace = mysqli_connect("localhost", "root", "", "workers");
				if($enlace){
						
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
				// mysqli_close($enlace); //cierra la conexion a nuestra base de datos, un punto de seguridad importante.
			}
			
		}

?>