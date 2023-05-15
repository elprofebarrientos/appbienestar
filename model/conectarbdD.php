<?php 
class conectarbdD{ 
public static function conexion(){


	try{$conexion=new PDO('mysql:host=localhost;dbname=bienestar','root','');

		
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	    $conexion->exec("SET CHARACTER SET UTF8");
		
	

	}// cierra el try
	catch(Exception $e){
		die("error en la conexion".$e->getMessage());
			echo "Linea del error" . $e->getLine();}// cierra el catch
	return $conexion;}// cierra el metodo conexion
	}// cierra la clase
?>