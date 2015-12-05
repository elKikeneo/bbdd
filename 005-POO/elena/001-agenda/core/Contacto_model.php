<?php
include 'core/Db_model.php';
include 'model/Contacto.php';

class Contacto_model {
   
   private $db;
    
   function __construct() {
       include 'inc/connect.php';
       $this->db = new Db_model($host, $user, $password, $database);
   } 
    
   public function insertContacto($nombre,$apellidos,$telefono,$email,$foto,$id_categoria){
       return $this->db->executeQuery("insert into contactos (nombre,apellidos,telefono,email,foto,id_categoria) values ('$nombre','$apellidos','$telefono','$email','$foto',$id_categoria)");
   }
   
   
   public function deleteContacto($id){
       return $this->db->executeQuery("delete from contactos where id=$id");
   }
   
   
   public function updateContacto($id,$nombre,$apellidos,$telefono,$email,$foto,$id_categoria){
       return $this->db->executeQuery("update contactos set ...");
   }
   
   
   public function selectContacto($id){
       $array=$this->db->executeSelectQuery("select * from contactos where id=$id");
       extract($array);
       return new Contacto($id, $nombre, $apellidos, $telefono, $email, $foto, $id_categoria);
   }
   public function selectContactos(){
       $arrayArrays=$this->db->executeSelectQuery("select * from contactos");
       
       $arrayObj=array();
       foreach($arrayArrays as $fila){
           extract($fila);
           $arrayObj []= new Contacto($id, $nombre, $apellidos, $telefono, $email, $foto, $id_categoria);
       }
       
       return $arrayObj;
   }
   
}
