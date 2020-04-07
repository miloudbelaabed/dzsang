<?php 
require 'connection.php';

 if(isset($_POST["cities"]) || true )  {
    $connection->query("SET NAMES utf8");
   

      $wilayaQuer = "select * from wilayas";

      $wilayas =  mysqli_query($connection,$wilayaQuer);

      $communesQuer = "select * from communes";

      $communes =  mysqli_query($connection,$communesQuer);
          
      $wilayasArr = mysqli_fetch_all($wilayas,MYSQLI_ASSOC);
      $communesArr = mysqli_fetch_all($communes,MYSQLI_ASSOC);


     $merged = array("wilayas"=>$wilayasArr,"communes"=>$communesArr);
     
     header('Content-Type: application/json');
     
     echo json_encode($merged,JSON_UNESCAPED_UNICODE);
      


      mysqli_free_result($wilayas);     
      mysqli_free_result($communes);
      mysqli_close($connection);
     
}else{
    echo "Hello world !";
}





    

?>
