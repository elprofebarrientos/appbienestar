<?php
 class gestionBienestar{
   private $todosdatos;

 //-- conexion base de datos
public function __construct(){
	require_once('conectarbdD.php');

  
	$this->db=conectarbdD::conexion();

  $this->tipo=0;
  
}

public function insertarPlatos($nombre, $precio, $tipo){

  $this->db->query(" insert into platos values( 0, '$nombre', '$precio' , '$tipo' ) ");

  return "Inserto plato corectamente";

                      }   
                      
public function validarUsuario($usuario,$clave){
    $tipo=0;
    $consulta=$this->db->query("SELECT tipo FROM user WHERE usuario='$usuario' AND clave='$clave'");
      while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
       $tipo=$fila['tipo'];

     
     }//cieraa while
                        
    return $tipo;}

    public function consultarPlatos(){
      $consulta=$this->db->query("SELECT * FROM platos  ORDER BY tipo desc");
                          while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
                      $this->todosdatos[]=$fila;
                 }//cieraa while
                      return $this->todosdatos;}
   
   public function datosDispositivoFecha($fechai,$fechaf){
   $consulta=$this->db->query("SELECT * FROM dispensador WHERE fecha BETWEEN '$fechai' and '$fechaf'");
       while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
         $this->todosdatos[]=$fila;
                                   }//cieraa while
                                        return $this->todosdatos;}

  }//cierra la clase principal 

?>