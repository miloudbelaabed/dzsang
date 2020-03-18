<?php 
require 'connection.php';

 if(isset($_POST["cities"]) || true )  {
    $connection->query("SET NAMES utf8");
   
   /*
    $query = "SELECT * FROM `communes` WHERE wilaya_id = 1";

    // $query = "SELECT wilayas.nom,communes.nom_com FROM wilayas,communes WHERE wilayas.id = communes.wilaya_id";

     $result = mysqli_query($connection,$query);
     while($row = $result->fetch_assoc()) {
              $myArray[] = $row;
          }
*/    

      $wilayaQuer = "select * from wilayas";

      $wilayas =  mysqli_query($connection,$wilayaQuer);

      $communesQuer = "select * from communes";

      $communes =  mysqli_query($connection,$communesQuer);
          
      $wilayasArr = mysqli_fetch_all($wilayas,MYSQLI_ASSOC);
      $communesArr = mysqli_fetch_all($communes,MYSQLI_ASSOC);


      
    /* echo 'Wilayas <br>';
     echo json_encode($wilayasArr,JSON_UNESCAPED_UNICODE);
          
     echo '<br>Cities <br>';
     echo json_encode($communesArr,JSON_UNESCAPED_UNICODE);
     */

     $merged = array("wilayas"=>$wilayasArr,"communes"=>$communesArr);
     
     header('Content-Type: application/json');
     
     echo json_encode($merged,JSON_UNESCAPED_UNICODE);
      


      mysqli_free_result($wilayas);     
      mysqli_free_result($communes);
      mysqli_close($connection);
     
}else{
    echo "Hello world !";
}





    
  
   //  var_dump($states);

//  $query = "select * from volunteer where bloodType='$bloodType'";
//  $result = mysqli_query($connection,$query);
//  while($row = $result->fetch_assoc()) {
//     $myArray[] = $row;
// }
// //var_dump($myArray);
//  header('Content-Type: application/json');
// $valentaire = json_encode($myArray);
// echo $valentaire;

//  //  $valentaire = mysqli_fetch_all($result,MYSQLI_ASSOC);

// // echo var_dump($valentaire) ;
//   //$jsonFile = json_encode($valentaire);
//   //echo $jsonFile;
//  mysqli_free_result($result);
//  mysqli_close($connection);

?>
