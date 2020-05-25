<?php

 // got test_send.php to see implentatio 
 $query="";
  $params="";
  if(isset($_POST['query'])&&isset($_POST['params'])){
    $query=$_POST['query'];
    $params=$_POST['params'];
  }else{
    echo "error  .. No query or params  in the post";
      die();
  }
require("CONNECTION.php");
try{
$con = new PDO($dsn,$db_user,$db_password);
//set attribute
 $con->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);  
$stmt = $con->prepare($query);
 $data_position=1;
   for ($data= 0; $data<$params; $data++){ 
    $query ="";
    if(isset($_POST['data'.$data])){
     $stmt -> bindValue( $data_position,$_POST['data'.$data], PDO::PARAM_STR);
     $data_position++;
      }else { 
      echo "error  .. Field at  position ".$data." not found";
      die();
    }
   } 

   
$stmt->execute();
 echo "ok";
      //output error message if query executio
}catch(PDOEXCEPTON $e){
echo"error".$e->getMessage();
}
  
?>
