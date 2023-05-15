<?php
 class gestionUsuarios{
   private $todasneveras;

 //-- conexion base de datos
public function __construct(){
	require_once('conectarbdD.php');
	$this->db=conectarbdD::conexion();
  $this->tipo=0;
  
}


//*********validar usuario************************   
public function validarUsuario($usuario,$clave){

  $consulta=$this->db->query("SELECT id_tipo FROM user WHERE usuario= '$usuario' and password = '$clave' ");
    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
       $this->tipo=$fila['id_tipo'];
             }//cieraa while
       $this->tipo;
       return $this->tipo;}
//-----------------------------
public function getConsultarneveras(){
$consulta=$this->db->query("SELECT 	ChipId, Fecha FROM registrodatos_alarmas");
                    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
			          $this->todasneveras[]=$fila;
			     }//cieraa while
		            return $this->todasneveras;}

///////////////////////////////////////////////////////////////

                public function getConsultarneverasOnline($ChipId){
                  $consulta=$this->db->query("SELECT 	*FROM registrodatos WHERE ChipId='$ChipId' ORDER BY fecha DESC");
                                      while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
                                  $this->todasneveras[]=$fila;
                             }//cieraa while
                                  return $this->todasneveras;}
/////////////////////////////////////////////////////////////////////
public function getConsultarTemint(){


  $consulta=$this->db->query("SELECT ChipId,ROUND(AVG(TempInt),2) proTempInt FROM `registrodatos` GROUP BY ChipId");

  
                      while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
                  $this->todasneveras[]=$fila;
             }//cieraa while
                  return $this->todasneveras;}

  /////////////////////////////////////////////////////////////////
  public function getConsultarTemExt(){
    $consulta=$this->db->query("SELECT ChipId,ROUND(AVG(TempExt),2) proTempExt FROM `registrodatos` GROUP BY ChipId");
                        while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
                    $this->todasneveras[]=$fila;
               }//cieraa while
                    return $this->todasneveras;}                
//////////////////////////////////////////////////////
public function getConsultarHumedad(){
  $consulta=$this->db->query("SELECT ChipId,ROUND(AVG(Humedad),2) proHumedad FROM `registrodatos` GROUP BY ChipId");
                      while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
                  $this->todasneveras[]=$fila;
             }//cieraa while
                  return $this->todasneveras;}      

  }//cierra la clase principal 

?>