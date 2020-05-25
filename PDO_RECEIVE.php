<?php 

require("CONNECTION.php");
$dsn= "mysql:host=".$db_host.";dbname=".$db_name;

if(isset($_POST['query'])&&isset($_POST['params'])){
    $query=$_POST['query'];
    $params=$_POST['params'];
  }else{
    echo "error  .. No query or params  in the post";
      die();
  }
try{
$con = new PDO($dsn,$db_user,$db_password);
//set attribute
 $con->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
 $con ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
 $con ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

// web code 

$stmt = $con->prepare($query);
 $data_position=1;
   for ($data= 0; $data<$params; $data++){
    if(isset($_POST['data'.$data])){
    $stmt-> bindValue( $data_position,$_POST['data'.$data], PDO::PARAM_STR );
     $data_position++;
      }else { 
      echo "error  .. Field at  position ".$data." not found";
      die();
    }
   } 
$stmt->execute(); 
$stmt->setFetchMode(PDO::FETCH_ASSOC); 
$result= $stmt->fetchAll();
$json = json_encode($result);
print $json;
// and somewhere later:

/*  while ($row = $stmt->fetch()) { 
  for($index=0; $index< $num_fields;$index++){
    echo $row[$index]. "<sp>"; }
    echo "\n";
  } */


      //output error message if query executio
}catch(PDOEXCEPTON $e){
echo"error".$e->getMessage();
}
  
?>