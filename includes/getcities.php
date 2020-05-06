<?php 
require 'connection.php';

 if(isset($_POST["cities"]) || true )  {
        $pdo = connection::connect();
     $pdo->query("SET NAMES utf8");
   

      $wilayaQuer = "select * from wilayas";

      //$wilayas =  mysqli_query($connection,$wilayaQuer);
      $wilayas = $pdo->prepare($wilayaQuer);

      $communesQuer = "select * from communes";

      //$communes =  mysqli_query($connection,$communesQuer);
     $communes = $pdo->prepare($communesQuer);
     $wilayas->execute();
     $communes->execute();
      //$wilayasArr = mysqli_fetch_all($wilayas,MYSQLI_ASSOC);
     $wilayasArr = $wilayas->fetchAll(PDO::FETCH_ASSOC);

     // $communesArr = mysqli_fetch_all($communes,MYSQLI_ASSOC);
       $communesArr = $communes->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($wilayasArr);
     $merged = array("wilayas"=>$wilayasArr,"communes"=>$communesArr);
     
     header('Content-Type: application/json');
     echo json_encode($merged);

     
}else{
    echo "Hello world !";
}

?>
