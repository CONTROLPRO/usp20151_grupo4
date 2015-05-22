<?php
 
 try{
     $conn = new PDO('mysql:host=localhost;dbname=controlpro','root','');
     echo 'Conexion realizada';
    }            
catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }
 
/* @var $_POST type */
$nombre= $_POST["txtusuario"];
$pass= $_POST["txtusuario"];

 
 $query=("SELECT nombre,contrasena FROM `usuario` "
         . "WHERE `nombre`='".mysql_real_escape_string($nombre)."' and "
         . "`contrasena`='".mysql_real_escape_string($pass)."'"); 

$rs= mysql_query($query); 
$row=mysql_fetch_object($rs); 
$nr = mysql_num_rows($rs);


if($nr == 1){ 
   
echo 'Location:menu.html'; 
} 

else if($nr == 0) {    
     
     header("No Ingreso"); 
}   

?>
 
